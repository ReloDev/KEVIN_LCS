@extends('layout')
@section('content')



  <section class="contact_section layout_padding mt-5 pt-5">
  <p class="fs-1">CV</p>
      <img src=" {{asset('storage/'.$professeur->cv) }} " class="img-fluid" alt="...">
  </section>

  <section class="contact_section layout_padding mt-5 pt-5">
  <p class="fs-1">Photo du professeur</p>
      <img src=" {{asset('storage/'.$professeur->photo) }} " class="img-fluid" alt="...">
  </section>

  <!-- end contact section -->


  <!-- info section -->
  

@endsection