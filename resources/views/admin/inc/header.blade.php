
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <title>Book Your Consultation Online</title>

   
    <link rel="stylesheet" href=" https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css">


    <!-- vendor css -->
    <link href="{{asset('backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/medium-editor/medium-editor.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/medium-editor/default.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/starlight.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/header.css')}}">
    
    

  </head>

  <body>

  <!-- ########## START: LEFT PANEL ########## -->

    <div class="sl-logo pl-5"><span class=" logged-name text-light mr-3">Novena heath Care</span></div>
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">
        <a href="{{route('redirects')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
         
         <?php
        $role = Auth::user()->role;
        if($role == '1'){
        ?>

         <a href="{{route('homePage')}}" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Visite Site</span>
          </div>
        </a>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('category.create')}}" class="nav-link">Add Category</a></li>
          <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link">All Category</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Doctor</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('doctor.create')}}" class="nav-link">Add New Doctor</a></li>
          <li class="nav-item"><a href="{{route('doctor.index')}}" class="nav-link">All Doctor</a></li>
        </ul>


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Department</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('department.create')}}" class="nav-link">Add New Department</a></li>
          <li class="nav-item"><a href="{{route('department.index')}}" class="nav-link">All Department</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Blog Post</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('post.create')}}" class="nav-link">Add New Blog</a></li>
          <li class="nav-item"><a href="{{route('post.index')}}" class="nav-link">All Blog</a></li>
        </ul>


        <a href="{{route('appointment.index')}}" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Patient Details</span>
          </div>
        </a>
          
      <?php } ?>

      </div><!-- sl-sideleft-menu -->
      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

      <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::user()->name }}</span>
              
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200 bg-dark">
              <ul class="list-unstyled user-profile-nav">
                
                <li><a href="{{route('profile.edit')}}"><i class="icon ion-ios-person-outline"></i> 
                  {{ __('Profile') }}
                </a></li>
                
                
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                <li>
                  @csrf
                  <a href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();"><i class="icon ion-power"></i> Sign Out</a>
                </li>
                </form>

              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
  <!-- ########## END: HEAD PANEL ########## -->


