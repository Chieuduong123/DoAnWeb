<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="font-weight-bold mb-0">RoyalUI Dashboard</h4>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                                        <img src="{{asset('icon/9.png')}}">&ensp;Report
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left">Sales</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
                                        <img src="{{asset('icon/1.png')}}">
                                    </div>
                                    <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left">Revenue</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">47033</h3>
                                        <img src="{{asset('icon/2.png')}}">
                                    </div>
                                    <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left">Downloads</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
                                        <img src="{{asset('icon/3.png')}}">
                                    </div>
                                    <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left">Returns</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
                                        <img src="{{asset('icon/4.png')}}">
                                    </div>
                                    <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Sales details</p>
                                    <p class="text-muted font-weight-light">Received overcame oh sensible so at an. Formed do change merely to county it. Am separate contempt domestic to to oh. On relation my so addition branched.</p>
                                    <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                                    <canvas id="sales-chart"></canvas>
                                </div>
                                <div class="card border-right-0 border-left-0 border-bottom-0">
                                    <div class="d-flex justify-content-center justify-content-md-end">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Today
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                                <a class="dropdown-item" href="#">January - March</a>
                                                <a class="dropdown-item" href="#">March - June</a>
                                                <a class="dropdown-item" href="#">June - August</a>
                                                <a class="dropdown-item" href="#">August - November</a>
                                            </div>
                                        </div>
                                        <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card border-bottom-0">
                                <div class="card-body pb-0">
                                    <p class="card-title">Purchases</p>
                                    <p class="text-muted font-weight-light">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review</p>
                                    <div class="d-flex flex-wrap mb-5">
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">Status</p>
                                            <h3>362</h3>
                                        </div>
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">New users</p>
                                            <h3>187</h3>
                                        </div>
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">Chats</p>
                                            <h3>524</h3>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted">Feedbacks</p>
                                            <h3>509</h3>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="order-chart" class="w-100"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card position-relative">
                                <div class="card-body">
                                    <p class="card-title">Detailed Reports</p>
                                    <div class="row">
                                        <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                                            <div class="ml-xl-4">
                                                <h1>33500</h1>
                                                <h3 class="font-weight-light mb-xl-4">Sales</h3>
                                                <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-9">
                                            <div class="row">
                                                <div class="col-md-6 mt-3 col-xl-5">
                                                    <canvas id="north-america-chart"></canvas>
                                                    <div id="north-america-legend"></div>
                                                </div>
                                                <div class="col-md-6 col-xl-7">
                                                    <div class="table-responsive mb-3 mb-md-0">
                                                        <table class="table table-borderless report-table">
                                                            <tr>
                                                                <td class="text-muted">Illinois</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">524</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Washington</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">722</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Mississippi</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">173</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">California</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">945</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Maryland</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">553</h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Alaska</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">912</h5>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
               
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/template.js')}}"></script>
    <script src="{{asset('js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>