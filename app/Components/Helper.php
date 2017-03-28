<?php
    
    namespace App\Components;
    
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Config;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Storage;
    
    class Helper extends Controller {
        
        public static function response($response, $api, $status = 200, $description = 'OK') {
            if (!$api) {
                return $response;
            } else {
                return self::response_json($response, $status, $description);
            }
        }
        
        public static function response_xml(array $response_array, $status = 200, $description = 'OK', array $extra_header = []) {
            $response_header['Header'] = array_merge([
                'Status'      => $status,
                'Description' => $description,
                'Timestamp'   => strtotime(date('Y-m-d H:i:s')),
            ], $extra_header);
            
            $response_array = array_merge($response_header, ['Results' => $response_array]);
            
            $xml = Array2XMLController::createXML('DotworkersApi', $response_array);
            
            return response()->make($xml->saveXML(), '200')->header('Content-Type', 'text/xml');
        }
        
        public static function response_json($content, $status = 200, $error_description = 'OK', $api = true, $pretty = false) {
            $return = [
                'DotworkersApi' => [
                    'status'  => [
                        'code'        => $status,
                        'description' => $error_description,
                    ],
                    'content' => $content,
                ],
            ];
            
            if ($api) {
                if ((string)request()->get('pretty') === 'true' || $pretty) {
                    return response()->json($return, 200, [], JSON_PRETTY_PRINT);
                } else {
                    return response()->json($return, 200);
                }
            } else {
                return self::array_object($return);
            }
            
        }
        
        public static function sidebar($file) {
            return (require config_path('sidebar/' . $file . '.php'));
        }
        
        public static function get_user_cache() {
            $user_token = self::get_user_token();
            $user       = Cache::get('_user.' . $user_token);
            
            return self::array_object($user);
        }
        
        public static function sum_3minutes() {
            return date('c', strtotime('+3 minute', strtotime(date('c'))));
        }
        
        public static function date_match($date, $match = '-3 minute', $format = 'Y-m-d H:i:s') {
            return date($format, strtotime($match, strtotime($date)));
        }
        
        public static function after($thiss, $inthat) {
            if (!is_bool(strpos($inthat, $thiss))) {
                return substr($inthat, strpos($inthat, $thiss) + strlen($thiss));
            }
        }
        
        public static function after_last($thiss, $inthat) {
            if (!is_bool(self::strrevpos($inthat, $thiss))) {
                return substr($inthat, self::strrevpos($inthat, $thiss) + strlen($thiss));
            }
        }
        
        public static function before($thiss, $inthat) {
            return substr($inthat, 0, strpos($inthat, $thiss));
        }
        
        public static function before_last($thiss, $inthat) {
            return substr($inthat, 0, self::strrevpos($inthat, $thiss));
        }
        
        public static function between($thiss, $that, $inthat) {
            return self::before($that, self::after($thiss, $inthat));
        }
        
        public static function between_last($thiss, $that, $inthat) {
            return self::after_last($thiss, self::before_last($that, $inthat));
        }
        
        public static function array_column($array, $column_name) {
            
            return array_map(function ($element) use ($column_name) {
                return $element[$column_name];
            }, $array);
        }
        
        public static function strrevpos($instr, $needle) {
            $rev_pos = strpos(strrev($instr), strrev($needle));
            if ($rev_pos === false) {
                return false;
            } else {
                return strlen($instr) - $rev_pos - strlen($needle);
            }
        }
        
        public static function cURL($url, $method, array $o = [], $api = true) {
            $options['http']['method'] = $method;
            
            if (isset($o['header'])) {
                $options['http']['header'] = $o['header'];
            }
            
            if (isset($o['data'])) {
                $options['http']['content'] = @http_build_query($o['data']);
            }
            
            $context = @stream_context_create($options);
            $content = @file_get_contents($url, false, $context);
            
            if ($api) {
                return json_decode($content);
            } else {
                return $content;
            }
        }
        
        public static function hashid($value, $length = 6) {
            return (new Hashids($value, $length))->encode(100, 100);
        }
        
        public static function hashid_event($value) {
            return str_replace('-', '', crc32($value));
        }
        
        public static function date($time_transform, $format_time = 'd-m H:i', $time_zone = 'America/Caracas', $tz = 'UTC') {
            $time_zone    = self::timezone();
            $time_gmt     = new \DateTime($time_transform, new \DateTimeZone($tz));
            $time_tz      = new \DateTimeZone($time_zone);
            $time_current = $time_gmt->setTimezone($time_tz);
            
            return $time_current->format($format_time);
        }
        
        public static function to_utc($time_transform, $tz = 'America/Caracas', $format_time = 'Y-m-d H:i:s', $time_zone = 'UTC') {
            $time_gmt     = new \DateTime($time_transform, new \DateTimeZone($tz));
            $time_tz      = new \DateTimeZone($time_zone);
            $time_current = $time_gmt->setTimezone($time_tz);
            
            return $time_current->format($format_time);
        }
        
        public static function getArraySerialize($array) {
            return urlencode(base64_encode(serialize($array)));
        }
        
        public static function getArrayUnSerialize($array) {
            return ['Pay Connections' => unserialize(base64_decode(urldecode(stripslashes($array))))];
        }
        
        public static function hasPermission($slugs) {
            $permissions = self::getPermissionUser(Auth::user()->permissions);
            
            foreach ($slugs AS $slugs_index => $slug) {
                if (isset($permissions[$slug])) {
                    return true;
                }
            }
            
            return false;
        }
        
        public static function getPermissionUser($permissions_find) {
            $permissions = [];
            
            foreach ($permissions_find AS $permissions_index => $permission) {
                $permissions[$permission->slug] = $permission->slug;
            }
            
            return $permissions;
        }
        
        public static function is_even($value = 0) {
            return (($value % 2) === 0) ? true : false;
        }
        
        public static function escape($value) {
            $replace_default = [
                '/',
                '%',
                ';',
                '=',
                '.',
                '\'',
                '\\',
                ' ',
                ',',
                '(',
                ')',
                '>',
                '<',
                '+',
                '-',
            ];
            
            return str_replace($replace_default, '', $value);
        }
        
        public static function json_object($string) {
            return json_decode($string);
        }
        
        public static function array_object(array $array) {
            return json_decode(json_encode($array));
        }
        
        public static function object_array($object) {
            return json_decode(json_encode($object), true);
        }
        
        public static function object_json($object) {
            return json_encode(self::object_array($object));
        }
        
        public static function getCountryWhitTimeZone() {
            $countries = [
                "AF" => [
                    "name" => "Afghanistan",
                ],
                "AL" => [
                    "name" => "Albania",
                ],
                "DZ" => [
                    "name" => "Algeria",
                ],
                "AS" => [
                    "name" => "American Samoa",
                ],
                "AD" => [
                    "name" => "Andorra",
                ],
                "AQ" => [
                    "name" => "Antarctica",
                ],
                "AG" => [
                    "name" => "Antigua & Barbuda",
                ],
                "AR" => [
                    "name" => "Argentina",
                ],
                "AM" => [
                    "name" => "Armenia",
                ],
                "AU" => [
                    "name" => "Australia",
                ],
                "AT" => [
                    "name" => "Austria",
                ],
                "AZ" => [
                    "name" => "Azerbaijan",
                ],
                "BS" => [
                    "name" => "Bahamas",
                ],
                "BD" => [
                    "name" => "Bangladesh",
                ],
                "BB" => [
                    "name" => "Barbados",
                ],
                "BY" => [
                    "name" => "Belarus",
                ],
                "BE" => [
                    "name" => "Belgium",
                ],
                "BZ" => [
                    "name" => "Belize",
                ],
                "BM" => [
                    "name" => "Bermuda",
                ],
                "BT" => [
                    "name" => "Bhutan",
                ],
                "BO" => [
                    "name" => "Bolivia",
                ],
                "BA" => [
                    "name" => "Bosnia & Herzegovina",
                ],
                "BR" => [
                    "name" => "Brazil",
                ],
                "IO" => [
                    "name" => "British Indian Ocean Territory",
                ],
                "BN" => [
                    "name" => "Brunei",
                ],
                "BG" => [
                    "name" => "Bulgaria",
                ],
                "CA" => [
                    "name" => "Canada",
                ],
                "CV" => [
                    "name" => "Cape Verde",
                ],
                "KY" => [
                    "name" => "Cayman Islands",
                ],
                "TD" => [
                    "name" => "Chad",
                ],
                "CL" => [
                    "name" => "Chile",
                ],
                "CN" => [
                    "name" => "China",
                ],
                "CX" => [
                    "name" => "Christmas Island",
                ],
                "CC" => [
                    "name" => "Cocos (Keeling) Islands",
                ],
                "CO" => [
                    "name" => "Colombia",
                ],
                "CK" => [
                    "name" => "Cook Islands",
                ],
                "CR" => [
                    "name" => "Costa Rica",
                ],
                "CI" => [
                    "name" => "Côte d’Ivoire",
                ],
                "HR" => [
                    "name" => "Croatia",
                ],
                "CU" => [
                    "name" => "Cuba",
                ],
                "CW" => [
                    "name" => "Curaçao",
                ],
                "CY" => [
                    "name" => "Cyprus",
                ],
                "CZ" => [
                    "name" => "Czech Republic",
                ],
                "DK" => [
                    "name" => "Denmark",
                ],
                "DO" => [
                    "name" => "Dominican Republic",
                ],
                "EC" => [
                    "name" => "Ecuador",
                ],
                "EG" => [
                    "name" => "Egypt",
                ],
                "SV" => [
                    "name" => "El Salvador",
                ],
                "EE" => [
                    "name" => "Estonia",
                ],
                "FK" => [
                    "name" => "Falkland Islands (Islas Malvinas)",
                ],
                "FO" => [
                    "name" => "Faroe Islands",
                ],
                "FJ" => [
                    "name" => "Fiji",
                ],
                "FI" => [
                    "name" => "Finland",
                ],
                "FR" => [
                    "name" => "France",
                ],
                "GF" => [
                    "name" => "French Guiana",
                ],
                "PF" => [
                    "name" => "French Polynesia",
                ],
                "TF" => [
                    "name" => "French Southern Territories",
                ],
                "GE" => [
                    "name" => "Georgia",
                ],
                "DE" => [
                    "name" => "Germany",
                ],
                "GH" => [
                    "name" => "Ghana",
                ],
                "GI" => [
                    "name" => "Gibraltar",
                ],
                "GR" => [
                    "name" => "Greece",
                ],
                "GL" => [
                    "name" => "Greenland",
                ],
                "GU" => [
                    "name" => "Guam",
                ],
                "GT" => [
                    "name" => "Guatemala",
                ],
                "GW" => [
                    "name" => "Guinea-Bissau",
                ],
                "GY" => [
                    "name" => "Guyana",
                ],
                "HT" => [
                    "name" => "Haiti",
                ],
                "HN" => [
                    "name" => "Honduras",
                ],
                "HK" => [
                    "name" => "Hong Kong",
                ],
                "HU" => [
                    "name" => "Hungary",
                ],
                "IS" => [
                    "name" => "Iceland",
                ],
                "IN" => [
                    "name" => "India",
                ],
                "ID" => [
                    "name" => "Indonesia",
                ],
                "IR" => [
                    "name" => "Iran",
                ],
                "IQ" => [
                    "name" => "Iraq",
                ],
                "IE" => [
                    "name" => "Ireland",
                ],
                "IL" => [
                    "name" => "Israel",
                ],
                "IT" => [
                    "name" => "Italy",
                ],
                "JM" => [
                    "name" => "Jamaica",
                ],
                "JP" => [
                    "name" => "Japan",
                ],
                "JO" => [
                    "name" => "Jordan",
                ],
                "KZ" => [
                    "name" => "Kazakhstan",
                ],
                "KE" => [
                    "name" => "Kenya",
                ],
                "KI" => [
                    "name" => "Kiribati",
                ],
                "KG" => [
                    "name" => "Kyrgyzstan",
                ],
                "LV" => [
                    "name" => "Latvia",
                ],
                "LB" => [
                    "name" => "Lebanon",
                ],
                "LR" => [
                    "name" => "Liberia",
                ],
                "LY" => [
                    "name" => "Libya",
                ],
                "LT" => [
                    "name" => "Lithuania",
                ],
                "LU" => [
                    "name" => "Luxembourg",
                ],
                "MO" => [
                    "name" => "Macau",
                ],
                "MK" => [
                    "name" => "Macedonia (FYROM)",
                ],
                "MY" => [
                    "name" => "Malaysia",
                ],
                "MV" => [
                    "name" => "Maldives",
                ],
                "MT" => [
                    "name" => "Malta",
                ],
                "MH" => [
                    "name" => "Marshall Islands",
                ],
                "MQ" => [
                    "name" => "Martinique",
                ],
                "MU" => [
                    "name" => "Mauritius",
                ],
                "MX" => [
                    "name" => "Mexico",
                ],
                "FM" => [
                    "name" => "Micronesia",
                ],
                "MD" => [
                    "name" => "Moldova",
                ],
                "MC" => [
                    "name" => "Monaco",
                ],
                "MN" => [
                    "name" => "Mongolia",
                ],
                "MA" => [
                    "name" => "Morocco",
                ],
                "MZ" => [
                    "name" => "Mozambique",
                ],
                "MM" => [
                    "name" => "Myanmar (Burma)",
                ],
                "NA" => [
                    "name" => "Namibia",
                ],
                "NR" => [
                    "name" => "Nauru",
                ],
                "NP" => [
                    "name" => "Nepal",
                ],
                "NL" => [
                    "name" => "Netherlands",
                ],
                "NC" => [
                    "name" => "New Caledonia",
                ],
                "NZ" => [
                    "name" => "New Zealand",
                ],
                "NI" => [
                    "name" => "Nicaragua",
                ],
                "NG" => [
                    "name" => "Nigeria",
                ],
                "NU" => [
                    "name" => "Niue",
                ],
                "NF" => [
                    "name" => "Norfolk Island",
                ],
                "KP" => [
                    "name" => "North Korea",
                ],
                "MP" => [
                    "name" => "Northern Mariana Islands",
                ],
                "NO" => [
                    "name" => "Norway",
                ],
                "PK" => [
                    "name" => "Pakistan",
                ],
                "PW" => [
                    "name" => "Palau",
                ],
                "PS" => [
                    "name" => "Palestine",
                ],
                "PA" => [
                    "name" => "Panama",
                ],
                "PG" => [
                    "name" => "Papua New Guinea",
                ],
                "PY" => [
                    "name" => "Paraguay",
                ],
                "PE" => [
                    "name" => "Peru",
                ],
                "PH" => [
                    "name" => "Philippines",
                ],
                "PN" => [
                    "name" => "Pitcairn Islands",
                ],
                "PL" => [
                    "name" => "Poland",
                ],
                "PT" => [
                    "name" => "Portugal",
                ],
                "PR" => [
                    "name" => "Puerto Rico",
                ],
                "QA" => [
                    "name" => "Qatar",
                ],
                "RE" => [
                    "name" => "Réunion",
                ],
                "RO" => [
                    "name" => "Romania",
                ],
                "RU" => [
                    "name" => "Russia",
                ],
                "WS" => [
                    "name" => "Samoa",
                ],
                "SM" => [
                    "name" => "San Marino",
                ],
                "SA" => [
                    "name" => "Saudi Arabia",
                ],
                "RS" => [
                    "name" => "Serbia",
                ],
                "SC" => [
                    "name" => "Seychelles",
                ],
                "SG" => [
                    "name" => "Singapore",
                ],
                "SK" => [
                    "name" => "Slovakia",
                ],
                "SI" => [
                    "name" => "Slovenia",
                ],
                "SB" => [
                    "name" => "Solomon Islands",
                ],
                "ZA" => [
                    "name" => "South Africa",
                ],
                "GS" => [
                    "name" => "South Georgia & South Sandwich Islands",
                ],
                "KR" => [
                    "name" => "South Korea",
                ],
                "ES" => [
                    "name" => "Spain",
                ],
                "LK" => [
                    "name" => "Sri Lanka",
                ],
                "PM" => [
                    "name" => "St. Pierre & Miquelon",
                ],
                "SD" => [
                    "name" => "Sudan",
                ],
                "SR" => [
                    "name" => "Suriname",
                ],
                "SJ" => [
                    "name" => "Svalbard & Jan Mayen",
                ],
                "SE" => [
                    "name" => "Sweden",
                ],
                "CH" => [
                    "name" => "Switzerland",
                ],
                "SY" => [
                    "name" => "Syria",
                ],
                "TW" => [
                    "name" => "Taiwan",
                ],
                "TJ" => [
                    "name" => "Tajikistan",
                ],
                "TH" => [
                    "name" => "Thailand",
                ],
                "TL" => [
                    "name" => "Timor-Leste",
                ],
                "TK" => [
                    "name" => "Tokelau",
                ],
                "TO" => [
                    "name" => "Tonga",
                ],
                "TT" => [
                    "name" => "Trinidad & Tobago",
                ],
                "TN" => [
                    "name" => "Tunisia",
                ],
                "TR" => [
                    "name" => "Turkey",
                ],
                "TM" => [
                    "name" => "Turkmenistan",
                ],
                "TC" => [
                    "name" => "Turks & Caicos Islands",
                ],
                "TV" => [
                    "name" => "Tuvalu",
                ],
                "UM" => [
                    "name" => "U.S. Outlying Islands",
                ],
                "UA" => [
                    "name" => "Ukraine",
                ],
                "AE" => [
                    "name" => "United Arab Emirates",
                ],
                "GB" => [
                    "name" => "United Kingdom",
                ],
                "US" => [
                    "name" => "United States",
                ],
                "UY" => [
                    "name" => "Uruguay",
                ],
                "UZ" => [
                    "name" => "Uzbekistan",
                ],
                "VU" => [
                    "name" => "Vanuatu",
                ],
                "VA" => [
                    "name" => "Vatican City",
                ],
                "VE" => [
                    "name" => "Venezuela",
                ],
                "VN" => [
                    "name" => "Vietnam",
                ],
                "WF" => [
                    "name" => "Wallis & Futuna",
                ],
                "EH" => [
                    "name" => "Western Sahara",
                ],
            ];
            
            foreach ($countries as $k => $v) {
                $tz = \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY, $k);
                
                foreach ($tz as $value) {
                    $t                                  = new \DateTimeZone($value);
                    $offset                             = (new \DateTime("now", $t))->getOffset();
                    $countries[$k]['timezones'][$value] = self::prettyOffset($offset);
                }
            }
            
            $countries = array_merge($countries, [
                'UTC' => [
                    'name'      => 'UTC',
                    'timezones' => ['UTC' => 'UTC+00:00'],
                ],
            ]);
            
            return $countries;
        }
        
        public static function prettyOffset($offset) {
            $offset_prefix    = $offset < 0 ? '-' : '+';
            $offset_formatted = gmdate('H:i', abs($offset));
            
            $pretty_offset = "UTC${offset_prefix}${offset_formatted}";
            
            return $pretty_offset;
        }
        
        public static function date_convert($date, $format = 'Y-m-d') {
            return date($format, strtotime(str_replace('/', '-', $date)));
        }
        
        public static function timezone() {
            $timezone = 'UTC';
            
            return $timezone;
        }
        
        public static function between_dates($startDate, $endDate, $get_ = 'minutes', $round = false) {
            $startDate = strtotime($startDate);
            $endDate   = strtotime($endDate);
            if ($startDate < $endDate) {
                $tmpEndDate = $endDate;
                $endDate    = $startDate;
                $startDate  = $tmpEndDate;
            }
            $return = ($startDate - $endDate);
            switch ($get_) {
                default:
                    break;
                case "minutes"   :
                    $return = $return / 60;
                    break;
                case "hours"     :
                    $return = $return / 60 / 60;
                    break;
                case "days"      :
                    $return = $return / 60 / 60 / 24;
                    break;
                case "weeks"   :
                    $return = $return / 60 / 60 / 24 / 7;
                    break;
            }
            
            if ($round) {
                $return = round($return);
            }
            
            return $return;
        }
        
        public static function percentage($value_one, $value_two) {
            if ($value_one < $value_two) {
                $sign = "down";
            } elseif ($value_one > $value_two) {
                $sign = "up";
            } else {
                $sign = "equal";
            }
            
            if ($value_one === $value_two) {
                $percentage = 0.00;
            } elseif ($value_one <> 0 && $value_two <> 0) {
                $percentage = ((($value_one * 100) / $value_two) - 100);
            } else {
                $percentage = 100.00;
            }
            
            return self::array_object([
                'sign'       => $sign,
                'percentage' => number_format(abs(abs($percentage) - 100), 2),
            ]);
        }
        
        public static function pad($input, $pad_length = 2, $pad_string = "0", $pad_type = STR_PAD_LEFT) {
            return str_pad($input, $pad_length, $pad_string, $pad_type);
        }
        
        public static function number($number, $decimals = 2, $dec_point = '.', $thousands_sep = ',') {
            return number_format($number, $decimals, $dec_point, $thousands_sep);
        }
        
        public static function round($val, $precision = 2, $mode = PHP_ROUND_HALF_DOWN) {
            return round($val, $precision, $mode);
        }
        
        public static function s3_put($file, $name, array $options = []) {
            $opt = self::array_object(array_merge([
                'dir'  => $dir = 'cdn/img/banners/',
                'acl'  => 'public',
                'disk' => 's3',
                'url'  => '//cdn.PayConnections.com/',
            ], $options));
            
            $disk     = Storage::disk($opt->disk);
            $key_name = $opt->dir . sha1($name) . '.' . $file->getClientOriginalExtension();
            $exists   = false;
            
            if ($disk->exists($key_name)) {
                $exists = true;
                $disk->delete($key_name);
            }
            
            $put = $disk->put($key_name, File::get($file), $opt->acl);
            
            return self::array_object([
                'save'   => $put,
                'exists' => $exists,
                'data'   => [
                    'size'      => $file->getClientSize(),
                    'name'      => $file->getClientOriginalName(),
                    'mimeType'  => $file->getClientMimeType(),
                    'extension' => $file->getClientOriginalExtension(),
                    'url'       => $opt->url . str_replace('cdn/', '', $key_name),
                ],
                'string' => sha1($name),
            ]);
        }
    
        public static function route_api($function, $prefix = null, $version = '2.0', array $options = []) {
            $prefix = (is_null($prefix) ? 'api/' . $version : 'api/' . $version . '/' . $prefix);
        
            return \Route::group(array_merge([
                'prefix'     => $prefix,
                'middleware' => 'api',
            ], $options), $function);
        }
    
        public static function route_back($function, $prefix = null, array $options = []) {
            $prefix = (is_null($prefix) ? 'back' : 'back/' . $prefix);
        
            return \Route::group(array_merge([
                'prefix'     => $prefix,
                'middleware' => [
//                    'web',
                    'auth',
                ],
            ], $options), $function);
        }
    
        public static function route_web($function, $prefix = '', array $options = []) {
            $prefix = (is_null($prefix) ? 'web' : 'web/' . $prefix);
            return \Route::group(array_merge([
                'prefix'     => $prefix,
                'middleware' => [
                    'web',
                    //'auth.web',
                ],
            ], $options), $function);
        }
        
    }