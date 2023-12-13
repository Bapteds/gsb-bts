<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<div class="alert alert-warning" role="alert"><strong>Rappel : </strong>Lorem Ipsum
</div>
<div id="accueil">
    <h2>
        Espace comptable<small> - <?= $_SESSION['role'] ?> : 
            <?= $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?></small>
    </h2>
</div>
<div class="row" id="comptable-color-id">
    <div class="col-md-12  white-back">
        <div class="panel panel-primary white-back">
            <div class="panel-heading white-back" >
                <h3 class="panel-title  ">
                    <span class="glyphicon glyphicon-bookmark"></span>
                    Gestions
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=gererFrais&action=saisirFrais"
                           class="btn btn-success btn-lg orange orange-border orange-hover" role="button">
                            <span class="glyphicon glyphicon-ok"></span>
                            <br>Valider fiches de frais</a>
                        <a href="index.php?uc=etatFrais&action=selectionnerMois"
                           class="btn btn-primary btn-lg orange orange-border" role="button">
                            <span class="glyphicon glyphicon-eur"></span>
                            <br>Suivre le paiement des fiches de frais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
