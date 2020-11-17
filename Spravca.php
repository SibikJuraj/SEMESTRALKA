<?php
declare(strict_types=1);
require "Databaza.php";
require "inzeraty/Inzerat.php";
class Spravca
{
    private static $instance = null;
    private Databaza $databaza;
    private array $inzeraty;

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new Spravca();
        }

        return self::$instance;
    }


    public function __construct()
    {
        $this->databaza = new Databaza();
        $this->databaza->processData();
        $this->inzeraty = $this->databaza->getAll();
    }

    public function vypisInzeraty()
    {
        /**
         * @var Inzerat inzerat
         */
        foreach ($this->inzeraty as $inzerat) {
            echo '<div class="container-fluid">';

                echo '<a href="inzerat_detail.php?id='. $inzerat->getID() .'" class="btn btn-large btn-block tlacidlo inzerat">';
                    echo '<h3>'.$inzerat->getTitulok().'</h3>';
                    echo '<hr/>';

                    echo '<div class="row">';
                        echo '<div class="col-lg-9 col-md-8 col-sm-8 col-7">';
                            echo '<p>';
                            echo $inzerat->getText();
                            echo '</p>';
                            echo '</div>';

                            echo '<div class="col-lg-3 col-md-4 col-sm-4 col-5">';
                            echo '<img src="'. $inzerat->getObrazok() .'" alt="" class="img-fluid">';
                        echo '</div>';
                    echo '</div>';

                    echo '<hr/>';

                    echo '<div class="icena">';
                        echo '<p>'    ;
                        echo 'Cena : '. $inzerat->getCena() . '€';
                        echo '</p>';
                    echo '</div>';
                echo '</a>';
            echo '</div>';


        }
    }

    /**
     * @return Databaza
     */
    public function getDatabaza(): Databaza
    {
        return $this->databaza;
    }

    /**
     * @param Databaza $databaza
     */
    public function setDatabaza(Databaza $databaza): void
    {
        $this->databaza = $databaza;
    }

    public function inzeratDetail() : void
    {

        $inzerat = $this->databaza->getInzerat((int) $_GET['id']);
        echo '<div class="container-fluid inzerat-detail">';

            echo '<h3>'.$inzerat->getTitulok().'</h3>';
            echo '<hr/>';

            echo '<div class="row">';
                echo '<div class="col-lg-9 col-md-8 col-sm-8 col-7">';
                    echo '<p>';
                    echo $inzerat->getText();
                    echo '</p>';
                    echo '</div>';

                    echo '<div class="col-lg-3 col-md-4 col-sm-4 col-5">';
                    echo '<img src="'. $inzerat->getObrazok() .'" alt="" class="img-fluid">';
                echo '</div>';
            echo '</div>';

            echo '<hr/>';

            echo '<div class="icena">';
                echo '<p>'    ;
                echo 'Cena : '. $inzerat->getCena() . '€';
                echo '</p>';
            echo '</div>';
        echo '</div>';


    }

    public function doplnUdaje() : void
    {
        $inzerat = $this->databaza->getInzerat((int) $_GET['id']);

        echo '<form action="inzeraty.php" method="post">';

        echo '<input type="hidden" id="id" name="id" value="'. $inzerat->getId() .'">';

        echo'<div class="form-row">';
        echo    '<div class="form-group col-md-6">';
        echo        '<label for="titulok">Titulok:</label>';
        echo        '<br/>';
        echo        '<input class="form-control" id="titulok" type="text" name="titulok" value="'. $inzerat->getTitulok() .'" maxlength="255" required>';
        echo        '<br/>';
        echo    '</div>';
        echo    '<div class="form-group col-md-6">';
        echo       ' <label for="cena">Cena:</label>';
        echo       '<br/>';
        echo        '<input class="form-control" id="cena" type="number" step="any" name="cena" value="'. $inzerat->getCena() .'" min ="0" max="1000000" required>';
        echo        '<br/>';
        echo    '</div>';
        echo '</div>';


        echo'<div class="form-group">';
        echo    '<label for="text">Text:</label>';
        echo    '<br/>';
        echo    '<textarea class="form-control" rows="5" id="text" type="text" name="text" required>'. $inzerat->getText() .'</textarea>';
        echo    '<br/>';
        echo '</div>';



        echo'<div class="form-group">';
        echo    '<label for="obrazok">Obrázok:</label>';
        echo    '<br/>';
        echo    '<input class="form-control-file " id="obrazok" type="url" name="obrazok" value="'. $inzerat->getObrazok() .'" required>';
        echo    '<br/>';

        echo'</div>';


        echo '<br/>';
        echo'<input type="submit" value="Upraviť inzerát" class="btn tlacidlo" name="update">';
    echo '</form>';




    }


}