<?php
if (!defined('PASSWORD_BCRYPT')) {
        define('PASSWORD_BCRYPT', 1);
        define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
}

Class Password {

    public function __construct() {}


    function generate_entropy($bytes){
        $buffer = '';
        $buffer_valid = false;
        if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
            $buffer = mcrypt_create_iv($bytes, MCRYPT_DEV_URANDOM);
            if ($buffer) {
                $buffer_valid = true;
            }
        }
        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
            $buffer = openssl_random_pseudo_bytes($bytes);
            if ($buffer) {
                $buffer_valid = true;
            }
        }
        if (!$buffer_valid && is_readable('/dev/urandom')) {
            $f = fopen('/dev/urandom', 'r');
            $read = strlen($buffer);
            while ($read < $bytes) {
                $buffer .= fread($f, $bytes - $read);
                $read = strlen($buffer);
            }
            fclose($f);
            if ($read >= $bytes) {
                $buffer_valid = true;
            }
        }
        if (!$buffer_valid || strlen($buffer) < $bytes) {
            $bl = strlen($buffer);
            for ($i = 0; $i < $bytes; $i++) {
                if ($i < $bl) {
                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                } else {
                    $buffer .= chr(mt_rand(0, 255));
                }
            }
        }
        return $buffer;
    }

}