<?php

return '
<a href="'.routeTo('crud/index',['table'=>'organization_user_positions','filter'=>['organization_user_id' => $data->id]]).'" class="btn btn-sm btn-info"><i class="fas fa-users"></i> '.__('organization.label.positions').'</a>
';