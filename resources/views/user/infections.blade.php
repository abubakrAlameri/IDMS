@extends('layouts.main')

@section('sidbar')
<x-nav>

    <x-nav-link icon='sliders' link="{{route('dashboard', Auth::user())}}" >
        لوحة التحكم
    </x-nav-link>
 
    <x-nav-link icon='alert-circle' link="{{route('infections', Auth::user())}}" class='active'>
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
            <div class="col-12 col-xl-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Condensed Table</h5>
                        <h6 class="card-subtitle text-muted">Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</h6>
                    </div>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Operation System</th>
                                <th class="text-right">Users</th>
                                <th class="text-right">Share</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Windows</td>
                                <td class="text-right">8.232</td>
                                <td class="text-right">40%</td>
                            </tr>
                            <tr>
                                <td>Mac OS</td>
                                <td class="text-right">3.322</td>
                                <td class="text-right">20%</td>
                            </tr>
                            <tr>
                                <td>Linux</td>
                                <td class="text-right">4.232</td>
                                <td class="text-right">34%</td>
                            </tr>
                            <tr>
                                <td>FreeBSD</td>
                                <td class="text-right">1.121</td>
                                <td class="text-right">12%</td>
                            </tr>
                            <tr>
                                <td>Chrome OS</td>
                                <td class="text-right">1.331</td>
                                <td class="text-right">15%</td>
                            </tr>
                            <tr>
                                <td>Android</td>
                                <td class="text-right">2.301</td>
                                <td class="text-right">20%</td>
                            </tr>
                            <tr>
                                <td>iOS</td>
                                <td class="text-right">1.162</td>
                                <td class="text-right">14%</td>
                            </tr>
                            <tr>
                                <td>Windows Phone</td>
                                <td class="text-right">562</td>
                                <td class="text-right">7%</td>
                            </tr>
                            <tr>
                                <td>Other</td>
                                <td class="text-right">1.181</td>
                                <td class="text-right">14%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

      

@endsection
