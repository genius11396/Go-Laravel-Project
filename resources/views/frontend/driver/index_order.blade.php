@extends('frontend.master')

@section('content')

<div class="container-fluid">
  <div class="container">
    <p class="text-center" style="font-size: 28px;">You have no orders yets</p>
    <div class="outcard d-flex justify-content-center">
      <div class="card col-lg-9 col-md-12 col-sm-12">
        <div class="card-block">
          <div class="row px-3 pr-sm-0 pt-3 pb-0"  style="transition: all 0.5s ease;">
            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="logoframe p-1 pt-4" style="height: 40px; width: auto;" >
                <img src="{{asset('frontendtemplate\images\1.png')}}" style="height: 40px;width:auto;" alt="">
              </div>
            </div>
            <div class="col-lg-3 col-md-3 p-0 col-sm-5 pl-sm-4">
              <p>Passenger Name</p>
              <p>From</p>
              <p>To</p>
            </div>
             <div class="col-lg-4 col-md-4 p-0 col-sm-5">
              <p><i class="fas fa-caret-right"></i> Su Lay Nwe</p>
              <p><i class="fas fa-caret-right"></i> Yangon\ <span>Bahan</span></p>
              <p><i class="fas fa-caret-right"></i> Mandalay\ <span>Pa Thein Gyi</span></p>

            </div>

    <div class="col-lg-3 col-md-3 col-sm-5 pl-sm-4 offset-sm-2 offset-md-2 offset-lg-2 p-0 hideclass">
              <p>Pick up Time</p>
              <p>Drop off Time</p>
              <p>No. of Passenger</p>
              <p>Price</p>
            </div>
             <div class="col-lg-4 col-md-4 p-0 col-sm-5 hideclass" >
              <p><i class="fas fa-caret-right"></i><span> Jun 1\ </span><span>7:00</span><span>AM</span></p>
              <p><i class="fas fa-caret-right"></i><span> Jun 3</span></p>
              <p><i class="fas fa-caret-right"></i> 10</p>
               <p><i class="fas fa-caret-right"></i>  <span> 10000 </span>MMK</p>

            </div>

           <div class="btn-group col-lg-3 col-md-3">
           <button class="btn btn-danger m-1 rounded " style="height: 40px;">Cancle</button>
           <button class="btn btn-primary m-1 rounded" style="height: 40px">Accept</button>

          
</div>
        </div>
        <div class="d-flex justify-content-center bg-light" id="showmore">
          <i class="fas fa-chevron-down"></i></div>
        </div>
        <hr>
        <!-- another order -->
        <div class="card-block">
          <div class="row px-3 pr-sm-0 pt-3 pb-0"  style="transition: all 0.5s ease;">
            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="logoframe p-1 pt-4" style="height: 40px; width: auto;" >
                <img src="{{asset('frontendtemplate\images\1.png')}}" style="height: 40px;width:auto;" alt="">
              </div>
            </div>
            <div class="col-lg-3 col-md-3 p-0 col-sm-5 pl-sm-4">
              <p>Passenger Name</p>
              <p>From</p>
              <p>To</p>
            </div>
             <div class="col-lg-4 col-md-4 p-0 col-sm-5">
              <p><i class="fas fa-caret-right"></i> Su Lay Nwe</p>
              <p><i class="fas fa-caret-right"></i> Yangon\ <span>Bahan</span></p>
              <p><i class="fas fa-caret-right"></i> Mandalay\ <span>Pa Thein Gyi</span></p>

            </div>

    <div class="col-lg-3 col-md-3 col-sm-5 pl-sm-4 offset-sm-2 offset-md-2 offset-lg-2 p-0 hideclass">
              <p>Pick up Time</p>
              <p>Drop off Time</p>
              <p>No. of Passenger</p>
              <p>Price</p>
            </div>
             <div class="col-lg-4 col-md-4 p-0 col-sm-5 hideclass" >
              <p><i class="fas fa-caret-right"></i><span> Jun 1\ </span><span>7:00</span><span>AM</span></p>
              <p><i class="fas fa-caret-right"></i><span> Jun 3</span></p>
              <p><i class="fas fa-caret-right"></i> 10</p>
               <p><i class="fas fa-caret-right"></i>  <span> 10000 </span>MMK</p>

            </div>

           <div class="btn-group col-lg-3 col-md-3">
           <button class="btn btn-danger m-1 rounded " style="height: 40px;">Cancle</button>
           <button class="btn btn-primary m-1 rounded" style="height: 40px">Accept</button>

          
</div>
        </div>
        <div class="d-flex justify-content-center bg-light" id="showmore">
          <i class="fas fa-chevron-down"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection