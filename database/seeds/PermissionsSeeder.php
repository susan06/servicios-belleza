<?php
    
    use Illuminate\Database\Seeder;
    
    class PermissionsSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 1,
                'name' => 'Dashboard',
            ]);
            
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 2,
                'name' => 'Security Title',
            ]);
            
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 3,
                'name' => 'Add Permissions',
            ]);
            
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 4,
                'name' => 'Update Permissions',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 5,
                'name' => 'All Permissions',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 6,
                'name' => 'Add Roles',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 7,
                'name' => 'Update Roles',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 8,
                'name' => 'All Roles',
            ]);
            
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 9,
                'name' => 'Add User',
            ]);
    
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 10,
                'name' => 'Update User',
            ]);
    
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 11,
                'name' => 'All User',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 12,
                'name' => 'Admin Title',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 13,
                'name' => 'Branch Title',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 14,
                'name' => 'Company Title',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 15,
                'name' => 'Reservations Title',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 16,
                'name' => 'Client Title',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 17,
                'name' => 'View Branch',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 18,
                'name' => 'View Reservations',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 19,
                'name' => 'View Search Location',
            ]);

            \App\Security\Entities\SecurityPermission::create([
                'id'   => 20,
                'name' => 'View Search Appreciation',
            ]);
            
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 21,
                'name' => 'View Favorites',
            ]);
    
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 22,
                'name' => 'Title Banner',
            ]);
    
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 23,
                'name' => 'Add Banner',
            ]);
    
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 24,
                'name' => 'Update Banner',
            ]);
    
            \App\Security\Entities\SecurityPermission::create([
                'id'   => 25,
                'name' => 'All Banner',
            ]);
            
        }
    }
