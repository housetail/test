<?php
if (IS) {
    echo 'FUCK';
} else {
    echo 'OK';
}

class ORMConfig
{
    const GAME = 'movefun_game';
    const BOSS = 'movefun_boss';
    const ACTIVITY = 'movefun_activity';

    public static $config = array(
        self::GAME => array(
            'connection_string' => "mysql:host=mysql.movefun.com;port=3307;dbname=movefun_game",
            'username' => self::GAME,
            'password' => 'GqyrGLRRED',
            'driver_options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ),
            'id_column' => 'ID',
            'id_column_overrides' => array(),
            'return_result_sets' => true
        ),
        self::BOSS => array(
            'connection_string' => 'mysql:host=mysql.movefun.com;port=3307;dbname=movefun_boss',
            'username' => self::BOSS,
            'password' => 'GqyrGLRRED',
            'driver_options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ),
            'id_column' => 'ID',
            'id_column_overrides' => array(),
            'return_result_sets' => true
        ),
        self::ACTIVITY => array(
            'connection_string' => 'mysql:host=mysql.movefun.com;port=3307;dbname=movefun_activity',
            'username' => self::ACTIVITY,
            'password' => 'GqyrGLRRED',
            'driver_options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ),
            'id_column' => 'ID',
            'id_column_overrides' => array(),
            'return_result_sets' => true
        )
    );
}

var_dump(ORMConfig::$config);
