@extends('layouts.main')

@section('sidbar')
<x-nav>

    <x-nav-link icon='sliders' link="{{route('dashboard', Auth::user())}}" class='active'>
        لوحة التحكم
    </x-nav-link>
 
    <x-nav-link icon='alert-circle' link="{{route('infections', Auth::user())}}">
        Infections
    </x-nav-link>

    <x-nav-link icon='heart' link="{{route('healthy.food', Auth::user())}}">
        Healthy food
    </x-nav-link>
    
    <x-nav-link icon='feather' link="{{route('advices', Auth::user())}}">
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
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Sales</h5>
                                    <h1 class="mt-1 mb-3">2.382</h1>
                                    <div class="mb-1">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Visitors</h5>
                                    <h1 class="mt-1 mb-3">14.212</h1>
                                    <div class="mb-1">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Earnings</h5>
                                    <h1 class="mt-1 mb-3">$21.300</h1>
                                    <div class="mb-1">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Orders</h5>
                                    <h1 class="mt-1 mb-3">64</h1>
                                    <div class="mb-1">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             
        </div>
    </main>


@endsection
