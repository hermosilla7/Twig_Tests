<?php
    require_once 'lib/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);

    echo $twig->render('index.twig', array(
        'name' => 'USCSS Nostromo',
        'type' => 'Hauler',
        'owner' => 'Weyland-Yutani',
        'crew' => array(
            array('name' => 'Name1', 'role' => 'Role1', 'status' => 'Alive'),
            array('name' => 'Name2', 'role' => 'Role2', 'status' => 'Unknown', 'notes' => 'Possibly synthetic.'),
            array('name' => 'Name3', 'role' => 'Role3', 'status' => 'Dead'),
    )
    ));
?>