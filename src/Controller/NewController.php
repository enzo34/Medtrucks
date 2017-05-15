<?php
namespace App\Controller;
$sql = new \PDO ("mysql:host=localhost;dbname=medtrucks","root","root");
use App\Controller\AppController;



class NewController extends AppController {


public function index() {
    //pour retrouver tous les centre
    ////connection a la base de donnée, a changer selon notre base de donnée
      $dbh= new \PDO ("mysql:host=localhost;dbname=medtrucks","root","root");
  $stmt  = ($dbh->query("SELECT * FROM Centre WHERE nom ='PHARMACIE DROUET-PHILIPPE ANNE-MARIE'"))->fetchAll($dbh::FETCH_ASSOC);

}
public function add(){

    //on vérifie si c'est un requete en post

    if ($this->request->is('post')){
        //on sauvegarde le nouveau centre
        if ($this->Centre->save($this->request->data)){


            $this->Session->setFlash('Centre de santé rajouter.');
            //redirection vers la liste des centres
            $this->redirect(array('action' => 'index'));

        }else{
            //si la sauvegarde a échoué
            $this->Session->setFlash('Impossible de rajouter ce centre de santé');

        }
    }


}
  public function edit() {
      //on get l'id du centre
      $id = $this->request->params['nom'][''];

      //on set l'id du centre
      $this->Centre->id = $id;

      //on vérifie si l'id existe déja
      if( $this->Centre ){

          if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
              //on sauvegarde le centre
              if( $this->Centre->save( $this->request->data ) ){


                  $this->Session->setFlash('Le centre a été editer');

                  //redirection à la liste des centres
                  $this->redirect(array('action' => 'index'));

              }
              else
              {
                  $this->Session->setFlash('Impossible de modifier le centre. Veuillez recomencer');
              }

          }
          else
          {

              //on lit la liste des centres
              //Alors il remplira automatiquement votre formulaire html
              $this->request->data = $this->Centre->read();
          }

      }else{
          //Si ce n'est pas trouvé, nous dirons à l'utilisateur que le centre n'existe
          $this->Session->Flash->set('Le centre que vous voulez modifier est inconnus.');
          $this->redirect(array('action' => 'index'));

      }


  }
public function delete() {
    $id = $this->request->params['nom'][0];


    // la demande doit être une request post
    // C'est pourquoi nous utilisons la méthode postLink sur notre vue pour supprimer le centre
    if( $this->request->is('get') ){

        $this->Session->setFlash('La méthode pour supprimer est indisponible');
        $this->redirect(array('action' => 'index'));
    }else{

        if( !$id ) {
            $this->Session->setFlash('Id invalide pour le centre');
            $this->redirect(array('action'=>'index'));

        }else{
            //supprimer centre
            if( $this->Centre->delete( $id ) ){
                $this->Session->setFlash('Le centre a été supprimer');
                //redirection à la liste des centres
                $this->redirect(array('action'=>'index'));

            }else{
                //si impossible a supprimer
                $this->Session->setFlash('Impossible de supprimer le centre');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
}
}
