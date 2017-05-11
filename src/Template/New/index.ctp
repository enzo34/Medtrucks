<h2>Users</h2>

<!-- link to add new users page -->
<div class='upper-right-opt'>
    <?php echo $this->Html->link( '+ New Centre', array( 'action' => 'add' ) ); ?>
</div>

<table style='padding:5px;'>
    <!-- table heading -->
    <tr style='background-color:#fff;'>
        <th>id</th>
        <th>nom</th>
        <th>type</th>
        <th>coorx</th>
        <th>coory</th>
        <th>rue</th>
        <th>cpville</th>
        <th>paiement</th>
    </tr>

<?php


    //Boucle pour afficher tous les enregistrements récupérés
    foreach( $Centre as $user ){

        echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['nom']}</td>";
            echo "<td>{$user['type']}</td>";
            echo "<td>{$user['coorx']}</td>";
            echo "<td>{$user['coory']}</td>";
            echo "<td>{$user['rue']}</td>";
            echo "<td>{$user['cpville']}</td>";
            echo "<td>{$user['paiement']}</td>";

            //Voici les liens pour éditer et supprimer des actions
            echo "<td class='actions'>";
                echo $this->Html->link( 'Edit', array('action' => 'edit', $user['id']) );

                //on utilise une requete post (pour des raisons de sécurité)
                echo $this->Form->postLink( 'Delete', array(
                        'action' => 'delete',
                        $user['id']), array(
                            'confirm'=>'Etes vous sure de vouloir supprimer ce centre' ) );
            echo "</td>";
        echo "</tr>";
    }
?>

</table>
