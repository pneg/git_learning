<?php

$string = '{
    "appid":"1000258", 
    
     "limit":10,
    "page":1,
   "sign":"{{sign_value}}"
}';

$string = json_decode($string, true);
