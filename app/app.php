<?php

    require_once __DIR__. "/../vendor/autoload.php";
    require_once __DIR__. "/../src/Anagram.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app["debug"] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("anagram.html.twig");
    });

    $app->post("/", function() use ($app) {
        $my_Anagram = new Anagram;
        $anagram_compare = $my_Anagram->generateAnagram($_POST["start-word"], $_POST["target-word"]);
        return $app["twig"]->render("compare_results.html.twig", array("results" => $anagram_compare));
    });

    return $app;

?>
