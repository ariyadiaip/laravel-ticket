@extends('layouts.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Palmwood Bootstrap 4 Dashboard - UICardio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Including UICardio fonts -->
    <style> 
    @font-face {
      font-family: "uicardio-font";
      src: url("./static/fonts/uicardio-light") format('woff');
      font-weight: 400;
      font-display: fallback;
    }

    @font-face {
      font-family: "uicardio-font";
      src: url("./static/fonts/uicardio-regular") format('woff');
      font-weight: 500;
      font-display: fallback;
    }

    @font-face {
      font-family: "uicardio-font";
      src: url("./static/fonts/uicardio-bold") format('woff');
      font-weight: 700;
      font-display: fallback;
    }
    </style>
    <!-- Compiled CSS of Pinewood Dashboard -->
    <!-- Include it if you dont want to make any changes in the design -->
    <!-- Else you can make changes in SCSS files and use them -->
    <link rel="stylesheet" href="./static/css/style.css">
    <!-- Including icons from Ion Icons -->
    <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="./favicon.png" type="image/x-icon">
    <!-- Social Meta tags -->
    <meta name="keywords" content="dashboard, bootstrap 4, bootstarp, pinewood, pinewood dashboard, pinewood bootstrap 4, bootstrap 4 admin panel, bootstrap 4 system, html css template, uicardio, responsive dashboard, responsive bootstrap 4 template">
    <meta name="description" content="">
    <!-- Markup for google+ -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@uicardio">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content="@uicardio">
    <meta name="twitter:image" content="">
    <!-- Open Graph Data  -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demo.uicard.io/palmwood-bootstrap-4-admin-dashboard/" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="UICardio" />
    @section('css')
    @show
  </head>
  <body>
    
    
<div class="main-panel">
    
    <div class="header-image" style="background-image: url(./static/img/header-background.jpg);"></div>
    <nav class="navbar navbar-dark navbar-expand sticky-top">
    
    <a href="#0" id="sidebarToggle" class="sidebarToggle d-sm-none nav-link pl-0 text-white">
      
      <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="40">
          <path
                class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
          <path
                class="line middle" d="m 30,50 h 40" />
          <path
                class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
        </svg>
    </a>
    
    <a href="#0" id="navSearchButton" class="d-sm-none"><i class="icon ion-md-search"></i></a>
    <a class="navbar-brand h4" href="#">Tables</a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-md-block pt-2 mr-3">
          <input class="searchBar form-control border-0" type="text" class="form-control border-0 search" placeholder="Search">
        </li>
        <li class="nav-item">
          <div class="dropdown ">
            <a href="" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon ion-md-notifications"></i> 
            </a>
            <div style="width:400px"  class="dropdown-menu pb-0 dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <h6 class="dropdown-header px-3 pb-3">
                <a class="float-right" href="#0">Mark all Read!</a>
                You have 13 notifications!
              </h6>
                <a class="list-group-item border-0 list-group-item-action py-2" href="#">
                  <div class="row">
                    <div class="col-2">
                      <img width="40px" alt="Image placeholder" src="./static/img/avatars/girl.jpg" class="avatar rounded-circle">
                    </div>
                  <div class="col-10">
                    <div class="text-sm text-secondary mb-0 d-block"><strong>Noelle East</strong> Let's meet at Starbucks at 11:30. Wdyt?</div>
                      <small class="text-muted">Just Now</small>
                    </div>      
                  </div>
                </a>
                <a class="list-group-item border-0 list-group-item-action py-2" href="#">
                  <div class="row">
                    <div class="col-2">
                      <img width="40px" alt="Image placeholder" src="./static/img/avatars/man.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col-10">
                      <div class="text-sm text-secondary mb-0 d-block"><strong>Mark</strong> just commented on one of your post
                      </div>
                      <small class="text-muted">2 hrs ago</small>
                    </div>      
                  </div>
                </a>
                <a href="#0" class="dropdown-item text-center border-top text-primary p-3 bg-light">View All Notifications</a>
              </div>
            </div>
        </li>
        <li class="nav-item">
         
            <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img width="40px" class="rounded-circle" src="./static/img/avatars/girl.jpg" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
        </li>
      </ul>
  </nav><div class="content">
<div class="card">
  <div class="card-header">
    <button class="float-right btn btn-success">Donwload All</button>
    <h3>Simple Table</h3>
    <p class="m-0 text-muted">This is a sample table</p>
  </div>
  <div class="card-body p-0">
      <table class="table table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Name <br> <small class="text-muted">Email</small></th>
            <th>Phone</th>
            <th>Created</th>
            <th>Active</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>John Doe
              <br><small class="text-muted">john@example.com</small>
            </td>
            <td>+1 (454) 676 9265</td>
            <td>26 Nov, 2018</td>
            <td><span class="text-success">
                <input checked="" type="checkbox" id="checkOne" class="check">
                <label for="checkOne" class="checkToggle">checkbox</label>
            </span></td>
            <td>
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Actions
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Mary Moe
                <br><small class="text-muted">mary@example.com</small>
            </td>
            <td>+1 (653) 565 8989</td>
            <td>13 Aug, 2018</td>
            <td>
              <input type="checkbox" id="checkTwo" class="check">
              <label for="checkTwo" class="checkToggle">checkbox</label>
            </td>
            <td>
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Actions
                </a>
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>July Dooley
                <br><small class="text-muted">july@example.com</small>
            </td>
            <td>+1 (231) 767 7429</td>
            <td>01 Jan, 2019</td>
            <td><span class="text-success">
                <input checked="" type="checkbox" id="checkThree" class="check">
                <label for="checkThree" class="checkToggle">checkbox</label>
            </span></td>
            <td>
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Actions
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
              <td>4</td>
              <td>Rohit Rana
                  <br><small class="text-muted">rohit@example.com</small>
              </td>
              <td>+1 (736) 537 0283</td>
              <td>03 Feb, 2018</td>
              <td><span class="text-success">
                  <input type="checkbox" id="checkFour" class="check">
                  <label for="checkFour" class="checkToggle">checkbox</label>
              </span></td>
              <td>
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actions
                  </a>
                
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Oliva
                    <br><small class="text-muted">oliva@example.com</small>
                </td>
                <td>+1 (526) 874 9864</td>
                <td>04 Mar, 2018</td>
                <td><span class="text-success">
                    <input checked="" type="checkbox" id="checkFive" class="check">
                    <label for="checkFive" class="checkToggle">checkbox</label>
                </span></td>
                <td>
                  <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Actions
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
          </tbody>
          </table>
  </div>
</div></div>
    <div class="row no-gutters m-3  align-items-center justify-content-lg-between">
  <div class="col-lg-6">
    <div class="copyright text-center text-lg-left text-muted">
      © 2019 UICardio
    </div>
  </div>
  <div class="col-lg-6">
    <div class="nav nav-footer justify-content-center justify-content-lg-end">
      <a class="ml-3" target="_blank" href="https://uicard.io/?utm_source=pinewood-bootstrap-4-dashboard">UICardio</a>
      <a class="ml-3" target="_blank" href="https://uicard.io/blog/?utm_source=pinewood-bootstrap-4-dashboard">Blog</a>
      <a class="ml-3" target="_blank" href="https://uicard.io/licence/?utm_source=pinewood-bootstrap-4-dashboard">Licence</a>
      <a class="ml-3" target="_blank" href="https://uicard.io/contact/?utm_source=pinewood-bootstrap-4-dashboard">Contact</a>
    </div>
  </div>
</div>
</div>
</div><!-- Including scripts required for bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <!-- Including ChartJs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <!-- Including our main script -->
  <script src="./static/js/scripts.js"></script>
  <script>
    
  var canvas = document.getElementById("canvas");

  
  var multiply = {
    beforeDatasetsDraw: function(chart, options, el) {
      chart.ctx.globalCompositeOperation = 'overlay';
      
    },
    afterDatasetsDraw: function(chart, options) {
      chart.ctx.globalCompositeOperation = 'source-over';
    },
  };

    
    var gradientThisWeek = canvas.getContext('2d').createLinearGradient(0, 0, 0, 180);
    gradientThisWeek.addColorStop(0, '#f8d0a3');
    gradientThisWeek.addColorStop(1, '#f8d0a3');

    
    var gradientPrevWeek = canvas.getContext('2d').createLinearGradient(0, 0, 0, 180);
    gradientPrevWeek.addColorStop(0, '#ed7170');
    gradientPrevWeek.addColorStop(1, '#ed7170');


    var config = {
        type: 'line',
        data: {
            labels: ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN", "Yo", "Yo", "Yo"],
            datasets: [
              {
                  label: 'This week',
                  data: [24, 18, 16, 18, 24, 36, 28, 29,23,24],
                  backgroundColor: gradientThisWeek,
                  borderColor: 'transparent',
                  pointBackgroundColor: '#FFFFFF',
                  pointBorderColor: '#FFFFFF',
                  lineTension: 0.40,
              },
              {
                  label: 'Previous week',
                  data: [20, 22, 30, 22, 18, 22, 30, 49,43,14],
                  backgroundColor: gradientPrevWeek,
                  borderColor: 'transparent',
                  pointBackgroundColor: '#FFFFFF',
                  pointBorderColor: '#FFFFFF',
                  lineTension: 0.40,
              }
            ]
        },
        options: {
            elements: { 
              point: {
                radius: 2,
                hitRadius: 5, 
                hoverRadius: 5 
              } 
            },
            legend: {
                display: false,
            },
            scales: {
                xAxes: [{
                    display: false,
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                      beginAtZero: true,
                    },
                }]
            }
        },
        plugins: [multiply],
    };

    window.chart = new Chart(canvas, config);

    new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#4e817a", "#f7d6a3"],
        data: [2478,5267]
      }]
    },
    options: {
      layout: {
        padding: {
          top: 0
        }
      },  
      legend: {
        display: true,
        position: 'bottom'
      },  
      title: {
        display: false,
        text: ''
      }
    }
});
  </script>
  </body>
</html>