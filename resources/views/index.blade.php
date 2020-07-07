<?php
use \App\Http\Controllers\ItemsController;
?>
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

<?php echo ItemsController::showItemById(6)->text; ?>
<!-- <section id="text-header" class="container w-75">
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
                <a class="twitter-timeline" data-height="500" href="https://twitter.com/https://twitter.com/gemeenteleiden?lang=en">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h1 class="title has-text-centered my-6">Bezigheden</h1>
    </div>
    <div class="columns is-centered">

        <div class="column is-half ">
            <div class="tile is-ancestor ">
                <div class="tile is-vertical is-parent">
                    <div class="tile is-child box">
                        <p>test</p>
                    </div>
                    <div class="tile is-child box">
                        <p>test</p>
                    </div>
                </div>
                <div class="tile is-vertical is-parent">
                    <div class="tile is-child box">
                        <p>test</p>
                    </div>
                    <div class="tile is-child box">
                        <p>test</p>
                    </div>
                </div>
                <div class="tile is-vertical is-parent">
                    <div class="tile is-child box">
                        <p>test</p>
                    </div>
                    <div class="tile is-child box">
                        <p>test</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection

@section('scripts')

@endsection
