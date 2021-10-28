@extends('layouts.main')

@section('sidbar')
<x-nav>

    <x-nav-link icon='sliders' link="{{route('admin.dashboard', Auth::user())}}" class='active'>
        Dashboard
    </x-nav-link>
        <x-nav-collapse  icon='users'>
        Users
        <x-slot name="elements">
            <x-nav-link link="{{route('admin.add.users', Auth::user())}}">
                Add
            </x-nav-link>
             <x-nav-link link="{{route('admin.edite.users', Auth::user())}}">
                edite
            </x-nav-link>
          
        </x-slot>
      
    </x-nav-collapse>
    <x-nav-collapse   icon='alert-circle'>
        Infections
        <x-slot name="elements">
            <x-nav-link link="{{route('admin.add.infections', Auth::user())}}">
                Add
            </x-nav-link>
             <x-nav-link link="{{route('admin.edite.infections', Auth::user())}}">
                edite
            </x-nav-link>
             
        </x-slot>
      
    </x-nav-collapse>

    <x-nav-link icon='user' link="{{route('admin.profile', Auth::user())}}">
        Profile
    </x-nav-link> 
 
</x-nav-collapse>
   
@endsection
@section('body')

    {{-- 
        <main class="content">
                    <div class="container-fluid p-0">

                        <div class="row mb-2 mb-xl-3">
                            <div class="col-auto d-none d-sm-block">
                                <h3><strong>Analytics</strong> Dashboard</h3>
                            </div>

                            <div class="col-auto ml-auto text-right mt-n1">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                                        <li class="breadcrumb-item"><a href="#">AdminKit</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-xxl-5 d-flex">
                                <div class="w-100">
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
                            </div>

                            <div class="col-xl-6 col-xxl-7">
                                <div class="card flex-fill w-100">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">Recent Movement</h5>
                                    </div>
                                    <div class="card-body py-3">
                                        <div class="chart chart-sm">
                                            <canvas id="chartjs-dashboard-line"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                                <div class="card flex-fill w-100">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">Browser Usage</h5>
                                    </div>
                                    <div class="card-body d-flex">
                                        <div class="align-self-center w-100">
                                            <div class="py-3">
                                                <div class="chart chart-xs">
                                                    <canvas id="chartjs-dashboard-pie"></canvas>
                                                </div>
                                            </div>

                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Chrome</td>
                                                        <td class="text-right">4306</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Firefox</td>
                                                        <td class="text-right">3801</td>
                                                    </tr>
                                                    <tr>
                                                        <td>IE</td>
                                                        <td class="text-right">1689</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                                <div class="card flex-fill w-100">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">Real-Time</h5>
                                    </div>
                                    <div class="card-body px-4">
                                        <div id="world_map" style="height:350px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                                <div class="card flex-fill">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">Calendar</h5>
                                    </div>
                                    <div class="card-body d-flex">
                                        <div class="align-self-center w-100">
                                            <div class="chart">
                                                <div id="datetimepicker-dashboard"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">Latest Projects</h5>
                                    </div>
                                    <table class="table table-hover my-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th class="d-none d-xl-table-cell">Start Date</th>
                                                <th class="d-none d-xl-table-cell">End Date</th>
                                                <th>Status</th>
                                                <th class="d-none d-md-table-cell">Assignee</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Project Apollo</td>
                                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                                <td><span class="badge bg-success">Done</span></td>
                                                <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                            </tr>
                                            <tr>
                                                <td>Project Fireball</td>
                                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                                <td><span class="badge bg-danger">Cancelled</span></td>
                                                <td class="d-none d-md-table-cell">William Harris</td>
                                            </tr>
                                            <tr>
                                                <td>Project Hades</td>
                                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                                <td><span class="badge bg-success">Done</span></td>
                                                <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                            </tr>
                                            <tr>
                                                <td>Project Nitro</td>
                                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                                <td><span class="badge bg-warning">In progress</span></td>
                                                <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                            </tr>
                                            <tr>
                                                <td>Project Phoenix</td>
                                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                                <td><span class="badge bg-success">Done</span></td>
                                                <td class="d-none d-md-table-cell">William Harris</td>
                                            </tr>
                                            <tr>
                                                <td>Project X</td>
                                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                                <td><span class="badge bg-success">Done</span></td>
                                                <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                            </tr>
                                            <tr>
                                                <td>Project Romeo</td>
                                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                                <td><span class="badge bg-success">Done</span></td>
                                                <td class="d-none d-md-table-cell">Christina Mason</td>
                                            </tr>
                                            <tr>
                                                <td>Project Wombat</td>
                                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                                <td><span class="badge bg-warning">In progress</span></td>
                                                <td class="d-none d-md-table-cell">William Harris</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                                <div class="card flex-fill w-100">
                                    <div class="card-header">

                                        <h5 class="card-title mb-0">Monthly Sales</h5>
                                    </div>
                                    <div class="card-body d-flex w-100">
                                        <div class="align-self-center chart chart-lg">
                                            <canvas id="chartjs-dashboard-bar"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-6 text-left">
                                <p class="mb-0">
                                    <a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
                                </p>
                            </div>
                            <div class="col-6 text-right">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Support</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Help Center</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Privacy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer> 
    --}}

@endsection
