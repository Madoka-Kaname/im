<?php

namespace im\helper;

class Config
{
    const CONFIG = [
        'database' => [
            'host'    => '118.25.21.33',
            'port'    => 3306,
            'db'      => 'yjy_dev',
            'user'    => 'root',
            'pass'    => 'cYn1mg9l0YiOfAWG',
            'charset' => 'utf8mb4'
        ],
    ];

    /**
     * @param $key
     * @return mixed
     * @throws \Exception
     */
    public static function get($key)
    {
        if (!array_key_exists($key, array_keys(self::CONFIG))) {
            throw new \Exception('No related configuration found');
        }

        return self::CONFIG[$key];
    }

}