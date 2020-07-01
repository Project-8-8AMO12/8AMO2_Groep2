@extends('app')

@section('title', "login")

@section('style')
    <style>

    </style>
@endsection

@section('content')

<div class="columns box is-centered is-fullwidth ">
  <div class="column is-half">
@if(isset(Auth::user()->email))
    <strong>logged in</strong>
    <a href="{{ url('/login/logout')}}">log out</a>
    @else
    <script>window.location="/login"</script>
@endif
  </div>
</div>


@endsection

@section('scripts')
    <script>

    </script>
@endsection


