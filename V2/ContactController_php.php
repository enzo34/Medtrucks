<?php

/**
 *
 */
class ContactController extends AppController
{
  public $components= array('Session','Security');

  function index()
  {
    if($this->request->data['Contact']['website']){
      $this->Session->setFlash("Votre mail nous est bien parvenus","ok");
    }
    else{

  if($this->request->is('post')){
    if($this->Contact->send($this->request->data['Contact'])){
      $this->Session->setFlash("Votre mail nous est bien parvenus","ok");
      $this->request->data= array();
        }
    else {
        $this->Session->setFlash("Un problème est survenus merci de corriger vos champs","ko");
    }
  }
  }
}
}
