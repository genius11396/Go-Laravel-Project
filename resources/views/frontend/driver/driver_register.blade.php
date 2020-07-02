@extends('frontend.master')

@section('content')
<div class="container-fluid">
    <div class="container my-5  d-flex justify-content-center">
        <div class="card col-lg-6 col-md-10 col-sm-10">
    <div class="card-block">
<form action="">
<div class="row">
	    <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Name </label>
    <input type="text" class="form-control" name="name">
   </div>
  </div>
      <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Your Photo</label>
    <input type="file" class="" name="photo">
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
    <label for="exampleFormControlSelect1">License Photo</label>
    <input type="file" class="" name="licensephoto">
   </div>
  </div>
      <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Car Photo</label>
    <input type="file" class="" name="carphoto">
   </div>
  </div>
      
     <div class="form-group col-lg-6 col-md-6">
       <div class="p-3">
          <label for="exampleFormControlSelect1">Car type</label>
          <select class="form-control" id="exampleFormControlSelect1" name="type">
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
        <label for="exampleFormControlSelect1">Rent a Car Price</label>
      <input type="number" class="form-control" name="price">
    </div>
  </div>

     <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Home Town </label>
    <select class="form-control" id="exampleFormControlSelect1" name="hometown">
      <option>Yangon</option>
      <option>Mandalay</option>
      <option>Bago</option>
      <option>Nay Pyi Taw</option>
      <option>Taunggyi</option>
      <option>Nay Pyi Taw</option>
      <option>Shan State</option>
    </select>
   </div>
  </div>
  <div class="form-group col-lg-12 col-md-12">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Travelable City </label>

        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="allcity" name="allcity" checked="checked">
          <label class="custom-control-label" for="allcity">All City</label>
        </div>

        
          <select class="form-control" name="division"id="division">
              @foreach($divisions as $division)
                <option value="{{$division->id}}">{{$division->name}}</option>
              @endforeach
          </select>
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
<div class="form-group col-lg-12 col-md-12">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Car details</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckb" value="option1" name="aircon">
          <label class="form-check-label" for="inlineCheckb">Air Con</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbo" value="option2" name="space">
          <label class="form-check-label" for="inlineCheckbo">Flexible Luaggage Space</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox" value="option3" name="social">
          <label class="form-check-label" for="inlineCheckbox">Good social</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox" value="option3" name="comfort">
          <label class="form-check-label" for="inlineCheckbox">Comfort for all</label>
        </div>
   </div>
</div>
  
    <div class="form-group col-lg-6 col-md-6">
      <div class="p-3">
        <label for="exampleFormControlSelect1">Email</label>
      <input type="email" class="form-control" name="email">
     </div>
    </div>

    <div class="form-group col-lg-6 col-md-6">
      <div class="p-3">
        <label for="exampleFormControlSelect1">Password</label>
      <input type="Password" class="form-control" name="password">
     </div>
    </div>
   
   <div class="form-group col-lg-12 col-md-12">
   <div class="p-3">

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="policy" value="option1" name="policy">
    <label class="form-check-label" for="policy">I accept the policy of the website</label>
  </div>
   </div>
  </div>
  <div class="mb-4 py-3 px-4 col-lg-12"><button class="btn btn-info btn-block">Register</button>
  </div>

</div>
</form>
    </div>
</div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
      $(document).ready(function(){
          $("#division").hide();
          $("#allcity").click(function(){
            if ($(this).is(":checked"))
              {
                  $("#division").hide();
              }
              else
              {
                  $("#division").show();
              }
         })

          $("#division").change(function(){
            var id=$(this).val();
            console.log(id);
          })

      })
    </script>
@endsection