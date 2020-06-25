@extends('app')

@section('title', "Winkel")

@section('style')
    <style>
   .image{
    float: right;
    width:40%;
   }
   
    </style>
@endsection

@section('content')

<div class="columns box is-centered is-fullwidth ">
  <div class="column is-half">
    <p>De Imkersvereniging Leiden en omstreken heeft een winkel, voorheen een depot van het Bijenhuis (NBV). In deze winkel zijn de meest voorkomende imkersartikelen te koop, onder andere: imker gereedschappen, kasten (ceder en vuren) en kastonderdelen (Dadant en Spaarkast), Varoa bestrijding, kleding en handschoenen, koninginnenteelt benodigdheden. In de winkel kan alleen met PIN betaald worden, contant of per overschrijving worden niet geaccepteerd. De prijzen die de vereniging hanteert zijn inclusief een transport toeslag van 3%. In het geval dat u een grote bestelling wilt plaatsen, of in het geval dat u een specifiek product wilt aanschaffen, kunt u de depotbeheerder of de penningmeester van de vereniging contacten. In de inwinter periode (Augustus-Oktober) biedt onze winkel suikeroplossing aan. Omdat onze verenging begaan is met het wel en wee van de bijen is er (ook) biologisch geproduceerd suikeroplossing beschikbaar. Deze oplossing is duurder maar het gebruik ervan wordt door ons aangeraden. De aankoop van biologisch suikeroplossing gaat op bestelling dat wordt aangekondigd in de nieuwsbrief.</p>
    </br>
    <div class="image">
    <img   src="{{ url('/img/bijstuifmeel.jpg') }}"/>
    </div>
    <p>De Leidse Imkersvereniging faciliteert voor haar leden het recyclen van eigen was. Hiervoor zijn stoom was-smelters (2x) en wasplaat persen (2x) te leen. Deze apparatuur kan worden opgehaald tijdens openingstijden van de winkel. Registratie is verplicht. In sommige gevallen zal er moeten worden gereserveerd in overleg met de depotbeheerder. De siliconen matten van de pers zijn kwetsbaar (!) en worden bij uitgifte en bij inname gecontroleerd op beschadigingen.</p>
    </br>
    <p>Onze vereniging heeft honingslingers (3x) beschikbaar die aan leden worden uitgeleend. Ook hier geldt dat de apparatuur kan worden opgehaald tijdens openingstijden van de winkel. Registratie is verplicht. In sommige gevallen zal er moeten worden gereserveerd in overleg met de depotbeheerder.</p>
    </br>
    <p>De winkel is open op zaterdagen van 13:00 tot 15:00 in periode Maart tot en met September. De winkel is ook geopend op imkeravonden van 19:30 tot 20:00. Adres winkel: Verenigingsgebouw Imkersvereniging Leiden en omstreken, gelegen op het terrein van de tuinvereniging ‘Cronesteyn, Boerenpad 3, 2322 LA te Leiden</P>
  </div>
</div>


@endsection

@section('scripts')
    <script>

    </script>
@endsection


