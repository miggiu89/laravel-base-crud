@extends('layouts.app')

@section('title','Store')

@section('content')

    
    <h1>I nostri vestiti</h1>
    {{-- @foreach ($vestiti as $vestito)
    @dump($vestito) --}}
        
    {{-- @endforeach --}}
    <a href="{{route('Store.create')}}" class='btn btn-primary'>Inserisci Nuovo Prodotto</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">Size</th>
            <th scope="col">Description</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $vestito)

                <tr>
                    <th scope="row">{{$vestito['id']}}</th>
                    <td>{{$vestito['id']}}</td>
                    <td>{{$vestito['name']}}</td>
                    <td>{{$vestito['color']}}</td>
                    <td>{{$vestito -> size}}</td>
                    <td>{{$vestito['description']}}</td>
                    <td>
                        <a href="{{ route('Store.show',['Store' => $vestito -> id]) }}" class='btn btn-info'>Dettagli Prodotto</a>
                    </td>
                </tr>
                
            @endforeach  
        </tbody>
      </table>
      
@endsection