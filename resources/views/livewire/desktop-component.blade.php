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
        <div class="container light-style flex-grow-1 container-p-y">
          <h4 class="font-weight-bold py-3 mb-4 text-black fs-1">
              Account settings
          </h4>
          <div class="card overflow-hidden">
              <div class="row no-gutters row-bordered row-border-light fs-2">
                  <div class="col-md-3 pt-0">
                      <div class="list-group list-group-flush account-settings-links">
                          <a class="list-group-item list-group-item-action active" data-toggle="list"
                              href="#account-general">General</a>
                          <a class="list-group-item list-group-item-action" data-toggle="list"
                              href="#account-change-password">Change password</a>
                          <a class="list-group-item list-group-item-action" data-toggle="list"
                              href="#account-info">Info</a>

                      </div>
                  </div>
                  <div class="col-md-9">
                      <div class="tab-content">
                          <div class="tab-pane fade active show" id="account-general">
                              <div class="card-body media align-items-center">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                      class="d-block ui-w-80">
                                  <div class="media-body ml-4">
                                      <label class="btn btn-outline-primary">
                                          Upload new photo
                                          <input type="file" class="account-settings-fileinput">
                                      </label> &nbsp;
                                      <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                      <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                  </div>
                              </div>
                              <hr class="border-light m-0">
                              <div class="card-body">
                                  <div class="form-group">
                                      <label class="form-label">Username</label>
                                      <input type="text" class="form-control mb-1 fs-5" value="Manar Ashraf">
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label">E-mail</label>
                                      <input type="text" class="form-control fs-5 mb-1" value="tasmimmanar@gmail.com">

                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control fs-5" value="01234567895">
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label">Grade</label>
                                      <select class="custom-select">
                                        <option>1</option>
                                        <option selected>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>Nursery School</option>
                                    </select>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="account-change-password">
                              <div class="card-body pb-2">
                                  <div class="form-group">
                                      <label class="form-label">Current password</label>
                                      <input type="password" class="form-control fs-5">
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label">New password</label>
                                      <input type="password" class="form-control fs-5">
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label">Repeat new password</label>
                                      <input type="password" class="form-control fs-5">
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="account-info">
                                <div class="card-body pb-2">
                                  <div class="form-group">
                                    <label class="form-label">Manar Ashraf</label>
                                </div>
                                  <div class="form-group">
                                      <label class="form-label">tasmimmanar@gmail.com </label>
                                  </div>
                                  <div class="form-group">
                                      <label class="form-label">Grade: 2</label>
                                  </div>
                              </div>

                              <div class="card-body pb-2">
                                   <div class="form-group">
                                      <label class="form-label">Phone: 01234567895</label>

                                  </div>

                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
          <div class="text-right mt-3">
              <button type="button" class="btn btn-primary fs-5 fw-medium" style="width: 120px; height: 40px;">Save changes</button>&nbsp;
              <button type="button" class="btn btn-default fs-5 fw-medium" style="width: 80px; height: 40px;">Cancel</button>
          </div>
      </div>
      </div>
    </div>


@endsection

@section('js')

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>

@endsection
