@extends('backend.master')

@section('style')
<link href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="mb-3">
	<span class="h3 text-gray-800">Cities</span><a href="{{ route('city.create') }}"class="btn btn-primary float-right">Add New</a>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary"> City lists</h6>
	</div>
 <div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
         <th>No.</th>
         <th>Name</th>
         <th>Division</th>
         <th>Action</th>
       </tr>
     </thead>
     <tfoot>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Division</th>
        <th>Action</th>
      </tr>
    </tfoot>
    <tbody>

     @php $i=1;@endphp
     @foreach($cities as $row)
     <tr>
       <th>{{$i++}}</th>
       <th>
        {{$row->name}}
      </th>
      <th>
        
       {{$row->division->name}}</th>
       <th>
        <a href="{{route('city.edit',$row->id)}}" class="btn btn-warning" >Edit</a>
        <form style="display: inline;" method="post" action="{{route('city.destroy',$row->id)}}"  onsubmit="return comfirm('Are you comfirm')">
           @csrf
           @method('DELETE')
           <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
         </form>
       </th>

     </tr>
     @endforeach
   </tbody>
 </table> 
</div>
</div>
</div>


@endsection
@section('script')
<script src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backendtemplate/js/demo/datatables-demo.js')}}"></script>
@endsection