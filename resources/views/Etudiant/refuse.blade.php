@extends('layout')
@section('content')
<p class="mt-5 pt-5"></p>
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenoms</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($etudiants as $etudiant)
            <tr>
                <th scope="row"> {{$etudiant->id}} </th>
                <td> {{$etudiant->nom}} </td>
                <td> {{$etudiant->prenoms}} </td>
        
            </tr> 
        @endforeach 


        </tbody>
    </table>
@endsection