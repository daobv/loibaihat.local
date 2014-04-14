<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Model_Users{
    protected $db;
    public function __construct(){
        $this->db=Zend_Registry::get('db');
    }
    public function listall(){ 
        $sql=$this->db->query("select * from Users order by id DESC");
        return $sql->fetchAll();
    }
}
?>