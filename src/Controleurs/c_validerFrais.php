<?php

use Outils\Utilitaires;

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$visiteurs = $pdo->getTousLesVisteurCloture();
$dates = $pdo->getTousLesMois();
switch ($action) {
    case 'choisirClientDate':
        require PATH_VIEWS_COMPTABLE . 'v_choixClientDate.php';
        break;
    case 'voirClient':
        $_SESSION['idVisiteur'] = filter_input(INPUT_POST, 'visiteur', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $_SESSION['mois'] = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // Ici grave à mon $post je récupère les éléments associés à mon visiteur en tant que comptable
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($_SESSION['idVisiteur'], $_SESSION['mois']);
        $lesFraisForfait = $pdo->getLesFraisForfait($_SESSION['idVisiteur'], $_SESSION['mois']);
        if ($lesFraisForfait == null && $lesFraisHorsForfait == null) {
            Utilitaires::ajouterErreur('Pas de fiche de frais pour ce visiteur ce mois');
            include PATH_VIEWS . 'v_erreurs.php';
        } else {
            require PATH_VIEWS_COMPTABLE . 'v_choixClientDate.php';

            require PATH_VIEWS_COMPTABLE . 'v_afficheFraisForfait.php';
            require PATH_VIEWS_COMPTABLE . 'v_afficheFraisHorsForfait.php';
        }break;
    case 'validerMajCorrection':
        $lesFrais = filter_input(INPUT_POST, 'lesFrais', FILTER_DEFAULT, FILTER_FORCE_ARRAY);
        if (Utilitaires::lesQteFraisValides($lesFrais)) {
            $pdo->majFraisForfait($_SESSION['idVisiteur'], $_SESSION['mois'],$lesFrais);
        } else {
            Utilitaires::ajouterErreur('Les valeurs des frais doivent être numériques');
            include PATH_VIEWS . 'v_erreurs.php';
        }
        break;
    case 'devTest':
        dd($_POST);
        
        break;
}

