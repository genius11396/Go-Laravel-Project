@extends('frontend.driver.master')

@section('content')
<div id="grad">
  
<div class="container-fluid">
        <div class="text-center" >
          <img src="{{asset('frontendtemplate/images/icon3.svg')}}" class="img-fluid card-img" style="width: 60px;">
          <h2 style="color:#fff;">Driver Register Form</h2>
        </div>
  <div class= "d-flex justify-content-center" >
    <div class="shadow-lg p-3 mb-5 bg-white rounded col-lg-6 col-md-10 col-sm-10 " >
      <div class="card-block " >
        
        <form action="{{route('driverregister.store')}}" method="POST" enctype="multipart/form-data">
          @csrf 
          <div class="row">
      	    <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="exampleFormControlSelect1">Name </label>
                <input type="text" class="form-control" name="name">
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
               <div class="p-3">
                  <label for="driverphoto">Driver Photo</label>
                  <input type="file" class="" id="driverphoto" name="driverphoto">
               </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="exampleFormControlSelect1">Phone no:</label>
                <input type="number" class="form-control" placeholder='09xxxxxxx' name="phone">
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
               <div class="p-3">
                  <label for="licencephoto">Licence Photo</label>
                  <input type="file" class="" id="licencephoto" name="licencephoto">
               </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
                <label for="type">Car type</label>
                <select class="form-control" id="type" name="type">
                  <option>Mini Truck</option>
                  <option>Van </option>
                  <option>Bus</option>
                  <option>Mini Bus</option>
                  <option>CUV</option>
                  <option>SUV</option>
                </select>
             </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
               <div class="p-3">
                  <label for="carphoto">Car Photo</label>
                  <input type="file" class="" id="carphoto" name="carphoto">
               </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="exampleFormControlSelect1">Car No.</label>
                <input type="text" class="form-control" name="carno">
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="exampleFormControlSelect1">No. of seats</label>
                <input type="number" class="form-control" name="seat">
              </div>
            </div>

             <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="exampleFormControlSelect1">Rent a Car Price (one day)</label>
                <input type="number" class="form-control" name="price">
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="details">Car details</label>
                <textarea class="form-control" name="details" id="details">         
                </textarea>
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="homedivision">Home Town Division</label>
              <select class="form-control " id="homedivision" name="homedivision">
                <option value="null">Select Your Home Town</option>

                  @foreach($divisions as $division)
                  <option value="{{$division->id}}">{{$division->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

             <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="city">Home Town City</label>
              <select class="form-control " id="city" name="city">
              </select>
             </div>
            </div>

            <div class="form-group col-lg-12 col-md-12">
              <div class="p-3">
                <label for="allcity">Travelable Division </label>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="allcity" name="allcity" checked="checked">
                    <label class="custom-control-label" for="allcity">All Divisions</label>
                  </div>
              </div>
            </div>

            <div class="form-group col-lg-12 col-md-12 division">
              <label>Can Travel Division</label>
              <select class="js-example-basic-multiple form-control" name="division[]" multiple="multiple">
                  <option value="null">Select Divisions</option>

                    @foreach($divisions as $division)
                    <option value="{{$division->id}}">{{$division->name}}</option>
                    @endforeach
              </select>
            </div>

            

            <div class="form-group col-lg-12 col-md-12">
              <div class="p-3">
                <label for="exampleFormControlSelect1">Email</label>
                <input type="email" class="form-control" name="email">
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="exampleFormControlSelect1">Password</label>
                <input type="Password" class="form-control" name="pwd">
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="exampleFormControlSelect1">Comfirm Password</label>
                <input type="Password" class="form-control" name="comfirmpwd">
              </div>
            </div>
  
  
              <div class="mb-4 py-3 px-4 col-lg-12"><button type="submit" class="btn btn-info btn-block">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
      $(document).ready(function(){
        $('.js-example-basic-multiple').select2();

          $(".division").hide();
          $("#allcity").click(function(){
            if ($(this).is(":checked"))
              {
                  $(".division").hide();
              }
              else
              {
                  $(".division").show();
              }
         })

          $("#homedivision").change(function(){
            // $("#division").show();
            var id=$(this).val();
            console.log(id);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.post("/citybydivision",{id:id},function(res){
              // console.log(res);
               var html="";
              $.each(res,function(i,v){

                var id=v.id;
                var name=v.name;
                console.log(id+name);
               
                html+=` <option value="${id}">${name}</option>`;
              })
               $("#city").html(html);

            })

          })

      
          

      })
    </script>
@endsection