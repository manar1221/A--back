@extends('layouts.mylearn')

@section('content')

<!--
    - #content
  -->

  <div class="container mt-5 pb-5">
    <div class="text-center">
      <h1 class="text-dark">Uploads, sharings</h1>
      <p>Here you will find the exercise books, images, worksheets and other shareable content that you have shared with others or that others have shared with you. You can set each of your shared items to be seen only by you, by other members of your school, or by everyone. If you also use A+ Book, here you can also view the items you uploaded from the software.</p>
    </div>
    <div class="mb-5 mt-5 d-inline-flex fw-light text-primary" style="margin-left: 380px;">
      <a href="#" class="pe-5"><b>  My uploads  </b></a>
      <a href="#"><b>  Shared with me  </b></a>
      <a href="#" class="ps-5"><b> Upload new item </b></a>
    </div>
    <img src="assets/images/uploads.png" alt="" class="m" style="margin-left: 350px;">
  </div>


@endsection
