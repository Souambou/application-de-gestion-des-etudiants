<!DOCTYPE html>

<html lang="fr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>gestion des étudiants</title>
  <meta name="theme-name" content="mono" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="{{asset('css/style.css.map') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css.map') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/css/all.css') }}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{asset('font/css/style1.css') }}">
  <link href="{{asset('plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
  
  <link href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/daterangepicker/daterangepicker')}}.css" rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  <link href="{{asset('plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  
  <link id="main-css-href" rel="stylesheet" href="{{asset('css/style1.css')}}" />
  <link href="images/favicon.png" rel="shortcut icon" />

  <script src="{{asset('plugins/nprogress/nprogress.js')}}"></script>
</head>
  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div id="toaster"></div>
   
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="#">
                <span class="brand-name">Gest Students</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                
                  <li
                   class="active"
                   >
                    <a class="sidenav-item-link" href="index.html">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </li>
                
                
                  <li
                   >
                 
                  <li
                   >
                    <a class="sidenav-item-link" href="{{route('index')}}">
                      <i class="fas fa-users"></i>
                      <span class="nav-text">ETUDIANTS</span>
                    </a>
                  </li>
                
                  <li
                   >
                    <a class="sidenav-item-link" href="{{route('matieres.index')}}">
                      <i class="fas fa-book"></i>
                      <span class="nav-text">MATIERES</span>
                    </a>
                  </li>
                    <li
                   >
                    <a class="sidenav-item-link" href="{{route('notes.index')}}">
                      <i class="fas fa-book"></i>
                      <span class="nav-text">NOTES</span>
                    </a>
                  </li>
               
              
                  <li  class="has-sub" >
                    
                    <ul  class="collapse"  id="customization"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                          
                      </div>
                    </ul>
                  </li>
                
              </ul>

            </div>

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <ul class="d-flex">
                  <li>
                    <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
                  <li>
                    <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>

      
         <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div><br />
            @endif 
            @if(session()->get('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}  
              </div><br />
            @endif
      <div class="page-wrapper">

        
          <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>

              <span class="page-title">dashboard</span>

              <div class="navbar-right ">

                <!-- search form -->
                <div class="search-form">
                  <form action="index.html" method="get">
                    <div class="input-group input-group-sm" id="input-group-search">
                      <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                      <div class="input-group-append">
                        <button class="btn" type="button">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class="dropdown-menu dropdown-menu-search">

                  
                </div>

                <ul class="nav navbar-nav">
                  <!-- Offcanvas -->
                  <li class="custom-dropdown">
                    <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
                      <i class="mdi mdi-contacts icon"></i>
                    </a>
                  </li>
                  <li class="custom-dropdown">
                    <button class="notify-toggler custom-dropdown-toggler">
                      
                    </button>
                    <div class="dropdown-notify">

                      

                      <div class="" data-simplebar style="height: 325px;">
                        <div class="tab-content" id="myTabContent">
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                     <span>Admin</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a class="dropdown-link-item" href="user-profile.html">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text text-bolder">Mon profile</span>
                        </a>
                      </li>
                      <li>
                       
                      </li>
                      

                      <li class="dropdown-footer">
                        <a class="dropdown-link-item text-bolder" href="{{route('login')}}"> <i class="mdi mdi-logout"></i>Se déconnecter </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>
               <marquee behavior="alternate" direction="" class="pt-3 text-lead text-lowercase text-danger"><h3>Gest students, application de gestion des étudiants</h3></marquee>
        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content">                
                  <!-- Top Statistics -->
                  <div class="row">
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-default card-mini">
                        <div class="card-header">
                          <h2>Etudiants</h2><br>
                           <span class="mr-1 pt-5 mr-5 text-lead">130</span> |
                        
                        </div>
                        
                        <div class="card-body">
                          <div class="chart-wrapper">
                            <div>
                              <div id="spline-area-1"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-default card-mini">
                        <div class="card-header">
                          <h3>Enseignants</h3>
                          <div class="dropdown">
                          
                          </div>
                          <div class="sub-title">
                            <span class="mr-1">30</span> |
                           
                            <i class="mdi mdi-arrow-down-bold text-danger"></i>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="chart-wrapper">
                            <div>
                              <div id="spline-area-2"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-default card-mini">
                        <div class="card-header">
                          <h3>Matières</h3>
                          
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                          </div>
                          <div class="sub-title">
                            <span class="mr-1">23</span> |
                        
                            <i class="mdi mdi-arrow-down-bold text-danger"></i>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="chart-wrapper">
                            <div>
                              <div id="spline-area-3"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-default card-mini">
                        <div class="card-header">
                          <h3 class="text-bolder">Meilleur Etudiant</h3>
                          <span class="mr-1">KOLOWOLE Eric</span> |
                     
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                          </div>
                          <div class="sub-title">
                            
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="chart-wrapper">
                            <div>
                              <div id="spline-area-4"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="row bg-white">
                   <h2 class="text-uppercase text-primary text-underline   pt-2 pb-3 text-center">Statistique</h2>
                     
                  <table class="table table-striped">
                    <thead>
                          <tr>
                              <th scope="col">ID NOTE</th>
                              <th scope="col">NOM ET PRENOMS</th>
                              <th scope="col">NOMS DE LA MATIRERE</th>
                              <th scope="col">NOTES</th>
                              
                            
                          </tr>
                    </thead>
                  <tbody>
                          @foreach($meilleursNotes as $key => $val)
                              <tr>
                                  <td>{{$key+1}}</td>
                                  <td>{{$val->nom.' '.$val->prenom}}</td>
                                  <td>{{$val->matieres}}</td>
                                  <td>{{$val->note}}</td>
                              </tr>
                          @endforeach
                  </tbody>
                </table>

                </div>
                <div class="row">
                  <div class="col-xl-8">
                    
                    <div class="card card-default">
                      <div class="card-header">
                        <h2>Income And Expenses</h2>
                        <div class="dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-display="static">
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>

                      </div>
                      <div class="card-body">
                        <div class="chart-wrapper">
                          <div id="mixed-chart-1"></div>
                        </div>
                      </div>

                    </div>


                  </div>
                  <div class="col-xl-4">
                    <!-- Current Users  -->
                    <div class="card card-default">
                      <div class="card-header">
                        <h2>Current Users</h2>
                        <span>Realtime</span>
                      </div>
                      <div class="card-body">
                        <div id="barchartlg2"></div>
                      </div>
                      <div class="card-footer bg-white py-4">
                        <a href="#" class="text-uppercase">Current Users Overview</a>
                      </div>
                    </div>
                  </div>
                </div>

          </div>
        </div>
      </div>
         </div>
    </div>
    
                    <script src="plugins/jquery/jquery.min.js"></script>
                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="plugins/simplebar/simplebar.min.js"></script>
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                    
                    
                    <script src="plugins/apexcharts/apexcharts.js"></script>
                    
                    
                    
                    <script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
                    
                    
                    
                    <script src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
                    <script src="plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
                    <script src="plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
                    
                    
                    
                    <script src="plugins/daterangepicker/moment.min.js"></script>
                    <script src="plugins/daterangepicker/daterangepicker.js"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>
                    
                    
                    
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                    
                    
                    
                    <script src="{{asset('plugins/toaster/toastr.min.js')}}"></script>

                    
                    
                    <script src="{{asset('js/mono.js')}}"></script>
                    <script src="{{asset('js/chart.js')}}"></script>
                    <script src="{{asset('js/map.js')}}"></script>
                    <script src="{{asset('js/custom.js')}}"></script>

                    


                    <!--  -->


  </body>
</html>
