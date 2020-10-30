<!DOCTYPE html>
<!-- saved from url=(0054)https://getbootstrap.com/docs/4.1/examples/dashboard/# -->
<html lang="nl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">
    

    <title>Documentation</title>

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
                <a class="nav-link" href="/home">
                <i class='	far fa-chart-bar' style='width:40px;font-size:20px;color:grey'></i>
                  Dashboard
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
                <a class="nav-link active" href="/docs">
                  <i class='far fa-file' style='width:40px;font-size:20px;color:grey'></i>
                  Docs <span class="sr-only">(current)</span>
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
          
        </main>
      </div>
    </div>
</body></html>