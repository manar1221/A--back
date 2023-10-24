@section('css')
<link rel="stylesheet" href="./assets/css/accountstyle.css">
@endsection

@extends('layouts.mylearn')

@section('content')

<!--
    - #content
  -->

  <div class="container mt-5 pb-5">
    <div class="row">
      <div class="col">
        <h1>Favourites / Previously opened</h1>
        <p>If you want to find the items useful for you easily, mark them as favourites so you will find them here, organised by topic. You will also find a list of the extras you opened in the past month.
        </p>
      </div>
    </div>

    <div class="row mt-5 mb-3">
      <div class="text-center mb-5">
        <h1 class="text-dark mb-2" style="font-size: 30px;">Favourites</h1>
        <p>Your favourites list is currently empty. Choose one from our Media Library.</p>
        <div class="mb-5">
          <a href="#" class="btn btn-info m-3 p-3 fw-bold text-light fs-4">Go to Media library</a>
        </div>
        <img src="assets/images/fav.png" alt="" class="m" style="margin-left: 350px;">
      </div>
    </div>
  </div>


@endsection
