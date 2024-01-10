<?php
$email = $_POST["email"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- bootstrap -->
</head>

<body class="bg-dark text-light">
    <!-- header -->
    <header>
        <h1 class="text-center mt-5">PHP Iscrizione Newsletter</h1>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <div class="col-5 mx-auto">
            <form action="index.php" method="POST" class="d-flex flex-column align-items-center my-5">
                <h6 class="pb-3">Iscriviti alla newsletter classe #110</h6>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="email" placeholder="Email address" name="email">
                    <label for="email" class="text-dark">Email address</label>
                </div>
                <button class="btn btn-primary">Iscriviti</button>
            </form>
            <?php if ($email === "") : ?>
                <div class="alert alert-info text-center" role="alert">
                    Clicca il bottone iscriviti dopo aver inserito la mail
                </div>
            <?php elseif (strpos($email, "@") !== false && (strpos($email, ".") !== false)) : ?>
                <div class="alert alert-success text-center" role="alert">
                    Iscrizione confermata!
                </div>
            <?php else : ?>
                <div class="alert alert-danger text-center" role="alert">
                    Iscrizione non confermata! Inserisci un mail valida (con "@" e ".")
                </div>
            <?php endif; ?>
        </div>

    </main>
    <!-- /main -->

    <!-- footer -->
    <footer>
        <h6 class="text-center mt-5">Boolean classe #110</h6>
    </footer>
    <!-- /footer -->
</body>

</html>