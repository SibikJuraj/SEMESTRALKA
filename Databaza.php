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
        $stmt = $this->pdo->query("SELECT * FROM semestralka.inzeraty ORDER BY id DESC");
        foreach ($stmt as $inzerat) {
            $inzeraty[] = new Inzerat((int) $inzerat['id'], $inzerat['titulok'], $inzerat['text'],(float) $inzerat['cena'], $inzerat['obrazok']);

        }

        return $inzeraty;
    }

    public function processData() : void
    {
        if (isset($_POST['odoslat'])) {
            $titulok = $_POST['titulok'];
            $text = $_POST['text'];
            $cena = (float) $_POST['cena'];
            $obrazok = $_POST['obrazok'];

            $this->save($titulok, $text, $cena, $obrazok);
        }
        if (isset($_POST['update'])) {
            $id = (int) $_POST['id'];
            $titulok = $_POST['titulok'];
            $text = $_POST['text'];
            $cena = (float) $_POST['cena'];
            $obrazok = $_POST['obrazok'];

            $this->update($id, $titulok, $text, $cena, $obrazok);
        }
        if (isset($_POST['vymazat'])) {
            $id = (int) $_POST['id'];
            $this->delete($id);
        }
    }


    public function save(string $titulok, string $text, float $cena, string $obrazok) : void
    {

        $stmt = $this->pdo->prepare ("INSERT INTO semestralka.inzeraty(titulok, text, cena, obrazok) VALUES (?, ?, ?, ?)");
        $stmt->execute([$titulok, $text, $cena, $obrazok]);


    }

    public function update(int $id, string $titulok, string $text, float $cena, string $obrazok) : void
    {
        $stmt = $this->pdo->prepare("UPDATE semestralka.inzeraty SET titulok=?, text=?, cena=?, obrazok=? WHERE inzeraty.id=?");
        $stmt->execute([$titulok,$text,$cena,$obrazok,$id]);

    }

    public function delete(int $id) : void
    {
        $this->pdo->query("DELETE FROM semestralka.inzeraty WHERE id = $id");

    }


    public function getInzerat(int $id) : Inzerat
    {
        $stmt = $this->pdo->query("SELECT * FROM semestralka.inzeraty WHERE id = $id")->fetch();
        $inzerat = new Inzerat((int) $stmt['id'], $stmt['titulok'], $stmt['text'],(float) $stmt['cena'], $stmt['obrazok']);
        return $inzerat;
    }



}