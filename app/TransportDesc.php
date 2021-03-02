<?php
namespace TransportApp;
use TransportApp\transport;

class TransportDesc extends Transport{
    private $kaina;
    private $svoris;
    private $variklis;
    private $variklioGalia;
    private $didGreitis;
    private $aprasymas;
    private $vietSkaic;

    public function __construct($modelis, $marke, $kaina, $svoris, $variklis, $variklioGalia, $didGreitis, $aprasymas, $vietSkaic)
    {
        parent::__construct($modelis, $marke);
        $this->kaina=$kaina;
        $this->svoris=$svoris;
        $this->variklis=$variklis;
        $this->variklioGalia=$variklioGalia;
        $this->didGreitis=$didGreitis;
        $this->aprasymas=$aprasymas;
        $this->vietSkaic=$vietSkaic;
    }

    public function showTransport()
    {
        return[
            $this->marke,
            $this->modelis,
            $this->kaina,
            $this->svoris,
            $this->variklis,
            $this->variklioGalia,
            $this->didGreitis,
            $this->aprasymas,
            $this->vietSkaic

        ];
    }

}