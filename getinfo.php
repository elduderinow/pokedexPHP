<?php
include "getpokemon.php";
include "getTypeColor.php";

$pokeObj = new NewPoke();
$BGColors = new poke_colors();

if (!empty($_GET['poke-input'])) {
    $pokeName = $_GET['poke-input'];

    getapi($pokeName);
}



function getapi($pokeName)
{
    global $pokeObj;
    //first api for main content
    $contents = @file_get_contents("https://pokeapi.co/api/v2/pokemon/{$pokeName}");
    $contents = utf8_encode($contents);
    $results = json_decode($contents, true);


    //second api for secondary content
    $contents_sec = @file_get_contents("https://pokeapi.co/api/v2/pokemon-species/{$pokeName}");
    $contents_sec = utf8_encode($contents_sec);
    $results_sec = json_decode($contents_sec, true);

    //3rd api for counting all pokemon
    $contents_count = @file_get_contents("https://pokeapi.co/api/v2/pokemon/");
    $contents_count = utf8_encode($contents_count);
    $results_count = json_decode($contents_count, true);

    if ($results === null || $results_sec === null) {
        $pokeObj->name = "No result";
    } else {
        getinfo($results, $results_sec, $results_count);
    }

}

function getinfo($results, $results_sec, $results_count)
{
    //define the pokeobj globally inside the scope again (don't know why yet).
    global $pokeObj;

    global $BGColors;

    //Find and display the pokemon name.
    $pokeObj->name = $results["forms"][0]["name"];

    if ($results_sec["evolves_from_species"] === null) {
        $pokeObj->evoname = "This pokemon has no evolution";
    } else {
        //Find and display the pokemons evolution + get sprite
        $pokeObj->evoname = "Evolves from: " . $results_sec["evolves_from_species"]["name"];
        $poke_evo_name = $results_sec["evolves_from_species"]["name"];

        //get pokemon api again to get the evolution sprite
        $contents_evo = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$poke_evo_name}");
        $contents_evo = utf8_encode($contents_evo);
        $results_evo = json_decode($contents_evo, true);

        if ($poke_evo_name === null) {
            echo "no image";
        } else {
            $pokeObj->evosprite = $results_evo["sprites"]["front_default"];
        }

    }


    //Find and display the pokemon ID.
    $pokeObj->id = $results["id"];

    //Find and display the pokemon HP.
    $pokeObj->hp = $results["stats"][0]["base_stat"];

    //Find and display the pokemon ATT.
    $pokeObj->attack = $results["stats"][1]["base_stat"];

    //Find and display the pokemon TYPE.
    $pokeObj->type = $results["types"][0]["type"]["name"];
    if (isset($results["types"][1]["type"]["name"])) {
        $pokeObj->type2 = $results["types"][1]["type"]["name"];
    }





    //Find and display the pokemon SPRITE.
    $pokeObj->sprite = $results["sprites"]["front_default"];

    //Find and display the pokemon description.
    $pokeObj->desc = $results_sec["flavor_text_entries"][10]["flavor_text"];

    //Find and display the pokemon passive abilities.
    $pokeAbil = $results["abilities"];
    $abilities = [];
    foreach ($pokeAbil as $elem) {
        $abilities[] = $elem["ability"]["name"];
    }

    $pokeObj -> setAbility($abilities);

    //Locate all the names of the pokemon moves (which are nested in different locations) do a foreach and push them to a new arary.
    $pokmoves = [];

    foreach ($results["moves"] as $mov) {
        array_push($pokmoves, $mov["move"]["name"]);
    }

    //create min and max nr for the randomize button.
    $maxpok = $results_count["count"];
    $ranpok = rand(1, $maxpok);
    var_dump($ranpok);

    $pokeObj -> setRand($ranpok);

    //create max number minus 4 to calculate the range of the random nr.
    $maxnr = count($pokmoves) - 4;
    $randnr = rand(1, $maxnr);

    $pokres = [];
    //Get 4 moves out of the array using the random nr as minimum and +4 as max.
    if (count($pokmoves) == 0) {
        echo "";
    } else {
        for ($i = $randnr; $i < $randnr + 4; $i++) {
            $pokres[] = $pokmoves[$i];
        }
    }


    //update the pokeobj class with the new result
    if ($pokres == null){
        echo "";
    } else {
        $pokeObj->moves = $pokres;
    }


    include "colorswitch.php";

    if (isset($_GET['submitForm'])) {
        if ($_GET["submitForm"] == "Prev") {
            var_dump($pokeObj->id - 1);
            echo "prev button clicked";
        } if ($_GET["submitForm"] == "Next") {
            echo "next button clicked";
            var_dump($pokeObj->id + 1);
        }

    }

}



