<?php
if ($pokeObj->type === "undefined") {
    echo "it's undefined";
} else {
    switch ($pokeObj->type) {
        case "grass":
            $pokeObj->bgcolortop = $BGColors->grass;
            break;
        case "rock":
            $pokeObj->bgcolortop = $BGColors->rock;
            break;
        case "ice":
            $pokeObj->bgcolortop = $BGColors->ice;
            break;
        case "dragon":
            $pokeObj->bgcolortop = $BGColors->dragon;
            break;
        case "dark":
            $pokeObj->bgcolortop = $BGColors->dark;
            break;
        case "psychic":
            $pokeObj->bgcolortop = $BGColors->psychic;
            break;
        case "bug":
            $pokeObj->bgcolortop = $BGColors->bug;
            break;
        case "flying":
            $pokeObj->bgcolortop = $BGColors->flying;
            break;
        case "steel":
            $pokeObj->bgcolortop = $BGColors->steel;
            break;
        case "fire":
            $pokeObj->bgcolortop = $BGColors->fire;
            break;
        case "fighting":
            $pokeObj->bgcolortop = $BGColors->fighting;
            break;
        case "ground":
            $pokeObj->bgcolortop = $BGColors->ground;
            break;
        case "ghost":
            $pokeObj->bgcolortop = $BGColors->ghost;
            break;
        case "poison":
            $pokeObj->bgcolortop = $BGColors->poison;
            break;
        case "water":
            $pokeObj->bgcolortop = $BGColors->water;
            break;
        case "fairy":
            $pokeObj->bgcolortop = $BGColors->fairy;
            $colortop = "red" ;
            break;
        case "electric":
            $pokeObj->bgcolortop = $BGColors->electric;
            break;
        case "normal":
            $pokeObj->bgcolortop = $BGColors->normal;
            break;
    }
}

if ($pokeObj->type2 === "undefined") {
    echo "it's undefined";
} else {
    switch ($pokeObj->type2) {
        case "grass":
            $pokeObj->bgcolorbottom = $BGColors->grass;
            break;
        case "rock":
            $pokeObj->bgcolorbottom = $BGColors->rock;
            break;
        case "ice":
            $pokeObj->bgcolorbottom = $BGColors->ice;
            break;
        case "dragon":
            $pokeObj->bgcolorbottom = $BGColors->dragon;
            break;
        case "dark":
            $pokeObj->bgcolorbottom = $BGColors->dark;
            break;
        case "psychic":
            $pokeObj->bgcolorbottom = $BGColors->psychic;
            break;
        case "bug":
            $pokeObj->bgcolorbottom = $BGColors->bug;
            break;
        case "flying":
            $pokeObj->bgcolorbottom = $BGColors->flying;
            break;
        case "steel":
            $pokeObj->bgcolorbottom = $BGColors->steel;
            break;
        case "fire":
            $pokeObj->bgcolorbottom = $BGColors->fire;
            break;
        case "fighting":
            $pokeObj->bgcolorbottom = $BGColors->fighting;
            break;
        case "ground":
            $pokeObj->bgcolorbottom = $BGColors->ground;
            break;
        case "ghost":
            $pokeObj->bgcolorbottom = $BGColors->ghost;
            break;
        case "poison":
            $pokeObj->bgcolorbottom = $BGColors->poison;
            break;
        case "water":
            $pokeObj->bgcolorbottom = $BGColors->water;
            break;
        case "fairy":
            $pokeObj->bgcolorbottom = $BGColors->fairy;
            $colortop = "red" ;
            break;
        case "electric":
            $pokeObj->bgcolorbottom = $BGColors->electric;
            break;
        case "normal":
            $pokeObj->bgcolorbottom = $BGColors->normal;
            break;
    }
}