<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>@yield('page_title','Halaman awal') | Laboratorium Pemrograman FW</title>

        <link rel="stylesheet" type="text/css"
        href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}} ">
        <link rel="stylesheet" type="text/css"
        href="{{asset('component/font-awesome/css/font-awesome.min.css')}} ">
        <style>

           
           html, body {
                background: url("/1.jpg");
                 background-position:center;
                 background-repeat: no-repeat;
                 background-size: cover;

                padding-top: 50px;
                padding-bottom: 70px;
           }

           .starter-template{
            padding: 30px 15px;
            text-align: center;
           }

           .form-horizontal{
            padding: 10px 10px;
           }

           footer{
            padding-top: 15px;
            text-align: right;
           }
           .container-fluid{
            background-color: transparent;
           }
           .navbar-default{
            background-color: transparent;
           }
    </style>
    </head>
      <body>  
      @if(Auth::user()->level == 'admin')
            <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-form ">
                    <button type="button" class="navbar-toggle-collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a href="{{url('/')}}" class="navbar-brand"><strong>admin</strong></a>
                </ul>
              </div>
            </div>
          <td>
          <p class="pull-left visible-xs">
          <div id="navbar" class="collapse navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="current">
                  <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong> Member </strong><span class="caret"></span></a>
                  <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="{{url('member')}}"><strong>Data Member</strong></a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('paket')}}"><strong>Paket</strong></a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('transaksi')}}"><strong>Transaksi</strong></a></li>
                  </ul>
              </li>
            </ul>
          </div>
          </td>

          <td>
          <p class="pull-left visible-xs">
          <div id="navbar" class="collapse navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="current">
                <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong> Supir</strong> <span class="caret"></span></a>
                  <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="{{url('supir')}}"><strong>Data Supir</strong></a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('rute')}}"><strong>Data Rute</strong></a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('jadwal')}}"><strong>Data Jadawal</strong></a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </td>
        <td>
        <p class="pull-left visible-xs">
          <div id="navbar" class="collapse navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="current">
              <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong> Data Lain </strong><span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                  <li><a href="{{url('kelas')}}"><strong>Data Kelas</strong></a></li>
                  <li class="divider"></li>
                  <li><a href="{{url('mobil')}}"><strong> Data Mobil </strong></a></li>
                   <li class="divider"></li>
                  <li><a href="{{url('pengguna')}}"><strong> Data Pengguna </strong></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </td>
        <td>
        <p class="pull-left visible-xs">
        <div id="navbar" class="collapse navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="current">
            <a href="{{ url('logout')}}">Logout</a>
            </li>
          </ul>
        </div>
        </td>
        </div>
        </nav>
        </td>
         <div class="clearfix"></div>
         <div class="container">
             @if(Session::has('informasi'))
                  <div class="alert alert-info">
                      <strong>Informasi :</strong>
                      {{Session::get('informasi')}}
                  </div>
              @endif



              @if (count($errors) >0)
              <div class="alert alert-danger">
                <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                </ul>
              </div>
              @endif



              @yield('container')
         </div>
         <nav class="navbar navbar-default navbar-fixed-bottom">
             <footer class="container">
                 <!   please dont delete this >
                 <a href="http://google.com">
                 <span><i class="fa fa-google" style="color: #1da1f2"></i>@Kara</span></a> <!--/   please dont delete this    --></footer>
         </nav>

         <script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
              <script type="text/javascript">
                  $(function(){
                      $('[data-toggle="tolltip"]').tolltip()
                  });
              </script>

@elseif(Auth::user()->level == 'member')
            <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-form ">
                    <button type="button" class="navbar-toggle-collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a href="{{url('/')}}" class="navbar-brand"><strong>Member</strong></a>
                </ul>
              </div>
            </div>
          <td>
          <p class="pull-left visible-xs">
          <div id="navbar" class="collapse navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="current">
                  <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong> Member </strong><span class="caret"></span></a>
                  <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="{{url('member')}}"><strong>Data Member</strong></a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('paket')}}"><strong>Paket</strong></a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('transaksi')}}"><strong>Transaksi</strong></a></li>
                  </ul>
              </li>
            </ul>
          </div>
          </td>

          <td>
          <p class="pull-left visible-xs">
          <div id="navbar" class="collapse navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="current">
                <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong> Supir</strong> <span class="caret"></span></a>
                  <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="{{url('supir')}}"><strong>Data Supir</strong></a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('rute')}}"><strong>Data Rute</strong></a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('jadwal')}}"><strong>Data Jadawal</strong></a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </td>
        <td>
        <p class="pull-left visible-xs">
          <div id="navbar" class="collapse navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="current">
              <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong> Data Lain </strong><span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                  <li><a href="{{url('kelas')}}"><strong>Data Kelas</strong></a></li>
                  <li class="divider"></li>
                  <li><a href="{{url('mobil')}}"><strong> Data Mobil </strong></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </td>
        <td>
        <p class="pull-left visible-xs">
        <div id="navbar" class="collapse navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="current">
            <a href="{{ url('logout')}}">Logout</a>
            </li>
          </ul>
        </div>
        </td>
        </div>
        </nav>
        </td>
         <div class="clearfix"></div>
         <div class="container">
             @if(Session::has('informasi'))
                  <div class="alert alert-info">
                      <strong>Informasi :</strong>
                      {{Session::get('informasi')}}
                  </div>
              @endif



              @if (count($errors) >0)
              <div class="alert alert-danger">
                <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                </ul>
              </div>
              @endif



              @yield('container')
         </div>
         <nav class="navbar navbar-default navbar-fixed-bottom">
             <footer class="container">
                 <!   please dont delete this >
                 <a href="http://google.com">
                 <span><i class="fa fa-google" style="color: #1da1f2"></i>@Kara</span></a> <!--/   please dont delete this    --></footer>
         </nav>

         <script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
              <script type="text/javascript">
                  $(function(){
                      $('[data-toggle="tolltip"]').tolltip()
                  });
              </script>
@endif    
  </body>
</html>

