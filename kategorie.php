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

    <link rel="stylesheet" href="style.css">
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
                <li class="nav-item active">
                    <a href="kategorie.php" class="btn btn-block tlacidlo">Kategórie</a>
                </li>
                <li class="nav-item">
                    <a href="forum.php" class="btn btn-block tlacidlo">Fórum</a>
                </li>

            </ul>

        </div>
        <a href="login.php" ><strong>Prihlásiť sa</strong></a>
    </nav>


</header>

<h1 >Kategórie</h1>
<hr/>

<div class="container">

    <div class="row">
        <div class="kategoria tlacidlo col-lg-2 col-md-3 col-sm-4 col-6 btn">
            Bicykle <br/><img src="https://simpleicon.com/wp-content/uploads/bicycle.png" alt=""/>
        </div>

        <div class="kategoria tlacidlo col-lg-2 col-md-3 col-sm-4 col-6 btn">
            Automobily <br/><img src="https://simpleicon.com/wp-content/uploads/car1.png" alt=""/>
        </div>

        <div class="kategoria tlacidlo col-lg-2 col-md-3 col-sm-4 col-6 btn">
            Počítače <br/><img src="https://simpleicon.com/wp-content/uploads/pc.png" alt=""/>
        </div>

        <div class="kategoria tlacidlo col-lg-2 col-md-3 col-sm-4 col-6 btn">
            Knihy <br/><img src="http://simpleicon.com/wp-content/uploads/book-7.png" alt=""/>
        </div>

        <div class="kategoria tlacidlo col-lg-2 col-md-3 col-sm-4 col-6 btn">
            Hudba <br/><img src="http://simpleicon.com/wp-content/uploads/headphone-6.png" alt=""/>
        </div>

        <div class="kategoria tlacidlo col-lg-2 col-md-3 col-sm-4 col-6 btn">
            Nehnuteľnosti<br/><img src="http://simpleicon.com/wp-content/uploads/home-2.png" alt=""/>
        </div>

    </div>

</div>



</body>

</html>