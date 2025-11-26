<?php

function base_url($path = "")
{
    return "http://localhost/sitara/" . $path;
}

function is_admin()
{
    return (isset($_SESSION['role']) && $_SESSION['role'] === "admin");
}

function is_user()
{
    return (isset($_SESSION['role']) && $_SESSION['role'] === "user");
}

?>
