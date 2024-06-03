@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome Progetto</th>
        <th scope="col">Descrizione Progetto</th>
        <th scope="col">Link GitHub</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <th scope="row">{{$project -> id}}</th>
            <td>{{$project -> nome_progetto}}</td>
            <td>{{$project -> descrizione_progetto}}</td>
            <td><a href="">{{$project -> link_github_progetto}}</a></td>
            <td><a href="">Modifica</a></td>
            <td><a href="">Cancella</a></td>
          </tr>
        @endforeach
      
      
    </tbody>
  </table>

@endsection