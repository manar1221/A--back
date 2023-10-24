
    <!--
    - #items
  -->

  <div class="container-fluid p-5 text-center">
      <div class="row g-2 d-flex justify-content-center align-items-center h-50">
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.1s">
            <div class="service-item text-center pt-2  bg-info">
                <div class="p-2">
                    <a href="{{ route('allimages') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/grid.png" alt="" width="40px"></i>
                        <h3 class="mb-1">All</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.5s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('bioimages') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/butterfly.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Biology</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('geoimages') }}" >
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/worldwide.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Geography</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('phyimages') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/physics.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Physics</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('cheimages') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/test.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Chemistry</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('mathimages') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/mathematics.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Maths</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('techimages') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/project-management.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Technology</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('hisimages') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/feather.png" alt="" width="40px"></i>
                        <h3 class="mb-1">History</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 wow fadeInUp" style="width: 114px;" data-wow-delay="0.7s">
            <div class="service-item text-center pt-2">
                <div class="p-2">
                    <a href="{{ route('visualimages') }}">
                        <i class="fa fa-3x text-primary mb-1"><img src="assets/images/design.png" alt="" width="40px"></i>
                        <h3 class="mb-1">Visual Arts</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    @yield('content')
