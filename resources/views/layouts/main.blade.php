<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}


    <title>Dashboard</title>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>

</head>

<body>
    <div class="wrapper">
        @yield('sidbar')

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>


                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
              
                        <li class="nav-item dropdown">
                        

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-toggle="dropdown">
                                <img src="{{asset(auth()->user()->attachment)}}" class="avatar img-fluid rounded mr-1"
                                    alt="Charles Hall" /> <span class="text-dark">{{Str::title(auth()->user()->name)}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="pages-profile.html">
                                    <i class="align-middle mr-1"
                                        data-feather="user"></i> 
                                    Profile
                                </a>
                    
                                <div class="dropdown-divider"></div>
                               
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="align-middle mr-1" data-feather="log-out"></i> Log out</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('body')
            
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <p class="mb-0">
                                <a href="index.html" class="text-muted"><strong>IDMS</strong></a> &copy;
                            </p>
                        </div>
                
                    </div>
                </div>
            </footer> 
   
        </div>
    </div>
    <!-- 
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
         var gradient = ctx.createLinearGradient(0, 0, 0, 225);
         gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
         gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
         // Line chart
         new Chart(document.getElementById("chartjs-dashboard-line"), {
             type: "line",
             data: {
                 labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                     "Dec"
                 ],
                 datasets: [{
                     label: "Sales ($)",
                     fill: true,
                     backgroundColor: gradient,
                     borderColor: window.theme.primary,
                     data: [
                         2115,
                         1562,
                         1584,
                         1892,
                         1587,
                         1923,
                         2566,
                         2448,
                         2805,
                         3438,
                         2917,
                         3327
                     ]
                 }]
             },
             options: {
                 maintainAspectRatio: false,
                 legend: {
                     display: false
                 },
                 tooltips: {
                     intersect: false
                 },
                 hover: {
                     intersect: true
                 },
                 plugins: {
                     filler: {
                         propagate: false
                     }
                 },
                 scales: {
                     xAxes: [{
                         reverse: true,
                         gridLines: {
                             color: "rgba(0,0,0,0.0)"
                         }
                     }],
                     yAxes: [{
                         ticks: {
                             stepSize: 1000
                         },
                         display: true,
                         borderDash: [3, 3],
                         gridLines: {
                             color: "rgba(0,0,0,0.0)"
                         }
                     }]
                 }
             }
         });
     });
 </script>
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         // Pie chart
         new Chart(document.getElementById("chartjs-dashboard-pie"), {
             type: "pie",
             data: {
                 labels: ["Chrome", "Firefox", "IE"],
                 datasets: [{
                     data: [4306, 3801, 1689],
                     backgroundColor: [
                         window.theme.primary,
                         window.theme.warning,
                         window.theme.danger
                     ],
                     borderWidth: 5
                 }]
             },
             options: {
                 responsive: !window.MSInputMethodContext,
                 maintainAspectRatio: false,
                 legend: {
                     display: false
                 },
                 cutoutPercentage: 75
             }
         });
     });
 </script>
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         // Bar chart
         new Chart(document.getElementById("chartjs-dashboard-bar"), {
             type: "bar",
             data: {
                 labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                     "Dec"
                 ],
                 datasets: [{
                     label: "This year",
                     backgroundColor: window.theme.primary,
                     borderColor: window.theme.primary,
                     hoverBackgroundColor: window.theme.primary,
                     hoverBorderColor: window.theme.primary,
                     data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                     barPercentage: .75,
                     categoryPercentage: .5
                 }]
             },
             options: {
                 maintainAspectRatio: false,
                 legend: {
                     display: false
                 },
                 scales: {
                     yAxes: [{
                         gridLines: {
                             display: false
                         },
                         stacked: false,
                         ticks: {
                             stepSize: 20
                         }
                     }],
                     xAxes: [{
                         stacked: false,
                         gridLines: {
                             color: "transparent"
                         }
                     }]
                 }
             }
         });
     });
 </script>
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         var markers = [{
                 coords: [31.230391, 121.473701],
                 name: "Shanghai"
             },
             {
                 coords: [28.704060, 77.102493],
                 name: "Delhi"
             },
             {
                 coords: [6.524379, 3.379206],
                 name: "Lagos"
             },
             {
                 coords: [35.689487, 139.691711],
                 name: "Tokyo"
             },
             {
                 coords: [23.129110, 113.264381],
                 name: "Guangzhou"
             },
             {
                 coords: [40.7127837, -74.0059413],
                 name: "New York"
             },
             {
                 coords: [34.052235, -118.243683],
                 name: "Los Angeles"
             },
             {
                 coords: [41.878113, -87.629799],
                 name: "Chicago"
             },
             {
                 coords: [51.507351, -0.127758],
                 name: "London"
             },
             {
                 coords: [40.416775, -3.703790],
                 name: "Madrid "
             }
         ];
         var map = new JsVectorMap({
             map: "world",
             selector: "#world_map",
             zoomButtons: true,
             markers: markers,
             markerStyle: {
                 initial: {
                     r: 9,
                     strokeWidth: 7,
                     stokeOpacity: .4,
                     fill: window.theme.primary
                 },
                 hover: {
                     fill: window.theme.primary,
                     stroke: window.theme.primary
                 }
             }
         });
         window.addEventListener("resize", () => {
             map.updateSize();
         });
     });
 </script>
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         document.getElementById("datetimepicker-dashboard").flatpickr({
             inline: true,
             prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
             nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
         });
     });
 </script> -->

</body>

</html>
