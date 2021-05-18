@extends('layouts.app')

@section('title','Inserisci nuovo prodotto')

@section('content')
    <form action="{{ route ('Store.store')}}" method='post'>
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name='name' id="name">
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" class="form-control" id="color" name="color">
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" class="form-control" id="size" name="size">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="season">Season:</label>
            <input type="text" class="form-control" id="season" name="season">
        </div>
            <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
            <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection