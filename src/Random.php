<?php

declare(strict_types=1);

final class Random {

    public static function alpha_num(array $salts = [], int $length = 32) : string {
        if($length <= 0) {
            throw new \InvalidArgumentException("Lenght must be greater than 0.");
        }
        $salt = implode($salts);
        $entropy = hash('sha256', uniqid('', true) . microtime() . $salt . random_bytes(16));
        $characterPool = preg_replace('/[^a-zA-Z0-9]/u', '', base64_encode($entropy));

        $poolLength = strlen($characterPool);
        
        if($poolLength <= 0) {
            throw new \RuntimeException("Character pool is empty. Ensure enough entropy is provided.");
        }
       $characters = [];
        
        for ($i = 0; $i < $length; $i++) {
            $characters[] = $characterPool[random_int(0, $poolLength - 1)];
        }
        return implode($characters);
    }
}
?>
