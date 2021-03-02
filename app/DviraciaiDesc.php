<?php
namespace TransportApp;
use TransportApp\transport;

class DviraciaiDesc extends Transport{
    private $kaina;
    private $svoris;
    private $aprasymas;
    private $vietSkaic;

    public function __construct($modelis, $marke, $kaina, $svoris, $aprasymas, $vietSkaic)
    {
        parent::__construct($modelis, $marke);
        $this->kaina=$kaina;
        $this->svoris=$svoris;
        $this->aprasymas=$aprasymas;
        $this->vietSkaic=$vietSkaic;
    }
    public function showTransport()
    {
        return [
            $this->marke,
            $this->modelis,
            $this->kaina,
            $this->svoris,
            $this->aprasymas,
            $this->vietSkaic
        ];
    }
}