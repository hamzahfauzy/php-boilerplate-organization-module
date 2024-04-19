<?php 

return [

    'organizations'  => [
        'parent_id' => [
            'label' => __('organization.label.parent'),
            'type'  => 'options-obj:organizations,id,name'
        ],
        'name' => [
            'label' => __('organization.label.name'),
            'type'  => 'text'
        ],
        'record_type' => [
            'label' => __('organization.label.record_type'),
            'type'  => 'text'
        ],
    ],

    'organization_users'  => [
        'organization_id' => [
            'label' => __('organization.label.organization'),
            'type'  => 'options-obj:organizations,id,name'
        ],
        'user_id' => [
            'label' => __('organization.label.user'),
            'type'  => 'options-obj:users,id,name'
        ],
        'role' => [
            'label' => __('organization.label.role'),
            'type'  => 'text'
        ],
    ],

];