<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tmplate Web</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Deklarsasi Bawaan Bootstrap -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href=" bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href=" bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">


  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=ource+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

      <!-- Logo Yummyfood -->
      <header class="main-header">
        <a href=" index.php" class="logo" >
          <span class="logo-lg"><img src="dist/img/ybp1.png" align="center" class="float-center"></span>
          <span class="logo-mini"><img src="dist/img/ybp1.png" align="center" class="float-center" width="100%"></span>
        </a>
        
        <!-- besar-kecil menu bagian atas -->
        <nav class="navbar navbar-static-top">
           <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>


      <aside class="main-sidebar">

         <section class="sidebar">
        <!-- bagian search -->
            <form action="#" method="get" class="sidebar-form">
               <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat" ><i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
            </form>
     <!-- Menu -->
           <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
             <a href="#">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
                <span class="pull-right-container">
                </span> 
                  <li class="treeview">
                     <a href="#">
                <span>Berita</span>
                </span>
                     </a>
                 </li>
              </a>
            </li>
        <li>
          <a href="pelanggan.php">
             <span>Data Pelanggan</span>
          </a>
        </li>
         
        <li class="treeview">
          <a href="#">
            <span>Kontak</span>
          </a>
        </li> 
      </section>
    </aside>

  <!-- Form -->
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
         <div class="col-md-12">
           <div class="box box-danger">
             <div class="box-header with-border">
                <h3 class="box-title">Formulir Data Pegawai</h3>
              </div>
              <form role="form-responsive">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <label>Alamat</label>
                   <div class="input-group">
                      <span class="input-group-addon"><i class=" fa fa-user" ></i></span>
                           <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                      </div>
                   </div>

                  <div class="form-group" style="width: 100%">
                    <label>Kota Lahir </label>
                        <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Jakarta</option>
                          <option value="Bogor">Bogor</option>
                          <option value="Depok">Depok</option>
                          <option value="Tangerang">Tangerang</option>
                          <option value="Bekasi">Bekasi</option>
                          <option value="Bandung">Bandung</option>
                          <option value="Semarang">Semarang</option>
                          <option value="Yogyakarta">Yogyakarta</option>
                          <option value="Surabaya">Surabaya</option>
                        </select>
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" >
                  </div>
              </div>

              <div class="form-group">
                <label>Lama Bekerja</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
              </div>

               <div class="form-group">
                <label>Tanggal Cuti</label>
                <div class="input-group">
                    <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                      <span>
                        <i class="fa fa-calendar"></i> Pilih tanggal
                      </span>
                      <i class="fa fa-caret-down"></i>
                    </button>
                  </div>
                </div>



                <div class="form-group">
                  <label>Alamat</label>
                   <div class="input-group">
                  <span class="input-group-addon"><i class=" fa fa-home" style="width: 100%"></i></span>
                  <textarea class="form-control"  placeholder="Alamat"></textarea>
                </div>

                <div class="form-group">
                  <label>Email</label>
                   <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope" style="width: 100%"></i></span>
                      <input type="email" class="form-control" placeholder="Email">
                   </div>
                </div>

                <div class="form-group">
                  <label >No. Handpone</label>
                  <div class="input-group">
                  <span class="input-group-addon"><i class=" fa fa-mobile" style="width: 14px"></i></span>
                  <input type="text" class="form-control"  placeholder="No. Handpone">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div>
              </div>
              

              <div class="box-footer" align="right">
               <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger">Export EXL</button>
                </div>
              </div>
            </form>
          </div>
         <!-- Tabel --> 
        </div>
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Pegawai</h3>
            </div>

            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No.Handpone</th>
                  <th>OPSI</th>
                </tr>
                </thead>
                <tbody>
               
                <tr>
                  <td>M. Haris</td>
                  <td>Graha Pesona</td>
                  <td>haris@gmail.com</td>
                  <td>08571214433</td>
                  <td align="center" width="15%"><button class="btn btn-primary" align="center">Edit</button> <button class="btn btn-primary" align="center">Hapus</button></td>
                </tr>
                 <tr>
                  <td>Mukti Wibowo</td>
                  <td>Jalan Hj. Nipan</td>
                  <td>mukti@gmail.com</td>
                  <td>08571212123</td>
                  <td align="center" width="15%"><button class="btn btn-primary" align="center">Edit</button> <button class="btn btn-primary" align="center">Hapus</button></td>
                </tr>
                </tbody>
                <tfoot>
            
                </tfoot>
              </table>
            </div>
          </div>           
        </div>
      </div>
    </section>
  </div> 
</div>
  <!-- Bagian Footer -->
  <footer align="center">
    <div style="background-color: #F3F3F3;">
      <div style="padding-top: 20px">
        <table align="center" class="menu float-center">
         <tr>
            <th style="padding: 10px"><a href="#"><img src="dist/img/icon-fb.png" alt=""></a></th>
            <th style="padding: 10px"><a href="#"><img src="dist/img/icon-ig.png" alt=""></a></th>
            <th style="padding: 10px"><a href="#"><img src="dist/img/icon-twitter.png" alt=""></a></th>
          </tr>
        </table>
        <p style="margin-top: 10px;">Get in Touch With Us</p>
        <p style="margin-top: -7px;">Phone (021) 1234-5678, Email : <a href="#">cs@yumbox.id</a></p>

        <!-- Got Question -->
        <p class="regular-footer" style="margin-top: -7px;">Got question? <span class="light">Head to our handly <a href="#"> FAQs</a> page</span></p>
      </div>

    <div>
    <strong>Copyright &copy; 2018</strong>
  </div>
  </footer>




<!-- fungsi jQuery 3 -->
<script src=" bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="vendor/select2/dist/js/select2.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src=" bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src=" bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src=" bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src=" bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=" bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="jquery-2.1.4.min.js"></script>
<script src="select2-master/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.select2').select2({
                    placeholder: "Please Select"
                });
            });
        </script>

<script>
  $(function () {

    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  })
</script>

<script>
  $(function () {
    
    $("#kota").select2()

    $('#datepicker').datepicker({
      format:"yyyy-mm-dd",
      autoclose: true
    })

     $('#datepicker1').datepicker({
      format:"yyyy-mm-dd",
      autoclose: true
    })

     $('#datepicker2').datepicker({
      format:"yyyy-mm-dd",
      autoclose: true
    })


    $('#reservation').daterangepicker({
        locale: 
        {format: 'YYYY-MM-DD'}
    })

     $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Hari ini'       : [moment(), moment()],
          'Kemarin'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          '7 hari terakhir' : [moment().subtract(6, 'days'), moment()],
          '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
          'Bulan ini'  : [moment().startOf('month'), moment().endOf('month')],
          'Bulan Kemarin'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment(),
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'))
      }
    )
  })
</script>
</body>
</html>
