
@extends('frontend.master')

@section('content')
<div id="img" style="background-image: url('{{asset('frontendtemplate/images/car.jpeg')}}');">
  <div class="container-fluid">
    <div class="container py-5  d-flex justify-content-end">
      <div class="card col-lg-6 col-md-10 col-sm-10">
        <div class="card-block">
          <form action="">

            <div class="row">
              <div class="form-group col-lg-6 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1">No. of Passengers </label>
                <input type="number" class="form-control">
              </div>
            </div>
            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="exampleFormControlSelect1">Pick up place/City </label>
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
          <div class="form-group col-lg-6 col-md-6">
           <div class="p-3">
            <label for="exampleFormControlSelect1">Pick up place/Township </label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Ahlone</option>
              <option>Bahan</option>
              <option>Botahtaung</option>
              <option>Cocokyun</option>
              <option>Dagon</option>
              <option>Dala</option>
              <option>Dawbon</option>
              <option>Hlaing</option>
            </select>
          </div>
        </div>
        <div class="form-group col-lg-6 col-md-6">
         <div class="p-3">
          <label for="exampleFormControlSelect1">Drop off place/City </label>
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
      <div class="form-group col-lg-6 col-md-6">
       <div class="p-3">
        <label for="exampleFormControlSelect1">Drop off place/Township </label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Ahlone</option>
          <option>Bahan</option>
          <option>Botahtaung</option>
          <option>Cocokyun</option>
          <option>Dagon</option>
          <option>Dala</option>
          <option>Dawbon</option>
          <option>Hlaing</option>
        </select>
      </div>
    </div>
    <div class="form-group col-lg-6 col-md-6">
     <div class="p-3">
      <label for="exampleFormControlSelect1">Pick up Date </label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>{{date("M - d")}}</option>
        <option>{{
          date("M - d",strtotime('today + 1day'))
        }}</option>
        <option>{{
          date("M - d",strtotime('today + 2day'))
        }}</option>
        <option>{{
          date("M - d",strtotime('today + 3day'))
        }}</option>
        <option>{{
          date("M - d",strtotime('today + 4day'))
        }}</option>
        <option>{{
          date("M - d",strtotime('today + 5day'))
        }}</option>
        <option>{{
          date("M - d",strtotime('today + 6day'))
        }}</option>
        <option>{{
          date("M - d",strtotime('today + 7day'))
        }}</option>
        <option>{{
          date("M - d",strtotime('today + 8day'))
        }}</option>
      </select>
    </div>
  </div>
  <div class="form-group col-lg-3 col-md-6">
   <div class="p-3">
    <label for="exampleFormControlSelect1">Pick up </label>
    <input type="text" class="form-control" placeholder="00:00">

  </div>
</div>
<div class="form-group col-lg-3 col-md-6">
 <div class="p-3">
  <label for="exampleFormControlSelect1">Time</label>
  <select class="form-control" id="exampleFormControlSelect1">
    <option>AM</option>
    <option>PM</option>

  </select>
</div>
</div>
<div class="form-group col-lg-6 col-md-6">
 <div class="p-3">
  <label for="exampleFormControlSelect1">Drop off Date </label>
  <select class="form-control" id="exampleFormControlSelect1">
   <option>{{date("M - d")}}</option>
   <option>{{
    date("M - d",strtotime('today + 1day'))
  }}</option>

  <option>{{
    date("M - d",strtotime('today + 2day'))
  }}</option>
  <option>{{
    date("M - d",strtotime('today + 3day'))
  }}</option>
  <option>{{
    date("M - d",strtotime('today + 4day'))
  }}</option>
  <option>{{
    date("M - d",strtotime('today + 5day'))
  }}</option>
  <option>{{
    date("M - d",strtotime('today + 6day'))
  }}</option>
  <option>{{
    date("M - d",strtotime('today + 7day'))
  }}</option>
  <option>{{
    date("M - d",strtotime('today + 8day'))
  }}</option>
</select>
</div>
</div>
<div class="mb-4 py-3 px-4 col-lg-12">
  <a href="{{route('result')}}" class="btn btn-info btn-block">Search</a>
</div>

</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection


