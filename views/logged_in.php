<?php

require_once("views/includes/header.php");
require_once("views/includes/sidebar.php");
require_once("views/includes/topbar.php");



switch($page)
{
    //users
    case "user_profile":
        include("pages/account/user_profile.php");
    break;

    case "user_list":
        include("pages/users/user_list.php");
    break;

    case "user_form":
        include("pages/account/user_form.php");
    break;

    case "user_view":
        include("pages/users/user_view.php");
    break;

    case "user_add":
        include("pages/users/user_add.php");
    break;

    case "user_update":
        include("pages/users/user_update.php");
    break;

    case "user_delete":
        include("pages/users/user_delete.php");
    break;

    //profiles
    case "profile_update":
        include("pages/profile/profile_update.php");
    break;
    

    //groups
    case "group_list":
        include("pages/groups/group_list.php");
    break;



    //default page
    default:
        include("pages/default.php");
    break;
}






require_once("views/includes/footer.php"); ?>


