<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
      
    }
    public function indexAction() {
        $this->getHelper('ViewRenderer')
                ->setNoRender();
        $this->getResponse()
                ->setHeader('Content-Type', 'application/json');        
        $this->getResponse()
                ->setHeader('Content-Type', 'application/json; charset=UTF-8');
        $user = new Model_Users();
        $userdata = array('user'=>$user->listall());
        $this->getResponse()
                ->setHeader('Content-type', 'text/plain')
                ->setBody(json_encode($userdata));      
        return;
    }

}
