

<div class="main-panel">
<div class="content-wrapper">

    <div class="row" style="align-items: center; color:aqua; font-size:40px">

            <h1>Welcome To Administrator Dashboard</h1>


    </div>
<br>

    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h2 class="mb-0">Total users</h2>
                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>

              <h6 class="text-muted font-weight-normal">{{$users}}</h6>

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color:darkcyan">
                <a class="small text-white stretched-link" href="{{url('showappointment')}}">View details</a>
    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">Total Doctors</h3>
                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">{{$doctors}}</h6>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color:darkcyan">
                <a class="small text-white stretched-link" href="{{url('showdoctor')}}">View details</a>
    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">Total Appointments</h3>
                    {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                    <div class="icon icon-box-success">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                </div>
              </div>

              <h6 class="text-muted font-weight-normal">{{$appointments}}</h6>

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color:darkcyan">
                <a class="small text-white stretched-link" href="{{url('showappointment')}}">View details</a>
    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">Total Admins</h3>
                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">{{$admins}}</h6>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color:darkcyan">
                <a class="small text-white stretched-link" href="{{url('showappointment')}}">View details</a>
    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
<div class="col-xl-3 col-md-6">
    {{-- <div class="card bg-info text-white mb-4"> --}}
        {{-- <div class="card-body">
            Total users
            <h2>
                5
            </h2>
        </div> --}}
        {{-- <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="#">View details</a>
<div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div> --}}

    {{-- </div> --}}

</div>
      </div>


</div>

<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
    </div>
  </footer>
</div>
