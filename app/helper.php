<?php

if(!function_exists('p')){
function p($data){
    echo "<pre>";
    print_r($data)
    ;
    
    echo"<pre>";



}
}

if(!function_exists('formated_date')){
    function formated_date($date,$format){

        $formateddate = date($format , strtotime($date));
        return $formateddate;
    }
}