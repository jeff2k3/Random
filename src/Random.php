<?php

declare(strict_types=1);

final class Random {

    public static function alpha_num(int $length, array $salts = []) : string {
        if($length < 1 || $length > 128) {
            throw new \InvalidArgumentException("Length must be between 1 and 128.");
        }
        $salt = implode('', $salts);
        
        $entropy = hash('sha512', openssl_random_pseudo_bytes(16) . uniqid($salt, true) . microtime());
        $characterPool = preg_replace('/[^a-zA-Z0-9]/', '', base64_encode($entropy));

        $characters = [];
        
        for($i = 0; $i < $length; $i++) {
            $characters[] = $characterPool[random_int(0, strlen($characterPool) - 1)];
        }
        
        return implode($characters);
    }
}
?>
