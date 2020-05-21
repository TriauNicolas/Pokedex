<?php

    include './config.php';
    include './functions.php';
    

    // Variable GET

    $pokemon = 1;

    if(isset($_GET['pokemon']))
    {
        $pokemon = htmlspecialchars($_GET['pokemon']);
    }

    $data = initiate($pokemon);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pokédex</title>
</head>
<body>


<!---------- TOP OF THE SCREEN ---------->


<span class="black_line"></span>

<div class="pokeball">
    <div class="second_circle">
        <div class="third_circle"></div>
    </div>
</div>


<!---------- BUTTONS ---------->


<div class="buttons_pokedex">
    <div class="main_button"></div>
    <div class="other_buttons">
        <div class="first_button secondary_buttons"></div>
        <div class="second_button secondary_buttons"></div>
        <div class="third_button secondary_buttons"></div>
    </div>
</div>


<!---------- MIDDLE BREAK ---------->


<span class="middle_break"></span>


<!---------- RIGHT SIDE POKEDEX ---------->


<div class="pictures_pokemon">
    <img class="front_side" 
    src="<?php echo $data->sprites->front_default; ?>" 
    alt="<?php echo $data->sprites->front_default; ?>"
    >
    <span class="pictures_break"></span>
    <img class="back_side" 
    src="<?php echo $data->sprites->back_default; ?>" 
    alt="<?php echo $data->sprites->back_default; ?>"
    >
    </img>
</div>

<div class="types">
    <div class="type type_1">
        <?php echo $data->types[0]->type->name; 
        ?>
    </div>
    <span class="types_break"></span>
    <div class="type type_2">
        <?php echo $data->types[1]->type->name; 
        ?>
    </div>
</div>


<div class="informations">
    <p class="info_height">
        HEIGHT : <?= $data->height; ?>m
    </p>
    <p class="info_weight">
        WEIGHT : <?= $data->weight; ?>Kg
    </p>
</div>

<h2 class="title_moves">Abilities :</h2>
<div class="abilities">
    <?php
        $pokemon_moves = $data->moves;
        for($i = 0; $i < count($pokemon_moves); $i++)
        {
            echo '<span class="moves">'.$data->moves[$i]->move->name.'- </span>';
        };
    ?>
</div>


<!---------- LEFT SIDE POKEDEX ---------->


<div class="search_and_buttons">
    <div class="name_pokemon">
        <?php echo $data->name; ?>
    </div>

    <form class="form_search" action="#" method="GET">
        <input class="search" type="textView" name="pokemon" value="">
        <input class="button_search" type="submit" value="ENTER">
    </form>

    <div class="container_buttons">
        <button class="button_number">0</button>
        <button class="button_number">1</button>
        <button class="button_number">2</button>
        <button class="button_number">3</button>
        <button class="button_number">4</button>
        <button class="button_number">5</button>
        <button class="button_number">6</button>
        <button class="button_number">7</button>
        <button class="button_number">8</button>
        <button class="button_number">9</button>
    </div>
</div>

    <script>
        let color_type_1 = '<?= $data->types[0]->type->name ; ?>'
        let color_type_2 = '<?= $data->types[1]->type->name ; ?>'
    </script>
    <script src="main.js"></script>
</body>
</html>