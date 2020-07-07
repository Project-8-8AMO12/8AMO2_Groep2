<?php
use \App\Http\Controllers\ItemsController;
?>
@extends('app')

@section('title', "Zwerm gezien")

@section('style')
    <style>
   
    </style>
@endsection

@section('content')

<?php echo ItemsController::showItemById(4)->text; ?>

<!-- <div class="columns box is-centered is-fullwidth ">
  <div class="column is-half">
    <h1 class='title'>Bijenzwerm opruimen</h1>
    <p>Heeft u een bijenzwerm? Geen paniek. Een zwerm is niet gevaarlijk. Blijf rustig en houd afstand. Neem contact met ons op. Een imker komt graag langs om de zwerm op te halen. Om onnodige meldingen te voorkomen, lees s.v.p. onderstaande informatie door voor u de melding doet. Mocht u zeker weten dat u een bijenzwerm hebt, onderaan staan de contactgegevens voor het melden van een zwerm.</p>
    </br>
    <h1>Kenmerken voor een bijenzwerm;</h1>
    <p>Een bijenzwerm is een grote “bal of tros” met duizenden (tot wel 20.000) honingbijen die aan een voorwerp, bijvoorbeeld een tak, dakgoot of fiets, hangt. Imkers kunnen een bijenzwerm “scheppen” met behulp van een korf of bak. Het is belangrijk dat wij er bij kunnen, eventueel met een ladder (graag zelf voor zorgen, kunnen wij niet meenemen). Als een zwerm onbereikbaar is, dan kunnen we niet “scheppen”. Soms kruipt een zwerm in spouwmuren, schoorstenen en tussen de muren of aftimmering. Dan kunnen we niet bij de zwerm en kunnen we helaas niets doen.</p>
    <br>
    <h1 class='title'>Hommels</h1>
    <p>Hommels zijn wilde bijen en vaak wat “dikker” en “hariger” dan honingbijen. Hommels nestelen onder andere in vogelhuisjes, voegen en onder de grond. Hommelnesten kunnen niet verplaatst of geschept worden zoals bij zwermen honingbijen. Als imkers kunnen we u daar niet bij helpen. Handig om te weten:
<br>
– Hommels steken zelden mits ze met rust worden gelaten. Loop niet vlak voor de vliegopening langs – bij botsing kunnen hommels ook wel eens steken.
<br>
– Hommelnesten sterven vanzelf uit in de herfst, vroege winter, ze verdwijnen vanzelf – u hoeft niets te doen.
<br>
– Hommels nestelen graag in “niet schoongemaakte” nestkastjes – maak in de winter nestkastjes schoon als je geen hommels wilt
<br>
– Om te voorkomen dat hommels het volgend jaar op een plek terugkomen om een nest te bouwen, kunt u in de winter voegen of andere gaten dichtstoppen – bijvoorbeeld met een bijenbekje (houdt bijen, wespen en muizen tegen met behoud van ventilatie).
Zoek op het internet eventueel een plaatje van een honingbij en hommels (er zijn veel verschillende soorten hommels).</p>
<br>
<h1 class='title'>Wespen</h1>
<p> Wespen hebben gele streepjes en zijn meestal dunner dan honingbijen. Wespen zwermen niet. Wespen hangen niet in een tros (zonder nest) in bijvoorbeeld een boom zoals een zwerm bijen. Wespen worden meestal in juli/ augustus waargenomen. Ze nestelen graag in hoekjes, lege ruimtes en holtes. Als imkers kunnen wij niets aan wespen doen. Handig om te weten:
<br>
– Wespen zijn zeer nuttige beesten en eten insecten zoals muggen – als je er geen of weinig last van hebt, laat wespen dan zitten;
<br>
– Wespennesten sterven vanzelf uit in de herfst, vroege winter, ze verdwijnen vanzelf – u hoeft niets te doen.
<br>
– Om te voorkomen dat wespen het volgend jaar op een plek terugkomen om een nest te bouwen, kunt u in de winter voegen of andere gaten dichtstoppen – bijvoorbeeld met een bijenbekje (houdt bijen, wespen en muizen tegen met behoud van ventilatie).
<br>
Zoek op het internet eventueel een plaatje van een honingbij en wespen.
</p>
  </div>
</div> -->


@endsection

@section('scripts')
    <script>

    </script>
@endsection
