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
                <li class="nav-item">
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

<h1 >Registrácia</h1>
<hr/>

<div class="container-fluid">
    <form action="inzeraty.php" class="nastred">
        <label for="prezyvka">Prezývka:</label>
        <br/>
        <input id="prezyvka" type="text" name="prezyvka">
        <br/>

        <label for="meno">Meno:</label>
        <br/>
        <input id="meno" type="text" name="meno">
        <br/>

        <label for="priezvisko">Priezvisko:</label>
        <br/>
        <input id="priezvisko" type="text" name="priezvisko">
        <br/>


        <label for="heslo">Heslo:</label>
        <br/>
        <input id="heslo" type="password" name="heslo">
        <br/>

        <label for="potvrdenie hesla">Potvrdenie hesla:</label>
        <br/>
        <input id="potvrdenie hesla" type="password" name="potvrdenie hesla">
        <br/>


        <br/>
        <input type="submit" value="Registrovať sa" class="btn tlacidlo">
    </form>


</div>




</body>


</html>