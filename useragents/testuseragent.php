<?php 
    function isJarvis() { 
        return preg_match("jarvisbrowser", $_SERVER["HTTP_USER_AGENT"]); 
    } 

    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }

    if(isJarvis()){ 
        Redirect("/definetly_flag/");
    } else { 
        Redirect("/definetly_not/");
    } 
?> 
