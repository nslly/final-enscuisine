<?php

    spl_autoload_register('myAutoLoader'); // pag aralan mo to bonak di gagana yung mga inheritance ng mga class kapag wala to

    function myAutoLoader($className) {
        $path = 'classes/' . $className . '.php';
        
        if(!file_exists($path)){
            return false;
        }
        include_once $path;
    }