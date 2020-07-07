<?php
use \App\Http\Controllers\ItemsController;
?>
@extends('app')

@section('title', "Bijenstal")

@section('style')
    <style>

    </style>
@endsection

@section('content')

<?php echo ItemsController::showItemById(8)->text; ?>
<!-- <div class="columns box is-centered is-fullwidth ">
  <div class="column is-half">
  <p class='has-background-grey-lighter px-4 py-2'>De bijenstal in polderpark Cronesteyn is geopend op de eerste zondag van de maand vanaf begin april tot eind september, van 14h00 tot 15h00. Voor iedereen die een kijkje in de kast wil nemen.
In de bijenstal worden ook de praktijk lessen van de basiscursus gegeven.</p>
</br>
<img src="{{ url('/img/bijenstal.png') }}"/>

  </div>
</div> -->


@endsection

@section('scripts')
    <script>

    </script>
@endsection


