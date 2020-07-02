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
    <input type="text" class="form-control">
   </div>
  </div>
      <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Your Photo</label>
    <input type="file" class="">
   </div>
  </div>
      <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Phone no</label>
    <input type="number" class="form-control" placeholder='09xxxxxxx'>
   </div>
  </div>
      <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
    <label for="exampleFormControlSelect1">License Photo</label>
    <input type="file" class="">
   </div>
  </div>
      <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Car Photo</label>
    <input type="file" class="">
   </div>
  </div>
      
     <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Car type</label>
    <select class="form-control" id="exampleFormControlSelect1">
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
        <label for="exampleFormControlSelect1">Home Town </label>
    <select class="form-control" id="exampleFormControlSelect1">
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
        <br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Yangon</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Mandalay</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
  <label class="form-check-label" for="inlineCheckbox3">Bago</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option3" >
  <label class="form-check-label" for="inlineCheckbox4">Nay Pyi Taw</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option3" >
  <label class="form-check-label" for="inlineCheckbox5">Taunggyi</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option3" >
  <label class="form-check-label" for="inlineCheckbox6">Shan State</label>
</div>
   </div>
  </div>

    <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Car No.</label>
    <input type="number" class="form-control">
   </div>
  </div>

   
    <div class="form-group col-lg-6 col-md-6">
   <div class="p-3">
        <label for="exampleFormControlSelect1">No. of seats </label>
    <input type="number" class="form-control">
   </div>
  </div>
     <div class="form-group col-lg-12 col-md-12">
   <div class="p-3">
        <label for="exampleFormControlSelect1">Car details</label>
        <br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckb" value="option1">
  <label class="form-check-label" for="inlineCheckb">air-con</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbo" value="option2">
  <label class="form-check-label" for="inlineCheckbo">Good glasses</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox" value="option3" >
  <label class="form-check-label" for="inlineCheckbox">Good social</label>
</div>


   </div>
  </div>

 
   <div class="form-group col-lg-12 col-md-12">
   <div class="p-3">

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="policy" value="option1">
  <label class="form-check-label" for="policy">I accept the policy of the website</label>
</div>
   </div>
  </div>
<div class="mb-4 py-3 px-4 col-lg-12"><button class="btn btn-primary btn-block">Search</button>
</div>

</div>
</form>
    </div>
</div>
    </div>
</div>
@endsection