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
        @foreach ($professeurs as $professeur)
            <tr>
                <th scope="row"> {{$professeur->id}} </th>
                <td> {{$professeur->nom}} </td>
                <td> {{$professeur->prenoms}} </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>
@endsection
