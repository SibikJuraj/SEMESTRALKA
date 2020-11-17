<?php
require"../Spravca.php";

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
                <li class="nav-item">
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

<h1 >Aktuálny inzerát</h1>
<hr/>

<?php
$spravca = Spravca::getInstance();
$inzerat = $spravca->getDatabaza()->getInzerat((int) $_GET['id']);
?>

<div class="container-fluid inzerat-detail">

    <h3><?php echo $inzerat->getTitulok() ?></h3>
    <hr/>

    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-8 col-7">
            <p><?php echo $inzerat->getText() ?></p>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-5">
            <img src="<?php echo $inzerat->getObrazok() ?>" alt="" class="img-fluid">
        </div>
    </div>

    <hr/>

   <div class="icena">
        <p>Cena : <?php echo $inzerat->getCena() ?> €</p>
   </div>

</div>




<div class="container-fluid">
    <div class="row">
        <a href="inzerat_edit.php?id=<?php echo $inzerat->getId()?>" class="btn tlacidlo edit col-sm-6 col-12">Editovať inzerát</a>
        <form class="col-sm-6 " action="inzeraty.php" method="post">
            <input type="hidden" id="id" name="id" value="<?php echo $inzerat->getId() ?>">
            <input class="btn tlacidlo danger col-12" id="vymazat" type="submit" name="vymazat" value="Vymazať inzerát" >

        </form>


    </div>

</div>



</body>


</html>