<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/5
 * Time: 00:29
 */

namespace App\Helpers;

class SecurityAES
{
    public static function encode($key, $data)
    {
        $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB), MCRYPT_RAND);
        $enc = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_ECB, $iv);
//        $dat = base64_encode($enc);
        return Security::base64UrlEncode($enc);
    }

    public static function decode($key, $encode)
    {
        $dat = Security::base64UrlDecode($encode);
        $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB), MCRYPT_RAND);
        $dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $dat, MCRYPT_MODE_ECB, $iv);
        return $dec;
    }
}