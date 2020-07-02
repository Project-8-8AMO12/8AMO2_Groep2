@extends('app')

@section('title', "De imker vereniging van Leiden en omstreken!")

@section('style')

    <style>
        #text-header {
            margin-top: 20px;
        }
    </style>

@endsection

@section('content')

<section id="text-header" class="container w-75">
    <div class="tile is-ancestor">
        <div class="tile is-parent is-vertical has-fixed-size">
            <div class="tile is-child box">
                <p class="title">De imkergroep Leiden</p>
                <p class="subtitle">Officieel NBV vereniging</p>
                <p>Er is in ons land een aantal imkersverenigingen, waarvan de Nederlandse Bijenhouders Vereniging (NBV) met bijna 6000 leden, de grootste is. De Imkersvereniging Leiden en omstreken is aangesloten bij de NBV.</p>
                <p>Regelmatig organiseert onze vereniging imkersavonden. Op deze bijeenkomsten worden lezingen gehouden en films vertoond. Ook zijn deze avonden het moment waarop imkers elkaar ontmoeten en ervaringen uitwisselen. Soms worden ook excursies georganiseerd. De imkersavonden vinden in principe altijd plaats op de laatste vrijdag van de maand. Ze worden gehouden in de kantine van de Tuinvereniging Cronesteijn aan het Boerenpad 1 te Leiden.</p>
            </div>
            <div class="tile box is-child">
                <div class="box has-background-warning has-text-centered"><a class="has-text-white has-text-weight-bold">Activiteiten &rarr;</a></div>
                <div class="box has-background-warning has-text-centered"><a class="has-text-white has-text-weight-bold">Cursussen &rarr;</a></div>
                <div class="box has-background-warning has-text-centered"><a class="has-text-white has-text-weight-bold">Lid Worden &rarr;</a></div>
            </div>
        </div>
        <div class="tile is-parent">
            <div class="tile is-child box">
                <a class="twitter-timeline" data-height="500" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</section>

<section class="pt-1 mt-6">
    <div class="container">
        <h1 class="title has-text-centered my-4">Bezigheden</h1>
    </div>
    <div class="columns is-centered">

        <div class="column">
            <div class="tile is-ancestor ">
                <div class="tile is-vertical is-parent">
                    <div class="tile is-child box">
                        <h1 class="title">Bij-eenkomsten</h1>
                        <p>Het regelmatig organiseren van bijeenkomsten met lezingen, films, diavertoningen, praatavonden, en van excursies.</p>
                    </div>
                    <div class="tile is-child box">
                        <h1 class="title">Imkersartikelen</h1>
                        <p>Imkers binnen en buiten de Leidse regio kunnen voor de meest voorkomende imkersartikelen terecht bij de winkel van de vereniging, gelegen op het terrein van de tuinvereniging ‘Cronesteyn’.</p>
                    </div>
                </div>
                <div class="tile is-vertical is-parent">
                    <div class="tile is-child box">
                        <h1 class="title">Beginnend imker begeleiding</h1>
                        <p>Beginnend imkers worden door ervaren leden met raad en daad terzijde gestaan bij het verzorgen van het eerste bijenvolk.</p>
                    </div>
                    <div class="tile is-child box">
                        <h1 class="title">Standplaats</h1>
                        <p>Aan leden wordt zoveel mogelijk hulp geboden bij het verkrijgen van een standplaats voor hun bijenvolk(en) en bij de aankoop van imkersartikelen.</p>
                    </div>
                </div>
                <div class="tile is-vertical is-parent">
                    <div class="tile is-child box">
                        <h1 class="title">Nieuwsbrief</h1>
                        <p>Periodiek verschijnt de nieuwsbrief ‘De Stertselaar’, samengesteld door leden en bestemd voor imkers in Leiden en omgeving.</p>
                    </div>
                    <div class="tile is-child box">
                        <h1 class="title">Bijen Bibliotheek</h1>
                        <p>Een eigen bibliotheek, waaruit leden boeken en tijdschriften uit binnen- en buitenland kunnen lenen. Regelmatig worden nieuwe titels aangeschaft.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-6">
    <div class="container mb-5">
        <h1 class="title has-text-centered">De Laatste Nieuwtjes!</h1>
        <h2 class="subtitle has-text-centered">Blijf op de hoogte</h2>
    </div>
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <img src="{{ url('./img/Polderpark-Cronesteyn.jpg') }}">
                    </figure>
                </div>
                <div class="card-content">
                    <h1 class="title">De nieuwe bijenstal</h1>
                    <h2 class="subtitle">feb 7, 2020</h2>
                    <p>De gemeente gaat Park Cronesteyn herinrichten en een uitgebreid beheerplan is door de gemeenteraad in april 2019 goedgekeurd.</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <img src="{{ url('./img/Polderpark-Cronesteyn.jpg') }}">
                    </figure>
                </div>
                <div class="card-content">
                    <h1 class="title">De nieuwe bijenstal</h1>
                    <h2 class="subtitle">feb 7, 2020</h2>
                    <p>De gemeente gaat Park Cronesteyn herinrichten en een uitgebreid beheerplan is door de gemeenteraad in april 2019 goedgekeurd.</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <img src="{{ url('./img/Polderpark-Cronesteyn.jpg') }}">
                    </figure>
                </div>
                <div class="card-content">
                    <h1 class="title">De nieuwe bijenstal</h1>
                    <h2 class="subtitle">feb 7, 2020</h2>
                    <p>De gemeente gaat Park Cronesteyn herinrichten en een uitgebreid beheerplan is door de gemeenteraad in april 2019 goedgekeurd.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

@endsection
