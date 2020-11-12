@extends('layouts.app')

@section('title','apdate')
@section('content')


    <form action="{{url('getID')}}" method="post">
        @csrf
        national_id   <input type="text"  name="national_id" />
        <hr>
        <div data-role="main" class="ui-content">
                <fieldset data-role="controlgroup">
                    <legend>Choose your gender:</legend>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="male" value="male" checked>
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="female" value="female">
                </fieldset>
        <hr>
        <input type="submit">
        <hr>



@endsection
