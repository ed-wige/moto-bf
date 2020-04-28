<?php
error_reporting(E_ALL);
function autoloard($class)
{
    require "modele/".$class.".class.php";
}
spl_autoload_register('autoloard');