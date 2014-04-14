<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SongListsController extends Zend_Controller_Action {

    public function init() {
       $this->getHelper('ViewRenderer')
                ->setNoRender();
        $this->getResponse()
                ->setHeader('Content-Type', 'application/json');        
        $this->getResponse()
                ->setHeader('Content-Type', 'application/json; charset=UTF-8');
    }
    public function indexAction() {      
        $songLists = new Model_SongLists();
        $data = array('songlist'=>$songLists->listall());
        $this->getResponse()
                ->setHeader('Content-type', 'text/plain')
                ->setBody(json_encode($data));      
        return;
    }
    public function viewAction(){
         $id = $this->getRequest()->getParam("id");
         $songListsObj = new Model_SongLists();
         $songList = array("info"=>$songListsObj->selectById($id));
         $songListAndSong = new Model_SongListAndSong();
         $songListId = $songListAndSong->selectBySongListId($id);

    }
   
}