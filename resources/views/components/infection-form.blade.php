@props(['infection'=> null])


@php
// dd('d');
if ($infection != null) {
    $routeName = 'admin.update.infection';
    $infec_name = $infection->infec_name;
    $source = $infection->source;
    $$infec_date = $infection->infec_date;
    $num_infected = $infection->num_infected;
    $num_recoverd = $infection->num_recoverd;
    $num_death = $infection->num_death;
   
 
}else{
    $routeName = 'admin.craete.new.infection';
    

    $infec_name = '';
    $source = '';
    $infec_date = '';
    $num_infected = '';
    $num_recoverd = '';
    $num_death = '';
   
}
    
@endphp
<div class="row">
    <div class="col-12 col-xl-10 m-auto ">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center text-bold">Add Infection Disease</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div>
                        <div class=".text-danger">
                            {{ __('an error has occurred') }}
                        </div>

                        <ul class="text-danger">
                            @foreach ($errors->all() as $error)
                                <li class="">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            
                @endif
                <div class="text-success">{{session()->pull('message')}}</div>
                                            
                <form method="POST" action="{{ route($routeName,[auth()->user(),$infection])}}" enctype="multipart/form-data">
                    @isset($infection)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Disease Name</label>
                        <input type="text" class="form-control" name="infec_name" placeholder="Disease Name" value="{{$infec_name}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label">Disease Source</label>
                        <input type="text" class="form-control" name="source" placeholder="Disease Source" value="{{$source}}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">When Start</label>
                        <input type="date" class="form-control" name="Infec_date" value='{{$infec_date}}' >
                    </div>
                  
                    <div class="mb-3">
                        <label class="form-label">Number Of Infected People </label>
                        <input type="text" class="form-control" name="num_infected" placeholder="Number Of Infected People" value="{{$num_infected}}">
                    </div>
                
            
                    <div class="mb-3">
                        <label class="form-label">Number Of Recovered People</label>
                        <input type="text" class="form-control" name="num_recovers" placeholder="Number Of Recovered People" value="{{$num_recoverd}}">
                    </div>
                        <div class="mb-3">
                        <label class="form-label">Number Of Deaths</label>
                        <input type="text" class="form-control" name="num_death" placeholder="Number Of Deaths" value="{{$num_death}}">
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary">{{$infection ? 'Update' : 'Create'}}</button>
                </form>
            </div>
        </div>
    </div>

</div>