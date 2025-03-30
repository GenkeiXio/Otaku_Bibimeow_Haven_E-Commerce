@if(session('success'))
    <div class="alert alert-success alert-dismissable fade show text-center" style="color: white !important;
  background-color: #db4444 !important;">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        {{session('success')}}
    </div>
@endif


@if(session('error'))
    <div class="alert alert-danger alert-dismissable fade show text-center" style="color: white !important;
  background-color: #db4444 !important;">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        {{session('error')}}
    </div>
@endif