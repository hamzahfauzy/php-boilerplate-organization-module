<?php

use Core\Database;

$db = new Database();
$additionalClause = "";

if(isset($_GET['filter']) && isset($_GET['filter']['organization_user_id']))
{
    unset($fields['organization_user_id']);
    $organizationUser = $db->single('organization_users', [
        'id' => $_GET['filter']['organization_user_id']
    ]);
    $additionalClause = "|organization_id,".$organizationUser->organization_id;
}

$fields['position_id']['type'] .= $additionalClause;

return $fields;