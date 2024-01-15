@extends('dashyout')
@section('content')

<table class="table">
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
                <!-- <th scope="col">diplome</th>
                <th scope="col">photo</th> -->
                <th scope="col">est_encours</th>
                <th scope="col">est_accepte</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($etudiants as $etudiant)
            <tr>
                <th scope="row"> {{$etudiant->id}} </th>
                <td> {{$etudiant->nom}} </td>
                <td> {{$etudiant->prenoms}} </td>
                <td> {{$etudiant->age}} </td>
                <td> {{$etudiant->sexe}} </td>
                <td> {{$etudiant->email}} </td>
                <td> {{$etudiant->telephone}} </td>
                <td> {{$etudiant->id_filiere}} </td>
                <!-- <td> {{$etudiant->diplome}} </td>
                <td> {{$etudiant->toph}} </td> -->
                <td> 
                {{$etudiant->encours}}
                  <form action=" {{ route('Etudiant.oec',['id'=>$etudiant->id]) }} " method="post">
                      @csrf
                      <button type="submit" class="btn btn-success">V</button>
                    </form>

                    <form action=" {{ route('Etudiant.nec',['id'=>$etudiant->id]) }}  " method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
                <td> 
                {{$etudiant->accepte}}
                <form action=" {{ route('Etudiant.oac',['id'=>$etudiant->id]) }}  " method="post">
                      @csrf
                      <button type="submit" class="btn btn-success">V</button>
                    </form>

                    <form action="{{ route('Etudiant.nac',['id'=>$etudiant->id]) }}   " method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('Etudiant.show',['id'=>$etudiant->id])}}" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check">fichier</i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Etudiant.destroy',['id'=>$etudiant->id])}} " class="btn btn-danger btn-circle btn-sm">
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