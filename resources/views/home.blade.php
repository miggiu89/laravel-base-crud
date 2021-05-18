@extends('layouts.app')

@section('title','Homepage')

@section('content')
    <h1>Homepage</h1>
    <a href="{{ route('Store.index')}}"> Link allo Store</a>
@endsection