@extends('layouts.main')

@section('sidbar')
<x-nav>

    <x-nav-link icon='sliders' link="{{route('dashboard', Auth::user())}}" >
        لوحة التحكم
    </x-nav-link>
 
    <x-nav-link icon='alert-circle' link="{{route('infections', Auth::user())}}">
        Infections
    </x-nav-link>

    <x-nav-link icon='heart' link="{{route('healthy.food', Auth::user())}}">
        Healthy food
    </x-nav-link>
    
    <x-nav-link icon='feather' link="{{route('advices', Auth::user())}}" class='active'>
        Advices
    </x-nav-link>

    <x-nav-link icon='flag' link="{{route('request.help', Auth::user())}}">
        Request Help
    </x-nav-link>
 
    <x-nav-link icon='file-text' link="{{route('medical.history', Auth::user())}}">
        Medical History
    </x-nav-link>
    
    <x-nav-link icon='user' link="{{route('prfile', Auth::user())}}">
        Profile
    </x-nav-link>
 
</x-nav>
@endsection
@section('body')
<main class="content">
    <div class="container-fluid p-0">
       <div class="row">
            <div class="col-md-12">
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
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/photos/unsplash-1.jpg')}}" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Card with image and links</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/photos/unsplash-2.jpg')}}" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Card with image and links</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/photos/unsplash-3.jpg')}}" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Card with image and links</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</main>
@endsection
