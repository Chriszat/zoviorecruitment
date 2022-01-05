<?php

include('config.php');

/**
 * Creates absolute url from the
 * provided path
 * 
 * @param string $url
 * @return string
 */
function url_from_absolute_uri($path=''){
    return CONFIG['base_url'].ltrim($path, '/');
}

/**
 * Gets absolute url
 * 
 * @return string
 */
function get_absolute_uri(){
    return CONFIG['base_url'];
}

function build_api_uri($path){
    return CONFIG['api_base_url'].ltrim($path, '/');
}