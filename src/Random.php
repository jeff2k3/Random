<?php

declare(strict_types=1);

final class Random {

    public static function alpha_num(array $salts = [], int $length = 32) : string {
        if($length <= 0) {
            throw new \InvalidArgumentException("Lenght must be greater than 0.");
        }
        $salt = implode($salts);
        $entropy = hash('sha256', uniqid('', true) . microtime() . $salt . random_bytes(16));
        $characterPool = rtrim(base64_encode($entropy), "=");
        $characters = [];
        
        for($i = 0; $i < $length; $i++) {
            $characters[] = $characterPool[random_int(0, strlen($characterPool) - 1)];
        }
        return implode($characters);
    }
}
?>
