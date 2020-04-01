<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
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
        <div class="col-lg-12">
          <div class="small-box bg-light">
            <h1 class="m-0 text-dark text-center">INFORMASI PENJUALAN</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-6">
            <div class="small-box bg-dark">
              <div class="card-body">
                <center><h4>Transaksi Hari Ini : </h4></center>
                <center><h3 id="transaksi_hari">0</h3></center>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="<?php echo site_url('laporan_penjualan') ?>" class="small-box-footer">
                Info Selanjutnya <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="small-box bg-light">
              <div class="inner">
                <center><h4>Jumlah Barang Masuk : </h4></center>
                <center><h3 id="stok_hari">0</h3></center>
              </div>
              <div class="icon">
                <i class="fas fa-archive"></i>
              </div>
              <a href="<?php echo site_url('laporan_stok_masuk') ?>" class="small-box-footer">
                Info Selanjutnya <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-12 col-sm-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <center><h4>Jumlah Barang Terjual :</h4></center>
                <center><h3 id="transaksi_terakhir">0</h3></center>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill"></i>
              </div>
              <a href="<?php echo site_url('laporan_penjualan') ?>" class="small-box-footer">
                Info Selanjutnya <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          

          <div class="col-12">
            <h1 class="mt-1 mb-3 h2 text-dark text-center">INFORMASI PRODUK</h1>
          </div>
            <!-- <div class="col-md-6">
              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">Produk Terlaris</h3>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="produkTerlaris" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%"></canvas>
                  </div>
                </div>
              </div>
            </div> -->
          <div class="col-12">
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Stok Barang</h3>
              </div>
              <div class="card-body">
                <div class="chart" style="height: 500px;max-height: 250px; overflow-y: scroll;">
                  <ul class="list-group" id="stok_produk"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<?php $this->load->view('includes/footer'); ?>

<?php $this->load->view('partials/footer'); ?>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/chart.js/Chart.min.js') ?>"></script>
<script>
  var transaksi_hariUrl = '<?php echo site_url('transaksi/transaksi_hari') ?>';
  var transaksi_terakhirUrl = '<?php echo site_url('transaksi/transaksi_terakhir') ?>';
  var stok_hariUrl = '<?php echo site_url('stok_masuk/stok_hari') ?>';
  var produk_terlarisUrl = '<?php echo site_url('produk/produk_terlaris') ?>';
  var data_stokUrl = '<?php echo site_url('produk/data_stok') ?>';
  var penjualan_bulanUrl = '<?php echo site_url('transaksi/penjualan_bulan') ?>';
</script>
<script src="<?php echo base_url('assets/js/unminify/dashboard.js') ?>"></script>
</body>
</html>
