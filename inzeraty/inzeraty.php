<?php
require "../Spravca.php";
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <title>INZERATIK</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../style.css">
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="menu collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="inzeraty.php" class="btn btn-block tlacidlo">Nové inzeráty</a>
                </li>
                <li class="nav-item">
                    <a href="../kategorie.php" class="btn btn-block tlacidlo">Kategórie</a>
                </li>
                <li class="nav-item">
                    <a href="../forum.php" class="btn btn-block tlacidlo">Fórum</a>
                </li>

            </ul>

        </div>
        <a href="../login.php" ><strong>Prihlásiť sa</strong></a>
    </nav>


</header>

<h1 >Nové inzeráty</h1>
<hr/>

<div class="nastred">
    <a href="inzerat_novy.php" class="btn tlacidlo">+ Pridaj inzerát +</a>
</div>


<?php
$spravca = Spravca::getInstance();
$spravca->vypisInzeraty();

?>


</body>


</html>