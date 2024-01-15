
@extends('layout')
@section('content')

<div class="container pt -5 m-5">

<!-- Outer Row -->
<div class="row justify-content-center mt-5">

    <div class="col-xl-10 col-lg-12 col-md-9 mt-5 pt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Formulaire d'enregistrement d'enseignant</h1>
                            </div>
                                        <form method ="POST" action="  {{route('Professeur.store')}} " class="p-5 m-5" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                              <div class="mb-3 col-6">
                                                  <label for="exampleFormControlInput1" class="form-label">Nom </label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" >
                                              </div>
                                              <div class="mb-3 col-6">
                                                  <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="prenoms" >
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-6">
                                                  <label for="exampleFormControlInput1" class="form-label">Age </label>
                                                  <input type="number" class="form-control" id="exampleFormControlInput1" name="age" >
                                              </div>
                                              <div class="mb-3 col-6">
                                              <label for="exampleFormControlInput1" class="form-label">Sélectionner le sexe </label>
                                                <select class="form-select" aria-label="Default select example" name="sexe">
                                                  <option value="1">Homme</option>
                                                  <option value="2">Femme</option>
                                                </select>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="mb-3 col-6">
                                                  <label for="exampleFormControlInput1" class="form-label">Email </label>
                                                  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" >
                                              </div>
                                              <div class="mb-3 col-6">
                                                  <label for="exampleFormControlInput1" class="form-label">Numéro de téléphone</label>
                                                  <input type="number" class="form-control" id="exampleFormControlInput1" name="telephone" >
                                              </div>
                                          </div>
                                          <div class="mb-3 col-6">
                                                <label for="exampleFormControlInput1" class="form-label">Entrer votre CV</label>
                                                <div class="input-group mb-3">
                                                  <input type="file" class="form-control" id="inputGroupFile02" name="cv">
                                                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                          </div>
                                          <div class="mb-3 col-6">
                                                <label for="exampleFormControlInput1" class="form-label">Entrer une photo de vous</label>
                                                <div class="input-group mb-3">
                                                  <input type="file" class="form-control" id="inputGroupFile02" name="photo">
                                                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                          </div>
                                          <br>
                                            <div class="mb-3 row">
                                              <div class="row-3 col-auto">
                                                <button type="submit" class="btn btn-primary mb-3">Soumettre</button>
                                              </div>

                                              <div class="row-3 col-auto">
                                                <button type="reset" class="btn btn-primary mb-3">Effacer</button>
                                            </div>
                                            </div>
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

@endsection