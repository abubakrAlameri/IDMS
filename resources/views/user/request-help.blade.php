@extends('layouts.main')

@section('sidbar')
    <x-nav>

        <x-nav-link icon='sliders' link="{{ route('dashboard', Auth::user()) }}">
            Dashboard
        </x-nav-link>

        <x-nav-link icon='alert-circle' link="{{ route('infections', Auth::user()) }}">
            Infections
        </x-nav-link>

        <x-nav-link icon='heart' link="{{ route('healthy.food', Auth::user()) }}">
            Healthy food
        </x-nav-link>

        <x-nav-link icon='feather' link="{{ route('advices', Auth::user()) }}">
            Advices
        </x-nav-link>

        <x-nav-link icon='flag' link="{{ route('request.help', Auth::user()) }}" class='active'>
            Request Help
        </x-nav-link>

        <x-nav-link icon='file-text' link="{{ route('medical.history', Auth::user()) }}">
            Medical History
        </x-nav-link>

        <x-nav-link icon='user' link="{{ route('prfile', Auth::user()) }}">
            Profile
        </x-nav-link>

    </x-nav>
@endsection
@section('body')


    <main class="content">
        <div class="container-fluid p-0">
           <div class="row">
                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Messages</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <img src="{{asset('img/avatars/avatar.jpg')}}" width="36" height="36" class="rounded-circle mr-2"
                                    alt="Charles Hall">
                                <div class="flex-grow-1">
                                    <small class="float-right text-navy">30m ago</small>
                                    <strong>Charles Hall</strong> Send You A Message 
                                    

                                    <div class="border text-sm text-muted p-2 mt-1">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
                                        sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                        sapien ut libero venenatis faucibus. Nullam quis ante.
                                    </div>

                                
                                </div>
                            </div>
                            <hr />

                        </div>
                            
                    </div>
                </div>
           </div>
           <div class="row">
               <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Inline form</h5>
                            <h6 class="card-subtitle text-muted">Single horizontal row.</h6>
                        </div>
                        <div class="card-body">
                            <form class="row row-cols-md-auto align-items-center">
                                <div class="col-12">
                                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                                </div>

                                <div class="col-12">
                                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check mb-1 mr-sm-2">
                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                        <label class="form-check-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </main>


@endsection
