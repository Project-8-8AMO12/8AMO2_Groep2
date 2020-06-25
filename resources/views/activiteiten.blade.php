@extends('app')

@section('title', "Activiteiten")

@section('style')
    <style>
        .imgAc {
            width: 100%; 
            margin-bottom: 20px; 
            margin-top: 40px;
        }
        .koninginneteelt {
            margin-left: 25%;
            margin-bottom: 20px;
            font-size: 2.3rem;
        }
    </style>
@endsection

@section('content')

<div class="columns box is-centered is-fullwidth ">
  <div class="column is-half">
  <img class='has-background-grey-lighter imgAc'src="{{ url('/img/activiteiten.jpg') }}"/>
  <h1 class="koninginneteelt">Koninginneteelt</h1>
  <p class='has-background-grey-lighter px-6 py-4'> 
Het imkeren in Nederland en meer specifiek in de stad vraagt om een type bij dat zachtaardig is: je wilt geen ruzie met de buren omdat ze last hebben van je bijen. We hebben een werkgroep die aan koninginnenteelt doet en ieder jaar naar Ameland gaat. We komen bij elkaar voor de start van de teelt en bespreken de aanpak van het teeltseizoen. We helpen elkaar met kennis, en als er iets fout gaat helpen we om toch moeren te kunnen zenden naar het bevruchtingsstation. Wij gebruiken Buckfast-moeren als startpunt, waar we larven en eitjes van verzamelen om verder te telen. De moeren zijn allen P-moeren, dus bevrucht door zuivere Buckfast darren.
 
Ieder jaar is het weer een uitdaging om mooie moeren te kweken, het enthousiasme is groot en we leren er iedere keer veel van.
 
De kosten die hiermee gemoeid zijn worden omgeslagen over het aantal moeren waarmee men wil deelnemen en bedragen rond de 25 euro per moer. Je zorgt wel voor eigen kastjes om naar Ameland te gaan.</p>
</br>


  </div>
</div>


@endsection

@section('scripts')
    <script>

    </script>
@endsection


