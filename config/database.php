<?php
class database{
    private $db = [
        'host' =>'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'resto-native'
    ];

    public function data(){
        return $this->db;
    }
}