<?php

    namespace App\Security\Enums;

    /**
     * Class Permissions
     *
     * This class define static SecurityPermission
     *
     * @package namespace App\Security\Enums
     * @author  Estarly Olivar
     */
    class SecurityPermission {

        public static $dashboard = 1;

        public static $security_title = 2;

        public static $add_permissions = 3;

        public static $update_permissions = 4;

        public static $all_permissions = 5;

        public static $add_roles = 6;

        public static $update_roles = 7;

        public static $all_roles = 8;

        public static $add_user = 9;

        public static $update_user = 10;

        public static $all_user = 11;
        
        public static $admin_title = 12;

        public static $branch_title = 13;
        
        public static $company_title = 14;

        public static $reservations_title = 15;

        public static $client_title = 16;

        public static $view_branch = 17;
        
        public static $view_reservations = 18;
        
        public static $view_search_location = 19;
        
        public static $view_search_appreciation = 20;
        
        public static $view_favorites = 21;

        public static $title_banner = 22;

        public static $add_banner = 23;

        public static $update_banner = 24;

        public static $all_banner = 25;

    }
