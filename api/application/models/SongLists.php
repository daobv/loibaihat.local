<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_SongLists{
    protected $db;
    protected $id;
    protected $name;
    public function __construct(){
        $this->db=Zend_Registry::get('db');
    }
    public function listall(){ 
        $sql=$this->db->query("select * from SongLists order by id DESC");
        return $sql->fetchAll();
    }
    public function selectById($id){
        $sql=$this->db->query("select * from SongLists where id = ".$id."");
        $sql = $sql->fetchAll();
        return $sql;
    }
}
