<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_SongListAndSong{
    protected $db;
    protected $id;
    protected $songId;
    protected $songListId;
    public function __construct(){
        $this->db=Zend_Registry::get('db');
    }
    public function listall(){ 
        $sql=$this->db->query("select * from SongLists order by id DESC");
        return $sql->fetchAll();
    }
    public function selectBySongListId($id){
        $sql=$this->db->query("select * from SongListAndSong where songListId = ".$id."");        
        return $sql;
    }
}
