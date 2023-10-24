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
        <h1>Homework assignments</h1>
        <p>Here you will find your homework assignments and the previously solved and evaluated worksheets. Teachers can find the homework assignments they set for their students and the solutions received from them.
        </p>
      </div>
    </div>

    <div class="row mt-5 mb-3">
      <div class="col">
        <h1>Incomplete homework</h1>
        <hr>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr class="table-primary">
            <th scope="col"></th>
            <th scope="col">Title</th>
            <th scope="col">Worksheets</th>
            <th scope="col">Start date	</th>
            <th scope="col">Progress</th>
            <th scope="col">Sent by</th>
            <th scope="col">Due date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>



@endsection
