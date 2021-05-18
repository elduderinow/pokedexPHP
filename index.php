<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Extra links -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
include("getinfo.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="field-container col-sm-12">
            <div id="pokedex">
                <div class="poke-left">
                    <div class="pokeheader">
                        <div class="bol"></div>
                        <div class="bol2"></div>
                        <div class="bol3"></div>
                        <div class="bol4"></div>
                        <div class="wrapperbollen">
                            <div class="bol-small"></div>
                            <div class="bol2-small"></div>
                            <div class="bol3-small"></div>
                            <div class="bol4-small"></div>
                            <div class="bol-small2"></div>
                            <div class="bol2-small2"></div>
                            <div class="bol3-small2"></div>
                            <div class="bol4-small2"></div>
                            <div class="bol5-small2"></div>
                        </div>
                    </div>
                    <svg id="top-bar" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 78">
                        <polygon class="cls-1" points="500 39 250 39 211 78 0 78 0 0 500 0 500 39"/>
                    </svg>

                    <div class="pdname">ポケモン図鑑</div>

                    <div class="display-wrapper">
                        <div class="display">
                            <div class="stats-wrapper row">
                                <div id="poke-HP" class="col-4"> <?php echo $pokeObj->hp; ?> HP</div>
                                <div id="poke-Atk" class="col-4"> <?php echo $pokeObj->attack; ?> Attack</div>
                                <div id="poke-type" class="col-4"> <?php echo $pokeObj->type; ?></div>
                                <div id="pokename" class="col-12">
                                    <?php echo $pokeObj->name; ?>
                                </div>
                            </div>
                            <div class="img-wrapper">
                               <?php
                                if ($pokeObj->sprite == ""){
                                    echo "";
                                } else {
                                    echo '<img id="mainimg" class="pimg" src="';
                                    echo $pokeObj->sprite;
                                    echo '"/>';
                                }
                                ?>
                            </div>

                            <div class="text-wrapper">
                                <div id="poke-text" class="">
                                    <?php echo $pokeObj->desc; ?>
                                </div>
                            </div>
                            <div class="display-evo">
                                <ul id="evolution-list">
                                    <li>
                                        <div id="evolveName"><?php echo $pokeObj->evoname; ?></div>
                                        <?php
                                        if ($pokeObj->evosprite == ""){
                                            echo "";
                                        } else {
                                            echo '<img id="evolvesprite1" src="';
                                            echo $pokeObj->evosprite;
                                            echo '"';
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="left-rand-buttons row">
                        <div class="col">
                            <div class="circle shadow"></div>
                        </div>
                        <div class="col">
                            <div class="midbut select"></div>
                            <div class="midbut start"></div>
                            <div id="poke-id" class="screen">ID: <?php echo $pokeObj->id; ?></div>
                        </div>
                        <div class="col">
                            <!-- <div class="plus">
                                 <div class="blokplus blok1"></div>
                                 <div class="blokplus blok2"></div>
                                 <div class="blokplus blok3"></div>
                             </div>-->
                            <svg id="plusbutton" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 207 207">
                                <path d="M738.5,412.66v47.68a10.16,10.16,0,0,1-10.16,10.16H679.16A10.16,10.16,0,0,0,669,480.66v49.18A10.16,10.16,0,0,1,658.84,540H611.16A10.16,10.16,0,0,1,601,529.84V480.66a10.16,10.16,0,0,0-10.16-10.16H541.66a10.16,10.16,0,0,1-10.16-10.16V412.66a10.16,10.16,0,0,1,10.16-10.16h49.18A10.16,10.16,0,0,0,601,392.34V343.16A10.16,10.16,0,0,1,611.16,333h47.68A10.16,10.16,0,0,1,669,343.16v49.18a10.16,10.16,0,0,0,10.16,10.16h49.18A10.16,10.16,0,0,1,738.5,412.66Z"
                                      transform="translate(-531.5 -333)"/>
                            </svg>
                        </div>

                    </div>


                </div>
                <div class="poke-mid">

                </div>
                <div class="poke-right">
                    <div class="pokeheader">
                    </div>
                    <div class="display">
                        <div class="row">
                            <div class="col-6">
                                <h3>Abilities</h3>
                                <ol id="moves" class="lists">
                                    <?php
                                    if ($pokeObj->abilitites == ""){
                                        echo "";
                                    } else {
                                        foreach ($pokeObj->moves as $elem) {
                                            echo "<li>";
                                            echo $elem;
                                            echo "</li>";
                                        }
                                    }
                                    ?>
                                </ol>
                            </div>
                            <div class="col-6">
                                <h3>Passive Abilities</h3>
                                <ol class="lists">
                                    <?php
                                        if ($pokeObj->abilitites == ""){
                                            echo "";
                                        } else {
                                            foreach ($pokeObj->abilitites as $elem) {
                                                echo "<li>";
                                                echo $elem;
                                                echo "</li>";
                                            }
                                        }
                                    ?>
                                </ol>
                            </div>
                        </div>
                        <div id="input" class="input">
                            <form action="index.php" method="get">
                                <input type="text" name="poke-input" id="poke-input" placeholder="Search Pokémon"/>
                                <input type="submit">
                            </form>
                        </div>
                    </div>

                    <div class="right-buttons">
                        <ul>
                            <li>ABC</li>
                            <li>DEF</li>
                            <li>GHI</li>
                            <li>JKL</li>
                            <!--<li type="submit" id="run" form="formrun">RUN</li>-->
                            <li>MNO</li>
                            <li>PQR</li>
                            <li>STU</li>
                            <li>VWX</li>
                            <li>YZ</li>
                            <li><a target="_blank" href="https://theuselessweb.com/">YOLO</a></li>
                        </ul>
                    </div>

                    <div class="right-rand-buttons">
                        <div class="but1 rightbut"></div>
                        <div class="but2 rightbut"></div>
                        <div id="random" class="rand-button">RND</div>
                        <div id="button" class="rand-button">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- <audio style="opacity: 0" autoplay="autoplay" controls="controls" >
         <source src="files/101-opening.mp3" />
         <source src="files/102-palettetowntheme.mp3" />
     </audio>-->
</div>

</body>

<!-- Optional JavaScript -->
<script src="js/functions.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/v4-shims.min.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/bootstrap.min.js"></script>
</html>