<?php
error_reporting(E_ALL);
function autoloard($class)
{
    require "modeles/".$class.".php";
}
spl_autoload_register('autoloard');