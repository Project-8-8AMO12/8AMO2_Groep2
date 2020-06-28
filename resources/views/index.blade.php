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
            <div class="tile is-parent box">
                <div class="tile is-child box has-background-warning has-text-centered"><a class="is-centered">babies</a></div>
                <div class="tile is-child box has-background-warning has-text-centered"><a>babies</a></div>
                <div class="tile is-child box has-background-warning has-text-centered"><a>babies</a></div>
            </div>
        </div>
        <div class="tile is-parent">
            <div class="tile is-child box">
            <a class="twitter-timeline" data-height="500" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>           </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

@endsection
