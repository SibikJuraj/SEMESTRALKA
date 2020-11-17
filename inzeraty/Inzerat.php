<?php
declare(strict_types=1);

class Inzerat
{

    private int $id;
    private string $titulok;
    private string $text;
    private float $cena;
    private string $obrazok;

    public function __construct(int $id, string $titulok, string $text, float $cena, string $obrazok)
    {
        $this->titulok = $titulok;
        $this->text = $text;
        $this->cena = $cena;
        $this->obrazok = $obrazok;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitulok(): string
    {
        return $this->titulok;
    }

    /**
     * @param string $titulok
     */
    public function setTitulok(string $titulok): void
    {
        $this->titulok = $titulok;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return float
     */
    public function getCena(): float
    {
        return $this->cena;
    }

    /**
     * @param float $cena
     */
    public function setCena(float $cena): void
    {
        $this->cena = $cena;
    }

    /**
     * @return string
     */
    public function getObrazok(): string
    {
        return $this->obrazok;
    }

    /**
     * @param string $obrazok
     */
    public function setObrazok(string $obrazok): void
    {
        $this->obrazok = $obrazok;
    }


}