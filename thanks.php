<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors=[];

    if (empty($_POST['user_lastname'])) {
        $errors['errorLastname']= 'Veuillez rentrer votre nom';
    }
    if (empty($_POST['user_firstname'])) {
        $errors['errorFirstname']= 'Veuillez rentrer votre prénom';
    }
    if (empty($_POST['user_subject'])) {
        $errors['errorSubject']= 'Veuillez choisir un sujet';
    }
    if (!filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)) {
        $errors['errorMail']= 'Veuillez rentrer un email valide, c\'est pourtant pas dur';
    }
    if (empty($_POST['user_phone_number'])) {
        $errors['errorPhonenumber']= 'Veuillez rentrer un téléphone valide';
    }
     if (empty($_POST['user_message'])) {
        $errors['errorMessage']= 'T\'as oublié le message coco !';
    }

    if (empty($errors)) {
        echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de '    . $_POST['user_subject'] . '.' . '<br>' . '<br>';
        echo 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phone_number'] . ' dans les plus brefs délais pour traiter votre demande :' . '<br>' . '<br>' ;
        echo $_POST['user_message'];
    } else {
        echo implode(',', $errors);
    }

}

