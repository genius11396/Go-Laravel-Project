@extends('frontend.master')

@section('content')

<div id="img" style="background-image: url('{{asset('frontendtemplate/images/car.jpeg')}}');">

<div class="container-fluid">
    <div class="container py-5  d-flex justify-content-center">
        <div class="card col-lg-6 col-md-10 col-sm-10">
    <div class="card-block">

<form action="{{route('driverregister.store')}}" method="POST" enctype="multipart/form-data">
  @csrf

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
              <label for="exampleFormControlSelect1"> Photo</label>
          <input type="file" class="" name="photo[]" multiple="multiple">
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
            <label for="exampleFormControlSelect1">Rent a Car Price (Per day)</label>
          <input type="number" class="form-control" name="price">
        </div>
      </div>

     <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Home Town </label>
    <select class="form-control" id="exampleFormControlSelect1" name="hometown">
                    <option value="null">-- Please select Divisions --</option>
     @foreach($divisions as $division)

                <option value="{{$division->id}}">{{$division->name}}</option>
              @endforeach
    </select>
   </div>
  </div>
  <div class="form-group col-lg-12 col-md-12">
   <div class="p-3">
        <label for="allcity">Travelable City </label>

        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="allcity" name="allcity" checked="checked">
          <label class="custom-control-label" for="allcity">All Division</label>
        </div>

        
          <select class="form-control" name="division"id="division">
             <option value="null">-- Please select Divisions --</option>
              @foreach($divisions as $division)
             
                <option value="{{$division->id}}">{{$division->name}}</option>
              @endforeach
          </select>

           

   </div>
  </div>

  <div class="form-group col-lg-12 col-md-12 travelcity">
    <label>Can Travel City</label>
    <select class="js-example-basic-multiple form-control cities" name="states[]" multiple="multiple">
             
          </select>
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
              <label for="details">Car details</label>
          <textarea class="form-control" name="details" id="details">         
          </textarea>
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
        $(".travelcity").hide();

          $("#division").hide();
          $("#allcity").click(function(){
            if ($(this).is(":checked"))
              {
                  $("#division").hide();
                  $(".travelcity").hide();
              }
              else
              {
                  $("#division").show();
              }
         })

          $("#division").change(function(){
            $(".travelcity").show();
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
               $(".cities").html(html);

            })

          })

      
          

      })
    </script>
@endsection