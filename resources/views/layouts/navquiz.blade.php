 <!--
    - #items
  -->

  <div class="container-fluid p-5 text-center">
      <div class="row g-2 d-flex justify-content-center align-items-center h-50">
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.1s">
            <div class="service-item text-center pt-2  bg-info">
                <div class="p-2">
                    <a href="{{ route('allquiz') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/grid.png" alt="" width="40px"></i>
                        <h3 class="mb-1">All</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.3s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('kinderquiz') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/tulip.png" alt="" width="40px"></i>
                        <h3 class="mb-1 fs-5">Kindergarten workbooks</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.5s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('lowerquiz') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/ladder.png" alt="" width="40px"></i>
                        <h3 class="mb-1 fs-5">Lower Grades Mathematics</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
          <div class="service-item text-center pt-2">
              <div class="p-2">
                  <a href="{{ route('mathquiz') }}">
                      <i class="fa fa-3x text-primary mb-1"><img src="assets/images/mathematics.png" alt="" width="40px"></i>
                      <h3 class="mb-1">Mathematics</h3>
                  </a>
              </div>
          </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('logicquiz') }}" >
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/logical-thinking.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Logic</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('langquiz') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/arabic.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Languages</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('readquiz') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/open-book.png" alt="" width="40px"></i>
                        <h3 class="mb-1 fs-5">Reading & Writing</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('visualquiz') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/design.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Visual Arts</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
          <div class="service-item text-center pt-2">
              <div class="p-2">
                  <a href="{{ route('generalquiz') }}">
                      <i class="fa fa-3x text-primary mb-1"><img src="assets/images/star.png" alt="" width="40px"></i>
                      <h3 class="mb-1">General</h3>
                  </a>
              </div>
          </div>
      </div>
    </div>
    </div>
    @yield('content')
