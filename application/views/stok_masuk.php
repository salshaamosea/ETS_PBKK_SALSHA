<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stok Masuk</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/select2/css/select2.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
  <?php $this->load->view('partials/head'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php $this->load->view('includes/nav'); ?>

  <?php $this->load->view('includes/aside'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <center><h1 class="m-3 text-dark">Informasi Stok Masuk</h1></center>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="container">
      <div class="container-fluid">
        <div class="card">
          
          <div class="card-body">
            <table class="table w-100 table-striped tabel-sm" id="stok_masuk">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Waktu Barang Masuk</th>
                  <th>Kode Produk</th>
                  <th>Nama Produk</th>
                  <th>Jumlah Produk</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
            </table>
          </div>
          
        </div>
        <div class="card-header">
            <button class="btn btn-info" data-toggle="modal" data-target="#modal" style="float:right;">Tambahkan Data Barang Masuk</button>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>

<div class="modal fade" id="modal">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title">Menambahkan Data</h5>
    <button class="close" data-dismiss="modal">
      <span>&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form id="form">
      <div class="form-group">
        <label>Waktu Barang Masuk</label>
        <input id="tanggal" type="text" class="form-control" placeholder="Kategori" name="tanggal" required>
      </div>
      <div class="form-group">
        <label>Kode Produk</label>
        <select name="Kode Produk" id="barcode" class="form-control select2" required></select>
      </div>
      <div class="form-group">
        <label>Jumlah</label>
        <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" required>
      </div>
      <div class="form-group">
        <label>Keterangan : </label>
        <select name="keterangan" class="form-check-label" onchange="checkKeterangan(this)">
            <option value="Supplier">Supplier</option>
            <option value="Non-Supplier">Non-Supplier</option>
          
        </select>
      </div>
      <div class="form-group supplier">
        <label>Supplier</label>
        <select name="supplier" class="form-control select2" id="supplier"></select>
      </div>
      <div class="form-group lain d-none">
        <label>Data Selain Supplier</label>
        <input type="text" class="form-control" placeholder="Data">
      </div>
      <center><button class="btn btn-info" type="submit">Tambahkan</button>
      <button class="btn btn-danger" data-dismiss="modal">Batal</button>
      </center>
    </form>
  </div>
</div>
</div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('partials/footer'); ?>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/moment/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/select2/js/select2.min.js') ?>"></script>
<script>
  var readUrl = '<?php echo site_url('stok_masuk/read') ?>';
  var addUrl = '<?php echo site_url('stok_masuk/add') ?>';
  var getBarcodeUrl = '<?php echo site_url('produk/get_barcode') ?>';
  var supplierSearchUrl = '<?php echo site_url('supplier/search') ?>';
</script>
<script src="<?php echo base_url('assets/js/stok_masuk.min.js') ?>"></script>
</body>
</html>
