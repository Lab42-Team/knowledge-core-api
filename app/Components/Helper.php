<?php

namespace App\Components;

class Helper
{
    /**
     * Возвращает IP-адрес клиента.
     *
     * @return string
     */
    public static function getIp() {
        $keys = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'REMOTE_ADDR'
        ];
        foreach ($keys as $key)
            if (!empty($_SERVER[$key])) {
                $array = explode(',', $_SERVER[$key]);
                $ip = trim(end($array));
                if (filter_var($ip, FILTER_VALIDATE_IP))
                    return $ip;
            }
        return '';
    }
}
