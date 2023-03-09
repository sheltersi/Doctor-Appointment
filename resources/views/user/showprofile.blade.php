
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            {{-- <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div> --}}
            {{-- <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div> --}}
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

@include('user.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->


@include('user.navbar')

<div class="container-fluid page-body-wrapper">
    <div align="center" style="padding-top:100px;">

        <table>

<!--
{{-- <tr  align="center" style="background-color:skyblue;" > --}}
    <tr  align="center" style="background-color:skyblue;" >
    {{-- <td><img height="100" width="100" src ="doctorimage/{{$data->photo}}"></td> --}}
    {{-- <td><img height="100" width="100">{{$data->photo}}</td> --}}
    </tr>
 -->
     <tr  align="center" style="background-color:skyblue;" >
    <td>{{$profile->name}}</td>
</tr>
<hr>
    <tr  align="center" style="background-color:skyblue;" >
                <td>{{$profile->phone}}</td>
            </tr>
<hr>
            <tr  align="center" style="background-color:skyblue;" >
                <td>{{$profile->email}}</td>
                </tr>
<hr>
                <tr  align="center" style="background-color:skyblue;" >
                <td>{{$profile->address}}</td>
            </tr>

               

            {{-- <td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>

            <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
            </tr> --}}


        </div>
       </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.js')

  </body>
</html>

