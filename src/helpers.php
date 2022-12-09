<?php
if (!function_exists('larakiapay')) {
    /**
     * Larakiapay
     *
     * @return \Larakiapay\Larakiapay
     */
    function larakiapay(){
        return app('larakiapay');
    }
}
if (!function_exists('jsonTo')) {
    /**
     * Fill an object or an array with json key=>value
     *
     * @param  $json
     * @param object|array $arrayOrObject
     * @return object|array
     */
    function jsonTo($json, &$arrayOrObject){
        
        $data = is_array($json) ? $json : (array)$json ;
       
        foreach ($data as $key => $value) {
            if (is_object($arrayOrObject)) {
                if (is_string($key)) {
                    $arrayOrObject->{$key} = $value ;
                }else {
                    $arrayOrObject[$key] = $value ;
                }
            }
            
        }
        return $arrayOrObject ;

    }
}