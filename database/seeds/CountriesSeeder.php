<?php

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function getCountries()
    {
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

        return $countries;
    }

    public function run()
    {

        foreach ($this->getCountries() as $country_index => $country) {
            if(isset($country['name'])){
                \DB::table('countries')->insert([
                    'name' => $country['name'],
                    'iso'       => $country_index,
                    'details'       => $country_index,
                ]); 
            }            
            
        }
    }

}
