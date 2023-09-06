<?php
// Tramite la richiesta post recupero il paragrafo completo e la parola da censurare
$complete_paragraph = $_POST["paragraph"];
$bad_word = $_POST["filter"];
$bad_word_lowercase = strtolower($bad_word); // trasformo in minuscolo la parola da censurare

// Sostituisco tutte le parole da censurare con gli asterischi
$new_paragraph = str_replace($bad_word_lowercase, "***", $complete_paragraph);

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
    <div class="bg-success-subtle vh-100 d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <h1 class="text-success fw-bold pb-1">PHP Badwords</h1>
            <!-- Parola da censurare -->
            <h4 class="text-success fst-italic pb-5"><?php echo "Word filtered: " . $bad_word ?></h4>
            <div class="d-flex align-items-center justify-content-around">
                <!-- Paragrafo originale -->
                <div>
                    <h5 class="text-success fw-bold pb-1">Original paragraph</h5>
                    <p class="text-success fst-italic pb-1"><?php echo "(" . "Length: " . $origin_length . ")" ?> </p>
                    <div class="bg-success text-white rounded-4 p-3">
                        <p class="m-0 p-0"><?php echo $complete_paragraph ?></p>
                    </div>
                </div>
                <!-- Nuovo paragrafo -->
                <div>
                    <h5 class="text-success fw-bold pb-1">Filtered paragraph</h5>
                    <p class="text-success fst-italic pb-1"><?php echo "(" . "Length: " . $new_length . ")" ?></p>
                    <div class="bg-success text-white rounded-4 p-3">
                        <p class="m-0 p-0"><?php echo $new_paragraph ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>