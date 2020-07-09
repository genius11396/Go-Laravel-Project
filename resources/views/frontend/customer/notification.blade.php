 
@extends('frontend.customer.master')

@section('content')

  <div class="container-fluid" style="min-height: 100vh">
    <div class="container py-5 d-flex justify-content-center">
       @foreach($orders as $order)  

              @if(auth()->user()->id==$order->user_id)
              @if($order->status==1 || $order->status==1.1)
                   <div class="alert alert-info alert-dismissible fade show" role="alert">
 Your order to <strong>{{$order->driver_id}}</strong> was accepted. 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
             
              @endif
               @if($order->status==2)
                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
  Your order to <strong>{{$order->driver_id}}</strong> was reject. Try again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        
              @endif
         
                  @endif
              @endforeach
    </div>
  </div>

@endsection



