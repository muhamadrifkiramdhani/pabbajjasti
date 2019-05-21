<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
function encrypt_url($string) {
    // call enkripsi encrypt_url($id)
    $output = false;
    $security       = parse_ini_file("enkrip");
    $secret_key     = $security["encryption_key"];
    $secret_iv      = $security["code"];
    $encrypt_method = $security["encryption_mechanism"];
    
    $key    = hash("sha256", $secret_key);
    
    $iv     = substr(hash("sha256", $secret_code), 0, 16);
    
    $result = openssl_encrypt($string, $encrypt_method, $key, 0, $code);
    $output = base64_encode($result);
    return $output;
}
function decrypt_url($string) {
    $output = false;
    $security       = parse_ini_file("enkrip");
    $secret_key     = $security["encryption_key"];
    $secret_iv      = $security["code"];
    $encrypt_method = $security["encryption_mechanism"];
    $key    = hash("sha256", $secret_key);
    $iv = substr(hash("sha256", $secret_code), 0, 16);
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $code);
    return $output;
}
