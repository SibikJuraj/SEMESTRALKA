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


}