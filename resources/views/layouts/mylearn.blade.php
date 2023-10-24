
<div class="container-fluid p-5 text-center">
    <div class="row g-2 d-flex justify-content-center align-items-center h-50">

      <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 200px;" data-wow-delay="0.1s">
          <div class="text-center pt-2 " style="background-color: rgb(141, 109, 109);">
              <div class="p-2">
                  <a href="{{ route('desktop') }}">
                      <i class="fa fa-3x mb-1"><img src="assets/images/monitor.png" alt="" width="40px"></i>
                      <h3 class="mb-1" style="color: white;">My desktop</h3>
                  </a>
              </div>
          </div>
      </div>

      <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 200px;" data-wow-delay="0.5s">
          <div class="text-bg-success text-center pt-2">
              <div class="p-2">
                  <a href="{{ route('mybooks') }}">
                      <i class="fa fa-3x mb-1"><img src="assets/images/open-bookw.png" alt="" width="40px"></i>
                      <h3 class="mb-1">My books</h3>
                  </a>
              </div>
          </div>
      </div>

      <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 200px;" data-wow-delay="0.7s">
          <div class="text-bg-primary text-center pt-2">
              <div class="p-2">
                  <a href="{{ route('myexbooks') }}">
                      <i class="fa fa-3x mb-1"><img src="assets/images/pen.png" alt="" width="40px"></i>
                      <h3 class="mb-1">My exercise books</h3>
                  </a>
              </div>
          </div>
      </div>

      <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 200px;" data-wow-delay="0.7s">
          <div class="text-bg-danger text-center pt-2">
              <div class="p-2">
                  <a href="{{ route('homework') }}">
                      <i class="fa fa-3x mb-1"><img src="assets/images/homework.png" alt="" width="40px"></i>
                      <h3 class="mb-1">Homework</h3>
                  </a>
              </div>
          </div>
      </div>

      <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 200px;" data-wow-delay="0.7s">
          <div class="text-bg-secondary text-center pt-2 text-light">
              <div class="p-2">
                  <a href="{{ route('fav') }}">
                      <i class="fa fa-3x mb-1"><img src="assets/images/starw.png" alt="" width="40px"></i>
                      <h3 class="mb-1" style="color: white;">Favourites</h3>
                  </a>
              </div>
          </div>
      </div>

      <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 200px;" data-wow-delay="0.7s">
        <div class="text-bg-warning text-center pt-2 text-light">
            <div class="p-2">
                <a href="{{ route('uploads') }}">
                    <i class="fa fa-3x mb-1"><img src="assets/images/cloud-computing.png" alt="" width="40px"></i>
                    <h3 class="mb-1" style="color: white;">Uploads</h3>
                </a>
            </div>
        </div>
    </div>

  </div>
  </div>
  @yield('content')
