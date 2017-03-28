<?php
    
    use Illuminate\Database\Seeder;
    use App\Security\Enums\SecurityPermission;
    use App\Security\Enums\SecurityRoles;
    
    class PermissionRoleSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            /**
             * DEVELOPER SecurityPermission
             */

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$dashboard,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
    
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$security_title,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$add_permissions,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$update_permissions,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$all_permissions,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$add_roles,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$update_roles,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$all_roles,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$add_user,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$update_user,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$all_user,
                'role_id'       => SecurityRoles::$developer,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            /**
             * Super Admin SecurityPermission
             */
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$dashboard,
                'role_id'       => SecurityRoles::$super_admin,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$title_banner,
                'role_id'       => SecurityRoles::$super_admin,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$add_banner,
                'role_id'       => SecurityRoles::$super_admin,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$update_banner,
                'role_id'       => SecurityRoles::$super_admin,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);          
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$all_banner,
                'role_id'       => SecurityRoles::$super_admin,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$admin_title,
                'role_id'       => SecurityRoles::$super_admin,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$company_title,
                'role_id'       => SecurityRoles::$super_admin,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            /**
             * Branch SecurityPermission
             */
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$dashboard,
                'role_id'       => SecurityRoles::$branch,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$branch_title,
                'role_id'       => SecurityRoles::$branch,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);

            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$reservations_title,
                'role_id'       => SecurityRoles::$branch,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            /**
             * Client SecurityPermission
             */
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$dashboard,
                'role_id'       => SecurityRoles::$client,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$client_title,
                'role_id'       => SecurityRoles::$client,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$view_branch,
                'role_id'       => SecurityRoles::$client,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$view_reservations,
                'role_id'       => SecurityRoles::$client,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$view_search_location,
                'role_id'       => SecurityRoles::$client,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);            
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$view_search_appreciation,
                'role_id'       => SecurityRoles::$client,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
            \DB::table('permission_role')->insert([
                'permission_id' => SecurityPermission::$view_favorites,
                'role_id'       => SecurityRoles::$client,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            
        }
    }
