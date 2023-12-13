<?php

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
switch ($action) {
    case 'choisirClientDate':
        $visiteurs = $pdo->getTousLesVisteurCloture();
        $dates = $pdo->getTousLesMois();
        break;
    case 'voirClient':
        dd($_POST);

        break;
}

require PATH_VIEWS_COMPTABLE . 'v_choixClientDate.php';
