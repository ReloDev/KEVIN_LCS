@extends('dashyout')
@section('content')

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulaire d'ajout de Filière</h1>
                            </div>
                            <form class="user" method="POST" action=" {{route('Filiere.store')}} ">
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">nom de la filiere</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nomFiliere" >
                                </div>
                                    <div class="mb-3 row">
                                        <div class="row-3 col-auto">
                                            <button type="submit" class="btn btn-primary mb-3">Soumettre</button>
                                        </div>
                                        <div class="row-3 col-auto">
                                            <button type="reset" class="btn btn-primary mb-3">Effacer</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

@endsection