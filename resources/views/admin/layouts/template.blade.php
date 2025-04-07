
  @include('admin.inc.header');
    <div class="sl-mainpanel">
       <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('redirects')}}">Dashboard</a>
        <a class="" href="index.html"></a>
        <span class=""></span>
      </nav>
      <div class="sl-pagebody">
       
           
           @yield('content')
       
    
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
     @include('admin.inc.footer');
  