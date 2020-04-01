<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <?php $this->load->view('partials/head'); ?>
</head>
<body class="hold-transition login-page">

<div class="jumbotron text-center">
  <h1>Selamat Datang di Mahasiswa Store</h1>
  <p>Menyediakan semua kebutuhan mahasiswa dengan harga TERJANGKAU!</p> 
</div>

  <div class="login-form">
    <!-- <div class="login-logo">LOGIN PETUGAS</div> -->
    <div class="card bg-secondary text-white">
      <div class="card-body login-card-body">
        <p class="login-box-msg">LOGIN</p>
        <div class="alert alert-danger d-none"></div>
        <form>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> Saya setuju semua transaksi pada akun ini menjadi tanggung jawab saya.
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div>
          <div class="form-group">
            <button class="btn btn-block btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php $this->load->view('partials/footer'); ?>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
<script>
  $('form').validate({
    errorElement: 'span',
    errorPlacement: (error, element) => {
      error.addClass('invalid-feedback')
      element.closest('.input-group').append(error)
    },
    submitHandler: () => {
      $.ajax({
        url: '<?php echo site_url('login') ?>',
        type: 'post',
        dataType: 'json',
        data: $('form').serialize(),
        success: res => {
          if (res == 'tidakada') {
            $('.alert').html('Username atau Password Salah')
            $('.alert').removeClass('d-none')
          } else if (res == 'passwordsalah') {
            $('.alert').html('Username atau Password Salah')
            $('.alert').removeClass('d-none')
          } else {
            $('.alert').html('Berhasil Login!')
            $('.alert').addClass('alert-success')
            $('.alert').removeClass('d-none alert-danger')
            setTimeout(function() {
              window.location.reload()
            }, 1000);
          }
        },
        error: err => {
          console.log(err);
        }
      })
    }
  })
</script>
</body>
</html>
