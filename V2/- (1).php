//met le dans View/Contact
<?php
$this->set('title_for_layout',"Me Contacter");
 ?>
<?php
 echo $this->Form->create('Contact');
?>
  <?php echo $this->Form->input('name',array('label'=>"Votre nom","required"));?>
  <?php echo $this->Form->input('email',array('label'=>"Votre email","type"=>"email","required"));?>
  <?php echo $this->Form->input('message',array('label'=>"Votre message","type"=>"textearea","required"));?>
  <?php echo $this->Form->input('website',array('label'=>false,"type"=>"text","class"=>"important"));?>
<?php
echo $this->Form->end('Envoyer');
 ?>
