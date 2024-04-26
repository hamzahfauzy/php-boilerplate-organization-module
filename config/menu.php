<?php 

return [
    [
        'label' => 'organization.menu.organizations',
        'route' => routeTo('crud/index',['table'=>'organizations']),
        'icon'  => 'fa-fw fa-xl me-2 fa-solid fa-user-friends',
        'activeState' => [
            'organization.organizations',
        ]
    ],
    [
        'label' => 'organization.menu.employments',
        'route' => routeTo('organization/employments/index'),
        'icon'  => 'fa-fw fa-xl me-2 fa-solid fa-users',
        'activeState' => [
            'organization.organizations',
        ]
    ],
];