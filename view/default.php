<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat Amazin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/fontawesome.all.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="mt-2"><i class="far fa-comments"></i> Live Chat Amazin</h1>

        <?php
        include('view/chat.php');
        include('view/form.php');
        ?>
    </div>
</body>

</html>