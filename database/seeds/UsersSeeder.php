<?php
    
    use Illuminate\Database\Seeder;
    use App\Components\UUID;
    use App\Model\Users;
    use App\Security\Repositories\RolesRepo;
    use App\Security\Enums\SecurityRoles;


    class UsersSeeder extends Seeder {

        public function run() {

            $user = Users::create([
                'firstname'  => 'developer',
                'lastname'   => 'developer',
                'username'   => 'developer',
                'email'      => 'developer@yopmail.com',
                'details'    => json_encode([]),
                'password'   => bcrypt('developer23'),
                'token'      => UUID::v4(),
                'status'     => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            
            $rolesRepo = new RolesRepo();
            $rolesRepo->addRole($user->id, SecurityRoles::$developer);
            
            $user = Users::create([
                'firstname'  => 'admin',
                'lastname'   => 'admin',
                'username'   => 'admin',
                'email'      => 'admin@yopmail.com',
                'details'    => json_encode([]),
                'password'   => bcrypt('admin23'),
                'token'      => UUID::v4(),
                'status'     => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $rolesRepo = new RolesRepo();
            $rolesRepo->addRole($user->id, SecurityRoles::$super_admin);

            $user = Users::create([
                'firstname'  => 'branch',
                'lastname'   => 'branch',
                'username'   => 'branch',
                'email'      => 'branch@yopmail.com',
                'details'    => json_encode([]),
                'password'   => bcrypt('branch23'),
                'token'      => UUID::v4(),
                'status'     => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $rolesRepo = new RolesRepo();
            $rolesRepo->addRole($user->id, SecurityRoles::$branch);

            $user = Users::create([
                'firstname'  => 'client',
                'lastname'   => 'client',
                'username'   => 'client',
                'email'      => 'client@yopmail.com',
                'details'    => json_encode([]),
                'password'   => bcrypt('client23'),
                'token'      => UUID::v4(),
                'status'     => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $rolesRepo = new RolesRepo();
            $rolesRepo->addRole($user->id, SecurityRoles::$client);

        }

    }
