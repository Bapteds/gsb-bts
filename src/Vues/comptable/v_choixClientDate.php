<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<div>
    <form method="POST" action="index.php?uc=validerFrais&action=voirClient">
        <div>            
            <label for="name">Choisir le visiteur: </label>
            <select name="visiteur" id="name">
                <?php foreach ($visiteurs as $visiteur) { ?>
                    <option value="<?php echo $visiteur['id'] ?>"> <?php echo $visiteur['visiteur'] ?></option>
                <?php } ?>
            </select>
            <label for="date">Mois: </label>
            <select name="date" id="date">
                <?php foreach ($dates as $date) { ?>
                    <option value="<?php echo $date['date'] ?>"> <?php echo $date['date'] ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Envoyer">
        </div>
    </form>

</div>
