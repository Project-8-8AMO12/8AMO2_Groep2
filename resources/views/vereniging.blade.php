@extends('app')

@section('title', "Vereniging")

@section('style')
    <style>
    .imgAc {
            float:right;
            width:50%;  
            margin-top:2vw;
        }
        .h1text{
            font-size: 2rem;
        }
        .imgAc1 {
            float:left;
            width:50%;
            margin-top:5vw;
        }
        
    </style>
@endsection

@section('content')

<div class="columns box is-centered is-fullwidth ">
  <div class="column is-half">
  <p class='px-4 py-'>De contributie voor leden bedraagt voor 2020 € 77,50 per jaar.
Leden van de imkersvereniging Leiden en omstreken zijn tevens lid van de NBV. De bijenvolken van de leden zijn verzekerd. Leden ontvangen het maandblad ‘Bijen’ en ‘De Stertselaar’.
De donatie voor belangstellenden bedraagt ten minste € 15,- per jaar.
Donateurs ontvangen ‘De Stertselaar’.</p>
</br>
<div class = "container has-background-grey-lighter">
<img class='imgAc' src="{{ url('/img/bijenkasten.jpg') }}"/>
<h1 class = 'h1text px-6    '>Vinden en delen</h1>
    <p class = 'px-6 py-4'>De vereniging heeft vier officiele bijenstallen, in het Heempark, Noordwijkerhout, Merenwijk en Polderpark Cronesteijn.
Zoekt u een plaats voor uw bijenvolken of weet u een plek voor een ander? Neem dan contact met ons op</p>
</div>
</br>
<div class='container'>
<h1 class = 'h1text'>Bijenhouden als hobby</h1>
<p>De tijd van de romantische bijenteelt in strokorven is voorbij. Tegenwoordig worden bijen hoofdzakelijk gehouden in meerdelige houten of kunstof kasten. Het voordeel van kasten is dat de imker zijn volken gemakkelijker kan controleren. De raampjes kunnen er worden uitgehaald om de honing te oogsten, en om ziekten en plagen van de bijen te bestrijden. Het is in Nederland niet mogelijk van de bijenteelt te leven, maar als de imker het goed doet, kan het imkeren een aardige hoeveelheid honing opleveren, en hoeft de hobby weinig geld te kosten.</p>
</div>
</br>
<div class = "container has-background-grey-lighter">
<img class='imgAc1' src="{{ url('/img/de-imker-uit-leiden.jpg') }}"/>
<h1 class = 'h1text'>Natuur en milieu</h1>
    <p class = 'px-6 py-4'>Bijenhouden is een echte natuurhobby: voor het imkeren bent u afhankelijk van het weer voor een goede honingoogst. Door het gebruik van chemische gewasbeschermingsmiddelen en het voorkomen van monocultures in de landbouw, zijn veel andere bestuivende insekten uit ons milieu verdwenen. Hun taak wordt nu overgenomen door de honingbij, zodat bijvoorbeeld heesters in plantsoenen dankzij de bijen ‘s winters bessen dragen, en er op die manier voor zorgen dat veel vogelsoorten in onze steden en dorpen kunnen overwinteren. Op hun manier dragen honingbijen dus bij aan de instandhouding van de flora en fauna.

</p>
</div>
</br>
<div class='container'>
<h1 class = 'h1text'>Tips voor toekomstige bijenhouders</h1>
<p>Heeft u het plan opgevat om bijen te gaan houden? Dan is het van belang dat u zich aanmeldt bij een plaatselijke imkersvereniging: deze staat u bij met raad en daad, en helpt u vaak aan uw eerste volkje. Als lid van een plaatselijke afdeling bent u tevens lid van de NVB, en ontvangt u een maandblad. Bovendien is het goed een cursus te volgen voor beginnend of gevorderd imker. Wie een cursus voor beginners heeft gevolgd is in staat zelfstandig en met succes bijen te houden.</p>
</div>
  </div>
</div>


@endsection

@section('scripts')
    <script>

    </script>
@endsection
