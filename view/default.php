<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat Service Client Amazin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/fontawesome.all.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">LiveChatAmazin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" name="search" placeholder="Rechercher" aria-label="Rechercher">
                    <button class="btn btn-outline-dark" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="col-10 offset-1">
            <h1 class="my-3"><i class="far fa-comments"></i> Live Chat Amazin</h1>
            <?php
            require('chat.php');
            require('form.php');
            ?>
        </div>
    </div>
</body>

</html>