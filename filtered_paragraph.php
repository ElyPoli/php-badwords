<?php
// Tramite la richiesta post recupero il paragrafo completo e la parola da censurare
$complete_paragraph = $_POST["paragraph"];
$bad_word = $_POST["filter"];

// Sostituisco tutte le parole da censurare con gli asterischi
$new_paragraph = str_replace($bad_word, "***", $complete_paragraph);

// Calcolo la lunghezza originale del paragrafo e quella del paragrafo dopo che ho tolto la parola da censurare
$origin_length = strlen($complete_paragraph);
$new_length = strlen($new_paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 45: PHP Badwords - Filtered</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Icone FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Icona -->
    <link rel="icon" href="img/icon-logo.png">
</head>

<body>
    <!-- Paragrafo originale -->
    <div>
        <p><?php echo $complete_paragraph ?></p>
        <p><?php echo "(" . "Length: " . $origin_length . ")" ?> </p>
    </div>
    <!-- Parola da censurare -->
    <div>
        <p><?php echo "Bad Word: " . $bad_word ?> </p>
    </div>
    <!-- Nuovo paragrafo -->
    <div>
        <p><?php echo $new_paragraph ?></p>
        <p><?php echo "(" . "Length: " . $new_length . ")" ?></p>
    </div>
</body>

</html>