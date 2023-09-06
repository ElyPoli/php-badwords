<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 45: PHP Badwords</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Icone FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Icona -->
    <link rel="icon" href="img/icon-logo.png">
</head>

<body>
    <div class="bg-success-subtle vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <h1 class="text-success text-center fw-bold pb-5">PHP Badwords</h1>
            <div class="d-flex align-items-center justify-content-center">
                <form action="filtered_paragraph.php" method="POST" class="w-50">
                    <div class="mb-3">
                        <label class="form-label text-uppercase fw-bold">Your Text</label>
                        <textarea class="form-control" rows="3" name="paragraph"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-uppercase fw-bold">Bad Word</label>
                        <input type="text" class="form-control" name="filter">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>