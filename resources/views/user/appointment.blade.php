<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">

        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="name" placeholder="Full name"  style="background-color:red">
          </div>


          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="email" placeholder="Email address.." style="background-color:red">
          </div>


          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input style="color:grey" type="date" name="date" class="form-control">
          </div>


          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select style="color:black" required name="doctor" id="departement" class="custom-select"  placeholder="---select a doctor---">

                <option  value="" disabled selected hidden style="color:black" placeholder="---select a doctor---">---select a doctor---</option>

@foreach($doctor as $doctors)



                <option style="color:black" value="{{$doctors->name}}">{{$doctors->name}}
                    ---department--- {{$doctors->speciality}}</option>

@endforeach
            </select>
          </div>


          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Phone Number.." style="background-color:darkgreen">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." style="background-color:darkgreen"></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->
