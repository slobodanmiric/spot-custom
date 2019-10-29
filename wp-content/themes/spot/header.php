<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/hover.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<?php wp_head(); ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#pocetna"><img src="img/logo.png" style="height: 60px; margin-bottom: 10px; margin-top: 10px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#pocetna">POCETNA</a></li>
                    <li><a href="#proizvodi">PROIZVODI</a></li>
                    <li><a href="#proizvodi">NOVOSTI</a></li>
                    <li><a href="#proizvodi">GALERIJA</a></li>
                    <li><a href="kontakt.html">KONTAKT</a></li>
                    <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Moja korpa</a></li>
                    <li>
                        <select>
                            <option value="rsd"> rsd</option>
                            <option value="fa-eur">&#xf153; euro</option>
                            <option value="fa-dollar">&#xf155; usd dollar</option>

                        </select>
                    </li>
                    <li>
                        <a href="#"><img src="img/gb.png"></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/rs.png"></a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>