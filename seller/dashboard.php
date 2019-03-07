<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/css/icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">

</head>
<body class="dashboard">

<div class="page">

    <?php
        include_once "../partials/header_dashboard.php";
    ?>

    <div class="page-main">
        <div class="my-3 my-md-5">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-title">
                        Dashboard
                    </h1>
                </div>
                <div class="row row-cards">
        
                    <div class="col-sm-6 col-lg-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-blue mr-3">
                              <i class="fe fe-dollar-sign"></i>
                            </span>
                                <div>
                                    <h4 class="m-0"><a href="javascript:void(0)">132 <small>Sales</small></a></h4>
                                    <small class="text-muted">12 waiting payments</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-green mr-3">
                              <i class="fe fe-shopping-cart"></i>
                            </span>
                                <div>
                                    <h4 class="m-0"><a href="javascript:void(0)">78 <small>Orders</small></a></h4>
                                    <small class="text-muted">32 shipped</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-red mr-3">
                              <i class="fe fe-users"></i>
                            </span>
                                <div>
                                    <h4 class="m-0"><a href="javascript:void(0)">1,352 <small>Members</small></a></h4>
                                    <small class="text-muted">163 registered today</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-yellow mr-3">
                              <i class="fe fe-message-square"></i>
                            </span>
                                <div>
                                    <h4 class="m-0"><a href="javascript:void(0)">132 <small>Comments</small></a></h4>
                                    <small class="text-muted">16 waiting</small>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Statisk Penjualan </h3>
                            </div>
                            <div id="chart-development-activity" style="height: 10rem"></div>
        
                        </div>
        
                    </div>
        
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Invoices</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th class="w-1">No.</th>
                                        <th>Nomor Order</th>
                                        <th>Client</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="text-muted">001401</span></td>
                                        <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                                        <td>
                                            Carlson Limited
                                        </td>
        
                                        <td>
                                            <span class="status-icon bg-success"></span> Paid
                                        </td>
                                        <td>$887</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="icon" href="javascript:void(0)">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-muted">001402</span></td>
                                        <td><a href="invoice.html" class="text-inherit">UX Wireframes</a></td>
        
                                        <td>
                                            12 Apr 2017
                                        </td>
                                        <td>
                                            <span class="status-icon bg-warning"></span> Pending
                                        </td>
                                        <td>$1200</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="icon" href="javascript:void(0)">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-muted">001403</span></td>
                                        <td><a href="invoice.html" class="text-inherit">New Dashboard</a></td>
                                        <td>
                                            Bluewolf
                                        </td>
        
                                        <td>
                                            <span class="status-icon bg-warning"></span> Pending
                                        </td>
                                        <td>$534</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="icon" href="javascript:void(0)">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-muted">001404</span></td>
                                        <td><a href="invoice.html" class="text-inherit">Landing Page</a></td>
                                        <td>
                                            Salesforce
                                        </td>
        
                                        <td>
                                            <span class="status-icon bg-secondary"></span> Due in 2 Weeks
                                        </td>
                                        <td>$1500</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="icon" href="javascript:void(0)">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-muted">001405</span></td>
                                        <td><a href="invoice.html" class="text-inherit">Marketing Templates</a></td>
                                        <td>
                                            Printic
                                        </td>
        
                                        <td>
                                            <span class="status-icon bg-danger"></span> Paid Today
                                        </td>
                                        <td>$648</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="icon" href="javascript:void(0)">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-muted">001406</span></td>
                                        <td><a href="invoice.html" class="text-inherit">Sales Presentation</a></td>
                                        <td>
                                            Tabdaq
                                        </td>
        
                                        <td>
                                            <span class="status-icon bg-secondary"></span> Due in 3 Weeks
                                        </td>
                                        <td>$300</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="icon" href="javascript:void(0)">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>


</div>

<script src="../assets/vendors/jquery/jquery.min.js"></script>
<script src="../assets/vendors/popper.js/popper.js"></script>
<script src="../assets/vendors/bootstrap/bootstrap.min.js"></script>

<script src="../assets/js/dashboard.js"></script>
</body>
</html>

