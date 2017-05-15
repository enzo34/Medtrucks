<?php
namespace App\Controller;
use App\Controller\AppController;
use Zend\Diactoros\Response\JsonResponse;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**Ceci et un Controller qui s'occupe de prendre et de répertorier tout les centres Hospitaliers**/
class HopitauxController extends AppController {
    public function getcentres() {
        $data = [[
        "id" => 1,
        "type" => "typeDeBatiment",
        "nom" => "nomDuBatiment",
        "coord" => [
            "lat" => 42.269827, "lng" => 5.395887,
        ]
            ], [
                "id" => 2,
                "type" => "typeDeBatiment",
                "nom" => "nomDuBatiment",
                "coord" => [
                    "lat" => 22.269827, "lng" => 8.395887,
                ]
        ],
            ];
        $this->autoRender = FALSE;
        echo json_encode($data);
    }
 public function getPsychiatrie() {
        $data = [[
        "id" => 1,
        "type" => "typeDeBatiment",
        "nom" => "nomDuBatiment",
        "coord" => [
            "lat" => 43.269827, "lng" => 5.395887,
        ]
            ], [
                "id" => 2,
                "type" => "typeDeBatiment",
                "nom" => "nomDuBatiment",
                "coord" => [
                    "lat" => 26.53435, "lng" => 6.89544,
                ]
        ],
            ];
        $this->autoRender = FALSE;
        echo json_encode($data);
    }
}