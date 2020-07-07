<?php
use \App\Http\Controllers\ItemsController;
?>
@extends('app')

@section('title', "Cursussen")

@section('style')
    <style>
    .title1 {
        font-size: 2.3rem;
        margin-left: 13%;
        margin-bottom: 2%;
    }
    .title2 {
        font-size: 1.5rem;
        margin-left: 13%;
        margin-top: 4%;
        margin-bottom: 2%;
    }
    .image{
    float: right;
    width:40%;
    margin-top: 75px;
   }
   .list2 {
    float: right;
   }
  .tftable {
    font-size:12px;
    color:#333333;
    width:100%;
    border: none;
  }
  .tftable th {
    font-size:12px;
    text-align:left;
  }
  .tftable td {font-size:12px;border-width: 1px;padding: 8px;}
  .bold {
    font-weight: bold;
  }
    </style>
@endsection

@section('content')

<?php echo ItemsController::showItemById(7)->text; ?>
<!-- <div class="columns box is-centered is-fullwidth ">
  <div class="column is-half">
  <h1 class="title1">Basiscursus bijenteelt 2020</h1>
  <img class="image px-3" src="{{ url('/img/cursussen.jpg') }}"/> 
  <p class='has-background-grey-lighter px-6 py-5'>
Begin maart 2020 zal in Leiden opnieuw een cursus bijenteelt voor beginners van start gaan.

De cursus zal bestaan uit 6 theorielessen en 16 praktijklessen. De praktijk van het imkeren wordt beoefend in de bijenstal in het polderpark Cronesteyn te Leiden.

Cursisten ontvangen cursusmateriaal over de grondbeginselen van de bijenteelt. Tegelijk met het volgen van de cursus kunnen ze profiteren van de faciliteiten van de Imkersvereniging, zoals het bijwonen van bijeenkomsten met interessante lezingen.

Verder ontvangen cursisten tijdens de cursus het tijdschrift ‘Bijen houden’ van de Nederlandse Bijenhouders Vereniging.</p>
<h1 class="title2">Rooster Basiscursus Bijenteelt – Leiden</h1>

<table class="tftable has-background-grey-lighter px-6 py-5">
<tr><td class="bold">Cursus:</td><td>Lorem ipsum</td></tr>
<tr><td class="bold">Beschrijving:</td><td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laboriosam error consequatur at! Non odio, natus id architecto delectus ipsa quis eum deleniti in adipisci sit dolorem minima libero voluptas.</td></tr>
<tr><td class="bold">Lengte (in uren):</td><td>5</td></tr>
<tr><td class="bold">Datum:</td><td>30/2/2021</td></tr>
<tr><td class="bold">Prijs:</td><td>€581,59</td></tr>
</table>



<h1 class="title2">Cursisten moeten om deze cursus te kunnen volgen in het bezit zijn van:<h1>
<p class='has-background-grey-lighter px-6 py-5'>
beschermende kleding</br>
beitel</br>
veger</br>
beroker (optioneel, voor degene die daadwerkelijk gaan imkeren)</br>
Theorie en Praktijk Lesboeken “Basis Cursus Compleet” van de NBV</br>
het Handboek Praktijk “Bijenhouden Zo doe je dat” van de NBV</br>
De daaraan verbonden, additionele kosten bedragen circa € 120. Deze zaken zullen worden besproken op de eerste bijeenkomst en kunnen via de vereniging gekocht worden.</p>
  </div>
</div> -->


@endsection

@section('scripts')
    <script>

    </script>
@endsection


