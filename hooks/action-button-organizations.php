<?php

return '
<a href="'.routeTo('crud/index',['table'=>'organization_users','filter'=>['organization_id' => $data->id]]).'" class="btn btn-sm btn-info"><i class="fas fa-users"></i> '.__('organization.label.user').'</a> 
<a href="'.routeTo('crud/index',['table'=>'organization_positions','filter'=>['organization_id' => $data->id]]).'" class="btn btn-sm btn-info"><i class="fas fa-user-tie"></i> '.__('organization.label.positions').'</a>
';