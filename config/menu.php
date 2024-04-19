<?php 

return [
    [
        'label' => 'organization.menu.organizations',
        'icon'  => 'fa-fw fa-xl me-2 fa-solid fa-cubes',
        'activeState' => [
            'organization.organizations',
            'organization.organization_users',
        ],
        'items' => [
            [
                'label' => 'organization.menu.organizations',
                'route' => routeTo('crud/index',['table'=>'organizations']),
                'activeState' => [
                    'organization.organizations',
                    'organization.organization_users',
                ]
            ],
        ]
    ],
];