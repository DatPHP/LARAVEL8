
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>All Laravel - @yield('title')</title>

<link href="{{ asset('css/dashboard_home.css') }}" rel="stylesheet" type="text/css" >
<!------ Include the above in your HEAD tag ---------->
        <!--===================   Header   =======================-->
      <header class="header">
         @include('admin.layouts.top_navbar')
      </header>
      <div class="main">
         <div class="row" id="allocate_dashboard"> 
            <div class="col-2">
               <!------ left menu ------> 

               @include('admin.layouts.left_navbar')

            </div>
            <div class="col-10">
                @yield('content')
            </div>
          </div> 
 <script type="text/javascript" src="{{ URL::asset('js/dashboard_home.js') }}"></script>
  