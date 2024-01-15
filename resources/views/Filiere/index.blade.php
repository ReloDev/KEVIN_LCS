@extends('dashyout')
@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($filieres as $filiere)
            <tr>
                <th scope="row"> {{$filiere->id}} </th>
                <td> {{$filiere->nomFIliere}} </td>
                <td>
                    <a href="#" class="btn btn-success btn-circle btn-sm">
                        <i class="fas fa-check">Voir</i>
                    </a>&nbsp;&nbsp;
                    <a href=" {{route('Filiere.destroy',['id'=>$filiere->id])}} " class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash">Supp</i>
                    </a>&nbsp;&nbsp;
                     <a href="#" class="btn btn-info btn-circle btn-sm">
                        <i class="fas fa-info-circle">Mod</i>
                     </a>
                </td>
            </tr> 
        @endforeach 


        </tbody>
    </table>

@endsection

