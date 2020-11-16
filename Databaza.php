<?php
declare(strict_types=1);

class Databaza
{
    private $db = "semestralka";
    private $host = "localhost";
    private $user = "root";
    private $pass = "dtb456";

    private PDO $pdo;

    /**
     * Databaza constructor.
     * @param PDO $pdo
     */
    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo 'Connection failed : ' . $e->getMessage();
        }

    }


    /**
     * @return Inzerat[]
     */
    public function getAll() : array {
        $inzeraty=[];
        $stmt = $this->pdo->query("SELECT * FROM semestralka.inzeraty");
        foreach ($stmt as $inzerat) {
            $inzeraty[] = new Inzerat($inzerat['titulok'], $inzerat['text'],(float) $inzerat['cena'], $inzerat['obrazok']);
        }

        return $inzeraty;
    }

    public function processData() : void
    {
        if (isset($_POST['sent'])) {
            $this->save(new Inzerat($_POST['titulok'],$_POST['text'],$_POST['cena'],$_POST['obrazok']));
        }
    }


    public function save(Inzerat $inzerat) : void
    {

        $stmt = $this->pdo->prepare ("INSERT INTO semestralka.inzeraty(titulok, text, cena, obrazok) VALUES (?, ?, ?, ?)");
        $stmt->execute([$inzerat->getTitulok(),$inzerat->getText(),$inzerat->getCena(),$inzerat->getObrazok()]);

    }
}