<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transisi Test</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="{{ asset('adminlte/img.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminlte/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/select2/dist/css/select2.min.css')}}">
    @stack('styles')
     <!-- bootstrap wysihtml5 - text editor -->
    {{-- <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}"> --}}
    </head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
  <x-navbar></x-navbar>
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      {{-- <div class="user-panel">
        <div class="image">
          <img src="{{ asset('images/') }}">
        </div>
      </div> --}}
    <x-sidebar></x-sidebar>

  </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        @yield('title')
      </h1>      
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">@yield('subtitle')</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          @yield('content')
        </div>
      </div>
    </section>    
  </div>
 <x-footer></x-footer>
</div>

<script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{ asset('adminlte/js/adminlte.min.js')}}"></script>
<script src="{{ asset('adminlte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.2.0/vanilla-masker.min.js" integrity="sha512-RbMQw6xKGymv6bRMO4z5OxHBzzem7BPEQX7nTJC9G08A70gXdUka76Rvgey83MsSXrIEJddog0vxUKN6iTce2Q==" crossorigin="anonymous"></script>
<script>
  window.formatRupiah = function (angka) {
    if(angka) {
      var number_string = angka.toString().replace(/[^,\d]/g, '').toString(),
      split   		= number_string.split(','),
      sisa     		= split[0].length % 3,
      rupiah     		= split[0].substr(0, sisa),
      ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }

      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return (rupiah ? '' + rupiah : '');
    }
    return '';
  }
  
</script>

@stack('scripts')


<!-- Bootstrap WYSIHTML5 -->
{{-- <script src="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script> --}}
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })

  $(document).ready(function () {
    $('.sidebar-menu').tree();
      const currencyInputs = document.getElementsByClassName('currency-input');
      if(currencyInputs) {
        VMasker(currencyInputs).maskMoney({
          precision: 0,
          separator: ',',
          delimiter: '.',
          unit: 'Rp. ',
          zeroCents: true
        });

        $("form").each(function() {
          $(this).submit(function(e) { 
            VMasker(currencyInputs).unMask();
          });
        });
      }
  })
</script>

{{-- <script>
  $(function () {
    $('.textarea').wysihtml5()
  })
</script> --}}
</body>
</html>
