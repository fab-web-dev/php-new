<?php
if ( (!isset($_GET['article'])) || ($_GET['article'] == '1') ) {

    $bg = 'assets/img/post-bg.jpg';
    $color = "green";
    $title = 'Planche de surf';
    $subtitle = 'Comment bien la choisir ?';
    $content = 'Vous commencez à prendre vos premières <b>vagues</b> et souhaitez passer le cap dans la pratique de votre sport préféré ? Sans doute le moment est-il venu de vous offrir votre première planche de surf ! Petit bémol : il existe presqu’autant de modèle que de shapers… Aussi, choisir sa planche de surf peut s’avérer un peu plus compliqué qu’on ne le croit au premier abord.

    Quel shape est fait pour vous ? Quel type de vagues voulez-vous surfer ? Comment va-t-elle se comporter à la rame ? Quid du poids et de la <a href="#">taille</a> ?

    Tous ces éléments – vous l’aurez devinez – et bien d’autres encore, vont être déterminant pour votre montée en niveau. Dans cet article, on vous livre tous les secrets pour choisir la planche de surf en adéquation avec votre niveau et vos objectifs !

    <style>
        .test {
            color: ' . $color . ';
        }
    </style>

    1. Pourquoi choisir sa planche de surf ?
    2. Quels sont les différents types de planche de surf ? 
    3. Comment choisir sa planche de surf ?
    4. Où acheter sa <span class="test">planche de surf</span> ?';

}

else if ($_GET['article'] == '2') {

$bg = 'https://www.surfcamp.fr/wp-content/uploads/2020/03/image-67.jpg';
$color = "";
$title = 'Découvrez notre sélection';
$subtitle = 'Les dix meilleurs spots de surf en rance';
$content = 'La mythique plage d’Hossegor se situe dans les Landes. Elle est surnommée par certains le  Hawaï  de l’Europe. Pour y accéder, prenez le TGV à la gare de Paris Montparnasse et descendez à Bayonne quatre heures plus tard';

}

else if ($_GET['article'] == '3') {

    $bg = 'https://www.surfcamp.fr/wp-content/uploads/2020/03/image-6-1.jpg';
    $color = "";
    $title = 'Nazare surf : les différents spots';
    $subtitle = 'Praia do Norte';
    $content = 'Le spot de surf le plus connu de Nazaré est Praia do Norte, avec les plus grandes vagues du Portugal, voire du monde. Ce surf est destiné aux surfeurs vraiment experts. Les vagues à Praia do Norte sont grandes, lourdes et puissantes. Même si vous ne savez pas surfer, il peut valoir la peine de venir à Nazaré simplement pour observer les performances des surfeurs Big wave. Les meilleures conditions à Praia da Norte sont celles où le vent vient de l’est pour un swell nord-ouest. C’est un beach break qui fonctionne à marée basse.';
    
}

else {

    $bg = 'https://img.freepik.com/vecteurs-libre/glitch-error-404-page_23-2148105404.jpg';
    $title = 'Erreur 404';
    $subtitle = 'Page inexistante !';
    $content = '';
}
