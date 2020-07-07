<?php
use \App\Http\Controllers\ItemsController;
?>
@extends('app')

@section('title', "Lid worden")

@section('style')
    <style>
    .background{
        background-color:#ffd73d;
    }
    </style>
@endsection

@section('content')

<?php echo ItemsController::showItemById(5)->text; ?>
<!-- <div class="columns box is-centered is-fullwidth ">
  <div class="column is-half">
  <b> <p class=' px-6 py-4'>Een lid van de Imkersvereniging Leiden en omstreken kan meedoen met de activiteiten van de vereniging (zoals imkersavonden), imkersbenodigdheden lenen (zoals slinger en waspers) en ontvangt de nieuwsbrieven. Ook heeft een lid inspraak d.m.v. stemrecht op de algemene leden vergadering. Lid worden van de Imkersvereniging Leiden en omstreken begint met lid worden van de Landelijke imkersvereniging NBV (Nederlandse Bijen Vereniging) met daarbij het lidmaatschap voor de afdeling Leiden. U kunt zich op de website van de NBV inschrijven: <a href = 'https://www.bijenhouders.nl/over-de-nbv/lidmaatschap#aanmeldformulier'>https://www.bijenhouders.nl/over-de-nbv/lidmaatschap#aanmeldformulier</a></p></b>
</br>
<b><p class='px-6 py-4 background'>Mocht u geen lid van de NBV en de afdeling Leiden willen worden, maar de vereniging en haar doelen wel een warm hart toedragen, dan kunt u vanaf 15,- euro per jaar ook donateur worden. U kunt dan meedoen met activiteiten, imkersbenodigdheden lenen en ontvangt nieuwsbrieven. U heeft geen inspraak als lid in de vereniging. Wilt u donateur worden, stuur dan een mail met uw naam, adres en telefoonnummer naar leidsebijen@live.nl en wij zorgen dat u donateur wordt.</p></b>

  </div>
</div> -->


@endsection

@section('scripts')
    <script>

    </script>
@endsection


