<?php

// Comme je n'ai pas de namespace dans mon fichier,
// je me trouve à la racine.
// Du coup le \ devant oFramework est "facultatif", je suis déjà a la racine

use \oFramework\Application as App;

// Inclusion de Composer
require __DIR__.'/../vendor/autoload.php';

// Je créé une instance de mon application (autrement dit de mon site web)
$application = new App();

// Je démarre mon Application
$application->run();