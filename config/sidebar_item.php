<?php
    $sidebarItems = [
        'Dashboard'   => [
            'id'         => 'dashboard',
            'icon'       => 'home',
            'url'        => 'back.index',
            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
            'trans'      => 'Principal',
            'subMenu'    => [],
        ],
        'Admin title' => [
            'id'         => 'admin.title',
            'icon'       => 'cogs',
            'url'        => null,
            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
            'trans'      => 'Administrar',
            'subMenu'    => [
                'Banner'       => [
                    'id'         => 'admin.banner.title',
                    'icon'       => 'check',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$title_banner,
                    'trans'      => 'Banner',
                    'subMenu'    => [
                        'Add Banner'  => [
                            'id'         => 'admin.banner.add',
                            'icon'       => 'check',
                            'url'        => 'back.banner.add',
                            'permission' => \App\Security\Enums\SecurityPermission::$add_banner,
                            'trans'      => 'Crear',
                            'subMenu'    => [],
                        ],
                        'Update Banner' => [
                            'id'         => 'admin.banner.update',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$update_banner,
                            'trans'      => 'Modifiar',
                            'subMenu'    => [],
                        ],
                        'All Banner'    => [
                            'id'         => 'admin.banner.all',
                            'icon'       => 'check',
                            'url'        => 'back.banner.all',
                            'permission' => \App\Security\Enums\SecurityPermission::$all_banner,
                            'trans'      => 'Todas',
                            'subMenu'    => [],
                        ],
                    ],
                ],
                'owner title'   => [
                    'id'         => 'owner.title',
                    'icon'       => 'check',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                    'trans'      => 'Propietario',
                    'subMenu'    => [
                        'All Owner'    => [
                            'id'         => 'admin.owner.all',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Todas',
                            'subMenu'    => [],
                        ],
                        'Update Owner' => [
                            'id'         => 'admin.owner.update',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Modificar',
                            'subMenu'    => [],
                        ],
                        'Add Owner'    => [
                            'id'         => 'admin.owner.add',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Agregar',
                            'subMenu'    => [],
                        ],
                    ],
                ],
                'Admin Company' => [
                    'id'         => 'admin.company.title',
                    'icon'       => 'check',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                    'trans'      => 'Empresas',
                    'subMenu'    => [
                        'All Company'    => [
                            'id'         => 'admin.company.all',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Todas',
                            'subMenu'    => [],
                        ],
                        'Update Company' => [
                            'id'         => 'admin.company.update',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Modificar',
                            'subMenu'    => [],
                        ],
                        'Add Company'    => [
                            'id'         => 'admin.company.add',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Agregar',
                            'subMenu'    => [],
                        ],
                    ],
                ],
                'Admin Branch'  => [
                    'id'         => 'admin.branch.title',
                    'icon'       => 'check',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                    'trans'      => 'Sucursales',
                    'subMenu'    => [
                        'All Branch'    => [
                            'id'         => 'admin.branch.all',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Todas',
                            'subMenu'    => [],
                        ],
                        'Update Branch' => [
                            'id'         => 'admin.branch.update',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Modificar',
                            'subMenu'    => [],
                        ],
                        'Add Branch'    => [
                            'id'         => 'admin.branch.add',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Agregar',
                            'subMenu'    => [],
                        ],
                    ],
                ],
                'Clients'       => [
                    'id'         => 'admin.branch.data',
                    'icon'       => 'check',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                    'trans'      => 'Clientes',
                    'subMenu'    => [
                        'Search Clients'  => [
                            'id'         => 'admin.client.search',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Buscar',
                            'subMenu'    => [],
                        ],
                        'Details Clients' => [
                            'id'         => 'admin.client.details',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Detalles',
                            'subMenu'    => [],
                        ],
                        'Reservations'    => [
                            'id'         => 'admin.branch.reservations',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Reservaciones',
                            'subMenu'    => [],
                        ],
                        'Data'            => [
                            'id'         => 'admin.branch.data',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Editar Datos',
                            'subMenu'    => [],
                        ],
                    ],
                ],
            ],
        ],
        'Pages'       => [
            'id'         => 'pages',
            'icon'       => 'fa fa-file-text-o',
            'url'        => null,
            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
            'trans'      => 'Paginas estaticas',
            'subMenu'    => [
                'terms and Conditions title' => [
                    'id'         => 'admin.terms.title',
                    'icon'       => 'check',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                    'trans'      => 'Terminos y Condiciones',
                    'subMenu'    => [],
                ],
                'faq title'                  => [
                    'id'         => 'faq.title',
                    'icon'       => 'check',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                    'trans'      => 'FAQ',
                    'subMenu'    => [
                        'All Faq'    => [
                            'id'         => 'admin.faq.all',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Todas',
                            'subMenu'    => [],
                        ],
                        'Update Faq' => [
                            'id'         => 'admin.faq.update',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Modificar',
                            'subMenu'    => [],
                        ],
                        'Add Faq'    => [
                            'id'         => 'admin.faq.add',
                            'icon'       => 'check',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$admin_title,
                            'trans'      => 'Agregar',
                            'subMenu'    => [],
                        ],
                    ],
                ],
            ],
        ],
        'Proprietary' => [
            'id'         => 'proprietary.title',
            'icon'       => 'user',
            'url'        => null,
            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
            'trans'      => 'Propietarios',
            'subMenu'    => [
                'Reservation' => [
                    'id'         => 'proprietary.reservation',
                    'icon'       => 'list',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                    'trans'      => 'reservas de los clientes',
                    'subMenu'    => [
                        'Filtar'       => [
                            'id'         => 'developer.permissions.all',
                            'icon'       => 'list-ol',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                            'trans'      => 'Filtar las Reservación',
                            'subMenu'    => [],
                        ],
                        'all reservas' => [
                            'id'         => 'developer.permissions.all',
                            'icon'       => 'list-ol',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                            'trans'      => 'Reservaciónes',
                            'subMenu'    => [],
                        ],
                    ],
                ],
                'Sucursal'    => [
                    'id'         => 'developer.permissions.Sucursal',
                    'icon'       => 'list-ol',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                    'trans'      => 'Sucursales',
                    'subMenu'    => [
                        'All_su'  => [
                            'id'         => 'developer.permissidons.Sucursal',
                            'icon'       => 'list-ol',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                            'trans'      => 'Todas',
                            'subMenu'    => [],
                        ],
                        'All_det' => [
                            'id'         => 'developer.permissions.Sucursal',
                            'icon'       => 'list-ol',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                            'trans'      => 'Detalles',
                            'subMenu'    => [],
                        ],
                    ],
                ],
                'Pakete'      => [
                    'id'         => 'developer.permissions.all',
                    'icon'       => 'list-ol',
                    'url'        => 'back.security.permission.all',
                    'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                    'trans'      => 'Paquetes',
                    'subMenu'    => [
                        'Agre_pa' => [
                            'id'         => 'developer.permasissions.all',
                            'icon'       => 'list-ol',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                            'trans'      => 'Agregar',
                            'subMenu'    => [],
                        ],
                        'All_pa' => [
                            'id'         => 'developer.permasissions.all',
                            'icon'       => 'list-ol',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                            'trans'      => 'Todos',
                            'subMenu'    => [],
                        ],
                        'pakete' => [
                            'id'         => 'developer.permissdfsions.all',
                            'icon'       => 'list-ol',
                            'url'        => null,
                            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
                            'trans'      => 'Detalles',
                            'subMenu'    => [],
                        ],
                    ],
                ],

            ],
        ],
        'Developers'  => [
            'id'         => 'developer.title',
            'icon'       => 'user',
            'url'        => null,
            'permission' => \App\Security\Enums\SecurityPermission::$security_title,
            'trans'      => 'Seguridad',
            'subMenu'    => [
                'Permission' => [
                    'id'         => 'developer.permissions',
                    'icon'       => 'list',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$add_permissions,
                    'trans'      => 'Permisos',
                    'subMenu'    => [
                        'All'    => [
                            'id'         => 'developer.permissions.all',
                            'icon'       => 'list-ol',
                            'url'        => 'back.security.permission.all',
                            'permission' => \App\Security\Enums\SecurityPermission::$all_permissions,
                            'trans'      => 'Todos los Permisos',
                            'subMenu'    => [],
                        ],
                        'Update' => [
                            'id'         => 'developer.permissions.update',
                            'icon'       => 'list',
                            'url'        => 'back.security.permission.all',
                            'permission' => \App\Security\Enums\SecurityPermission::$update_permissions,
                            'trans'      => 'Modificar Permisos',
                            'subMenu'    => [],
                        ],
                        'Add'    => [
                            'id'         => 'developer.permissions.add',
                            'icon'       => 'check',
                            'url'        => 'back.security.permission.add',
                            'permission' => \App\Security\Enums\SecurityPermission::$add_permissions,
                            'trans'      => 'Agregar Permisos',
                            'subMenu'    => [],
                        ],
                    ],
                ],
                'Roles'      => [
                    'id'         => 'developer.roles',
                    'icon'       => 'list',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$add_roles,
                    'trans'      => 'Roles',
                    'subMenu'    => [
                        'All'    => [
                            'id'         => 'developer.roles.all',
                            'icon'       => 'list',
                            'url'        => 'back.security.roles.all',
                            'permission' => \App\Security\Enums\SecurityPermission::$all_roles,
                            'trans'      => 'Todos los Roles',
                            'subMenu'    => [],
                        ],
                        'Update' => [
                            'id'         => 'developer.roles.update',
                            'icon'       => 'list',
                            'url'        => 'back.security.roles.all',
                            'permission' => \App\Security\Enums\SecurityPermission::$update_roles,
                            'trans'      => 'Modificar Roles',
                            'subMenu'    => [],
                        ],
                        'Add'    => [
                            'id'         => 'developer.roles.add',
                            'icon'       => 'list',
                            'url'        => 'back.security.roles.add',
                            'permission' => \App\Security\Enums\SecurityPermission::$add_roles,
                            'trans'      => 'Agregar Roles',
                            'subMenu'    => [],
                        ],
                    ],
                ],
                'User'       => [
                    'id'         => 'developer.user',
                    'icon'       => 'list',
                    'url'        => null,
                    'permission' => \App\Security\Enums\SecurityPermission::$add_user,
                    'trans'      => 'Usuarios',
                    'subMenu'    => [
                        'All'    => [
                            'id'         => 'developer.user.all',
                            'icon'       => 'list-ol',
                            'url'        => 'back.security.user.all',
                            'permission' => \App\Security\Enums\SecurityPermission::$all_user,
                            'trans'      => 'Todos los Usuarios',
                            'subMenu'    => [],
                        ],
                        'Update' => [
                            'id'         => 'developer.user.update',
                            'icon'       => 'list',
                            'url'        => 'back.security.user.all',
                            'permission' => \App\Security\Enums\SecurityPermission::$update_user,
                            'trans'      => 'Modificar Usuarios',
                            'subMenu'    => [],
                        ],
                        'Add'    => [
                            'id'         => 'developer.user.add',
                            'icon'       => 'check',
                            'url'        => 'back.security.user.add',
                            'permission' => \App\Security\Enums\SecurityPermission::$add_user,
                            'trans'      => 'Agregar Usuarios',
                            'subMenu'    => [],
                        ],
                    ],
                ],
            ],
        ],
        'Account'     => [
            'id'         => 'account',
            'icon'       => 'user',
            'url'        => 'back.account.details',
            'permission' => \App\Security\Enums\SecurityPermission::$dashboard,
            'trans'      => 'Perfil',
            'subMenu'    => [],
        ],
    
    ];
    
    return json_decode(json_encode($sidebarItems));