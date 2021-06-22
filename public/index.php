<?php
    require_once dirname(__DIR__) . '/vendor/autoload.php';

    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    $loader = new FilesystemLoader(dirname(__DIR__) . '/templates');
    $twig = new Environment($loader);
    
    $reasons = array(
      'Лучше работает с процессором', 'Лучше обрабатывает запросы', 'Проще синтаксис' 
    );

    echo $twig->render('index.html.twig', array('reasons' => $reasons));
?>