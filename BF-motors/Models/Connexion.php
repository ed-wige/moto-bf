<?php
 
function bdd()
{
    try
    {
        $db= new PDO('mysql:host=localhost;dbname=bf-motors','root','');
    } 
    catch (Exception $e)
    {
        $e->getMessage();
    }
    return $db;
}

    }
    