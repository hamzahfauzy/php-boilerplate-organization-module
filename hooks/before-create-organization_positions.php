<?php

if(isset($_GET['filter']) && isset($_GET['filter']['organization_id']))
{
    $data['organization_id'] = $_GET['filter']['organization_id'];
}

if(empty($data['parent_id']))
{
    unset($data['parent_id']);
}