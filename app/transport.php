<?php

namespace TransportApp;

class Transport
{
    protected $modelis;
    protected $marke;

    public function __construct($modelis, $marke)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;

    }
    public function showTransport()
    {
        return[
            $this->modelis,
            $this->marke
        ];
    }
}