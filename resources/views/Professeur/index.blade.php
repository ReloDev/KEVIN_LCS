@extends('dashyout')
@section('content')
<p class="mt-5 pt-5"></p>
<table class="table mt-5 pt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenoms</th>
                <th scope="col">age</th>
                <th scope="col">sexe</th>
                <th scope="col">email</th>
                <th scope="col">telephone</th>
                <th scope="col">IdFiliere</th>
                <!-- <th scope="col">CV</th>
                <th scope="col">photo</th> -->
                <th scope="col">est_encours</th>
                <th scope="col">est_accepte</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($professeurs as $professeur)
            <tr>
                <th scope="row"> {{$professeur->id}} </th>
                <td> {{$professeur->nom}} </td>
                <td> {{$professeur->prenoms}} </td>
                <td> {{$professeur->age}} </td>
                <td> {{$professeur->sexe}} </td>
                <td> {{$professeur->email}} </td>
                <td> {{$professeur->telephone}} </td>
                <td> {{$professeur->id_filiere}} </td>
                <!-- <td> {{$professeur->cv}} </td>
                <td> {{$professeur->photo}} </td> -->
                <td> 
                {{$professeur->encours}}
                  <form action=" {{route('Professeur.oec',['id'=>$professeur->id])}} " method="post">
                      @csrf
                      <button type="submit" class="btn btn-success">V</button>
                    </form>

                    <form action="  {{route('Professeur.nec',['id'=>$professeur->id])}} " method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
                <td> 
                {{$professeur->accepte}}
                <form action=" {{route('Professeur.oac',['id'=>$professeur->id])}}  " method="post">
                      @csrf
                      <button type="submit" class="btn btn-success">V</button>
                    </form>

                    <form action=" {{route('Professeur.nac',['id'=>$professeur->id])}}  " method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('Professeur.show',['id'=>$professeur->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check">fichiers</i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Professeur.destroy',['id'=>$professeur->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash">Supp</i>
                    </a>&nbsp;&nbsp;
                     <!-- <a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle">Mod</i>
                     </a> -->
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>
@endsection