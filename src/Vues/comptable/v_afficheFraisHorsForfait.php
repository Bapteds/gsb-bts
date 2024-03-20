<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<hr>
<div class="row">
    <div class="panel panel-info">
        <div class="panel-heading">Descriptif des éléments hors forfait</div>
        <form method="POST" action="index.php?uc=validerFrais&action=devTest" >
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th class="date">Date</th>
                        <th class="libelle">Libellé</th>  
                        <th class="montant">Montant</th>  
                        <th class="action">&nbsp;</th> 
                    </tr>
                </thead>  
                <tbody>
                    <?php
                    foreach ($lesFraisHorsForfait as $unFraisHorsForfait) {
                        $date = $unFraisHorsForfait[4];
                        $montant = $unFraisHorsForfait['montant'];
                        $id = $unFraisHorsForfait['id'];
                        $libelle = htmlspecialchars($unFraisHorsForfait['libelle']);
                        ?>       
                        <tr>
                            <td><input type="date" value="<?php echo $date ?>" name="date/<?php echo $id ?>"></td>
                            <td><input type="text" value="<?php echo $libelle ?>" name="libelle/<?php echo $id ?>"></td>
                            <td><input type="number" value="<?php echo $montant; ?>" name="montant/<?php echo $id ?>"</td>
                            <td>
                                <input type="submit" class="btn btn-success" value="Corriger">
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>  
            </table>
        </form>
    </div>
    <div>
        <button class="btn btn-success" type="submit">Valider</button>
        <button class="btn btn-danger" type="reset">Reinitialiser</button>
    </div>
</div>