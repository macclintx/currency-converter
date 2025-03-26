<?php

//defining rates 
    define('USD_To_KSH_rate', 129.42);
    define('GBP_To_KSH_rate', 166.82);
    define('EUR_To_KSH_rate', 139.17);
    define('JPY_To_KSH_rate', 0.85);



//usd to ksh

    function usdToKsh($value){
        return USD_To_KSH_rate * $value;
    }

    echo  "Ksh ".usdToKsh(13);