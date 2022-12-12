<?php

include_once __DIR__ . './Models/Movie.php';

$db_movies = [];

$IronMan = new Movie(
    "Iron Man",
    ["Fantascienza"],
    190,
    "1000000",
    false,
    "https://images5.alphacoders.com/523/523395.jpg",
    "Tony Stark / Iron Man, interpretato da Robert Downey Jr.: un ingegnere di un'industria bellica che rimane vittima di un attentato e, successivamente, rapito in Afghanistan. Per fuggire costruisce un'armatura high-tech che indossa lui stesso che man mano perfezionerà."
);

// $Avatar->title = "BelloCiccio";

$Avengers = new Movie(
    "Avengers",
    ["Fantascienza", "azione"],
    130,
    "500000",
    false,
    "https://upload.wikimedia.org/wikipedia/it/a/a6/The_Avengers_Logo.png",
    "In The Avengers, Nick Fury, direttore dello S.H.I.E.L.D., recluta Iron Man, Captain America, Hulk, Thor, Vedova Nera e Occhio di Falco per formare una squadra per fermare Loki, fratello adottivo di Thor, che vuole conquistare la Terra con il suo esercito alieno di Chitauri."
);

$BlackAdam = new Movie(
    "BlackAdam",
    ["Fantascienza", "Bello"],
    100,
    "23456",
    false,
    "https://i0.wp.com/www.comicsuniverse.it/wp-content/uploads/2021/12/2021-12-08-15.38.21-1.jpg?resize=759%2C500&ssl=1",
    "La trama ufficiale: Quasi 5.000 anni dopo essere stato dotato dei poteri onnipotenti degli antichi dei – e imprigionato altrettanto rapidamente – Black Adam (Johnson) viene liberato dalla sua tomba terrena, pronto a scatenare la sua forma unica di giustizia nel mondo moderno."
);
$Avatar = new Movie(
    "Avatar",
    ["Fantascienza", "Azione", "Magico"],
    100,
    "23456",
    false,
    "https://cultura.biografieonline.it/wp-content/uploads/2012/05/avatar-cielo.jpg",
    "L'ex marine Jake Sully è stato reclutato per una missione sul pianeta Pandora con lo scopo di recuperare risorse naturali in esaurimento sulla Terra. Inaspettatamente si ritrova a voler proteggere il mondo magico al quale si sente stranamente legato."
);
$Elemental = new Movie(
    "Elemental",
    ["Animazione", "Avventura", "Magico"],
    100,
    "23456",
    false,
    "https://media-assets.wired.it/photos/6377434d4e90448cb80f6f6f/16:9/w_2560%2Cc_limit/ELEMENTAL_ONLINE-USE-m328_152_pub.pub16.222.jpg",
    "Diretto da Peter Sohn, che già aveva guidato il tenero Il viaggio di Arlo nel 2015, Elemental era stato annunciato per la prima volta lo scorso maggio. Sohn ha raccontato che l'idea gli viene da una fascinazione lontana: “Da ragazzo studiavo la tavola periodica degli elementi e ho sempre pensato che fossero degli appartamenti. Facevo battute sul fatto che il carbonio compariva accanto al nickel ma i due non si fidavano molto l'uno dell'altro”, "
);


array_push($db_movies, $IronMan, $Avengers, $BlackAdam, $Avatar, $Elemental);
?>