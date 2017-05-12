<?php

namespace App\Controller;

use App\Controller\AppController;



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MapController extends AppController  {
    
    public function map(){

        $render= $this->render('/Pages/map');
        }
       public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');


    }  
        
    }
   
    