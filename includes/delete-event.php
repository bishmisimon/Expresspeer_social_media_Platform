<?php

session_start();

if (isset($_GET['id']) && isset($_SESSION['userId']))
{
    
    require 'dbh.inc.php';
    
    $event = $_GET['id'];
    
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 'hub';
    }
    
    $sql = "delete from events where event_id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../".$page.".php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $event);
        mysqli_stmt_execute($stmt);
        header("Location: ../".$page.".php");
        exit();
    }
    
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}
else
{
    header("Location: ../".$page.".php");
    exit();
}