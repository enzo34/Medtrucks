<h2>Rajouter un nouveau centre de santé</h2>

<div class='upper-right-opt'>
    <?php echo $this->Html->link( 'List Centre', array( 'action' => 'index' ) ); ?>
</div>

<?php
//Voici notre formulaire d'ajout, nommez les champs de même que les noms des colonnes de la base de données
echo $this->Form->create('Centre');

    echo $this->Form->input('nom');
    echo $this->Form->input('type');
    echo $this->Form->input('coorx');
    echo $this->Form->input('coory');
    echo $this->Form->input('rue');
    echo $this->Form->input('cpville');
    echo $this->Form->input('paiement');

echo $this->Form->end();
?>
