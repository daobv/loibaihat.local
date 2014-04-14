<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SongsController extends Zend_Controller_Action {

    public function init() {
        $this->getHelper('ViewRenderer')
                ->setNoRender();
    }

    public function indexAction() {

        $song = new Model_Songs();
        $songs = array('songs' => $song->listall());
        $this->getResponse()
                ->setHeader('Content-type', 'application/javascript')
                ->setBody(json_encode($songs));
        return;
    }

    public function viewAction() {
        $id = $this->getRequest()->getParam("id");
        $songModel = new Model_Songs();
        $song = array('songs' => $songModel->selectSongById($id));
        $this->getResponse()
                ->setHeader('Content-type', 'application/javascript')
                ->setBody(json_encode($song));
        return;
    }
    public function searchAction(){
        $title = $this->getRequest()->getParam("title");        
        $songModel = new Model_Songs();
        $song = array('songs' => $songModel->searchByTitle($title));
        $this->getResponse()
                ->setHeader('Content-type', 'application/javascript')
                ->setBody(json_encode($song));
        return;
    }

}
