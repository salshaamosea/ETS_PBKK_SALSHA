<!DOCTYPE html>
<html>
<head>
  <title>Grafik</title>
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
                <h1 class="m-0 text-dark">Grafik</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>

        <div class="col-12">
                <h1 class="mt-2 mb-3 h2 text-dark">Grafik</h1>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Produk Terlaris</h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                    <canvas id="produkTerlaris" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%"></canvas>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Stok Produk</h3>
                </div>
                <div class="card-body">
                    <div class="chart" style="height: 250px;max-height: 250px; overflow-y: scroll;">
                    <ul class="list-group" id="stok_produk"></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        
            </div>
        </div>
    </div>
</div>

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