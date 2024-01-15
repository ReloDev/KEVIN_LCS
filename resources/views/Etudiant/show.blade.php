@extends('layout')
@section('content')



  <section class="contact_section layout_padding mt-5 pt-5">
  <p class="fs-1">Diplôme</p>
      <img src=" {{asset('storage/'.$etudiant->diplome) }} " class="img-fluid" alt="...">
  </section>

  <section class="contact_section layout_padding mt-5 pt-5">
  <p class="fs-1">Photo de l'étudiant</p>
      <img src=" {{asset('storage/'.$etudiant->toph) }} " class="img-fluid" alt="...">
  </section>

  <!-- end contact section -->


  <!-- info section -->
  

@endsection