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
    
];