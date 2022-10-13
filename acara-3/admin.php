<?php
$role = 1;
switch($role)
{
    case 1:
        echo "Status: Admin";
        break;
    case 2:
        echo "Status: Member";
        break;
    default:
        echo "Status: Pengunjung";
    }