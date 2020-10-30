<!DOCTYPE html>
<!-- saved from url=(0054)https://getbootstrap.com/docs/4.1/examples/dashboard/# -->
<html lang="nl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">
    

    <title>Dashboard</title>

    <link rel="canonical" href="/home">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

  <body data-gr-c-s-loaded="true">
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/home">AAASoftware</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="btn-dark btn nav-link" >Sign out</button>
        </form>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/home">
                <i class='	far fa-chart-bar' style='width:40px;font-size:20px;color:grey'></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/orders">
                <i class='fas fa-business-time' style='width:40px;font-size:20px;color:grey'></i>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/subscriptions">
                  <i class='far fa-envelope' style='width:40px;font-size:20px;color:grey'></i>
                  Subscriptions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/workers">
                  <i class='far fa-user' style='width:40px;font-size:20px;color:grey'></i>
                  Workers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/docs">
                  <i class='far fa-file' style='width:40px;font-size:20px;color:grey'></i>
                  Docs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/alerts">
                  <i class='fas fa-exclamation-circle' style='width:40px;font-size:20px;color:grey'></i>
                  Alerts
                </a>
              </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
              <i class='fas fa-plus-circle' style='width:40px;font-size:20px;color:grey'></i>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                <i class='far fa-file-alt' style='width:40px;font-size:20px;color:grey'></i>
                  Current month
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div>
          </div>

          <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="1538" height="649" style="display: block; width: 1538px; height: 649px;"></canvas>

          <h2>Subscriptions</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th></th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
</body></html>