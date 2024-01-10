<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- bootstrap -->
</head>

<body class="bg-dark text-white">
    <!-- main -->
    <main>
        <h2 class="text-center mt-5">Grazie per esserti iscritto alla newsletter</h2>
        <p class="text-center mt-3">L'indirizzo email con cui ti sei registrato è: <span class="text-primary"><?php echo $_SESSION['email'] ?></span></p>
    </main>
    <!-- /main -->

    <!-- footer -->
    <footer>
        <h6 class="text-center mt-5">Boolean classe #110</h6>
    </footer>
    <!-- /footer -->
</body>

</html>