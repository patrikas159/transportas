<!doctype html>
<html lang="lt">
<head>
    <title>trans</title>
</head>
<body>
<?php
use TransportApp\transport;
use TransportApp\TransportDesc;
use TransportApp\DviraciaiDesc;
use TransportApp\MotociklaiDesc;

$transport = new TransportDesc('Polo', 'Volkswagen', '4000eur', '1200kg', 'desel', '1.2l', '180km/h', 'Pigus miesto automobilis', 5);
$dviraciai = new DviraciaiDesc('Aim', 'Cube', '595eur', '14,4 kg', 'Kalnų dviratis', '1');
$motociklai = new MotociklaiDesc('Diavel 1260/S', 'Ducati', 'patrol', '1,262cc', '281km/h', '20000eur', '223kg', 'Greitas kelių motociklas', 2)
?>

<ul>
    <?php foreach($transport->showTransport() as $transport):?>
        <li><?=$transport;?></li>
    <?php endforeach;?>
</ul>
<ul>
    <?php foreach($dviraciai->showTransport() as $transport):?>
        <li><?=$transport;?></li>
    <?php endforeach;?>
</ul>

<ul>
    <?php foreach($motociklai->showTransport() as $transport):?>
        <li><?=$transport;?></li>
    <?php endforeach;?>
</ul>