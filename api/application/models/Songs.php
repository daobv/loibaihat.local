<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Songs{
    protected $db;
    protected $id;
    protected $name;
    protected $writer;
    protected $singer;
    protected $type;
    protected $lyric;
    protected $image;
    public function __construct(){
        $this->db=Zend_Registry::get('db');
    }
    public function listall(){ 
        $sql=$this->db->query("select * from Songs order by id DESC");
        return $sql->fetchAll();
    }
    public function selectSongById($id){
        $sql = $this->db->query("select * from Songs where id=".$id."");
        return $sql->fetchAll();
    }
    public function searchByTitle($title){
        $sql = $this->db->query("select * from Songs where name like '%".$title."%'");
        return $sql->fetchAll();
    }
}