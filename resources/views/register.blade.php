@extends('app')

@section('title', "register")

@section('style')
    <style>
    .form{
        margin-right:9rem;
        margin-left:9rem;
    }
    </style>
@endsection

@section('content')

<div class="columns box is-centered is-fullwidth">
  <div class="column is-half">
<form class="form" action="{{ url('/register/store')}}" method="post">
{{ csrf_field() }}

<div class="field">
    <label class="label">gebruikersnaam</label>
        <div class="control">
    <input type="text" name="username"></br>
    </div>


    <div class="field">
    <label class="label">wachtwoord</label>
        <div class="control">
    <input type="password" name="password"></br>
    </div>

    <div class="field">
    <label class="label">voornaam</label>
        <div class="control">
    <input type="text" name="firstname"></br>
    </div>

    <div class="field">
    <label class="label">achternaam</label>
        <div class="control">
    <input type="text" name="lastname"></br>
    </div>

        <div class="field">
        <label class="label">email</label> 
             <div class="control">
        <input type = "email" name="email"></br>
        </div>
    </div>
</div>
    <input type="submit" name="register" value="register">
    </form>
</form>
</div>
</div>

@endsection

@section('scripts')
    <script>

    </script>
@endsection


