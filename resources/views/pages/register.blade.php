<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
<link href="{{ url('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ url('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card mx-auto mt-4 mb-4" style="width: 700px;font-size:15px">
      <h1 class="text-center text-dark p-2">Daftar Penduduk <br>Website Desa Ketanonageng</h1>
      <table class="table table-borderless mr-3">
          <thead>
          </thead>
          <tbody>
              <form action="{{ route('register') }}" method="post">
                  @csrf
            <tr>
              <td>Nama</td>
              <td>
                  <input type="text" class="form-control" name="name" >
              </td>
            </tr>
            <tr>
              <td>NIK</td>
              <td>
                  <input type="text" class="form-control" name="nik">
              </td>
            </tr>
            <tr>
              <td>NO KK</td>
              <td>
                  <input type="text" class="form-control" name="no_kk">
              </td>
            </tr>
            <td>Email</td>
            <td>
                <input type="email" class="form-control" name="email">
            </td>
          </tr>
            <tr>
              <td>No. Akta Kelahiran</td>
              <td>
                  <input type="text" class="form-control" name="no_aktalahir" placeholder="Boleh dikosongkan...">
              </td>
            </tr>
            <tr>
              <td>No. Akta Kematian</td>
              <td>
                  <input type="text" class="form-control" name="no_aktakematian" placeholder="Boleh dikosongkan...">
              </td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>
                  <input type="date" class="form-control" name="tgl_lahir">
              </td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>
                  <input type="text" class="form-control" name="tmpt_lahir">
              </td>
            </tr>
            <tr>
              <td>Agama</td>
              <td>
                  <input type="text" class="form-control" name="agama">
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>
                  <textarea type="text" class="form-control" name="alamat"></textarea>
              </td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>
                  <select name="jns_kelamin" class="form-control" id="">
                      <option value="">Silahkan Pilih</option>
                      <option value="Pria">Pria</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                  
              </td>
            </tr>
            <tr>
              <td>Jenis Pekerjaan</td>
              <td>
                  <input type="text" class="form-control" name="jns_pekerjaan">
              </td>
            </tr>
            <tr>
              <td>Status Kawin</td>
              <td>
                  <select name="status_kawin" class="form-control" id="">
                      <option value="">Silahkan Pilih</option>
                      <option value="Menikah">Menikah</option>
                      <option value="Belum Menikah">Belum Menikah</option>
                  </select>
              </td>
            </tr>
            <tr>
              <td>Status Migrasi</td>
              <td>
                <select name="status_migrasi" class="form-control" id="">
                  <option value="Tetap">Tetap</option>
                  <option value="Migrasi">Migrasi</option>
              </select>
              <p class="text-muted" style="font-size: 12px">*Jika NIK Anda merupakan Warga Desa Ketanonageng  
                maka stasusnya adalah tetap.</p>
              </td>
            </tr>
          </tbody>
        </table>
        <button type="submit" class="btn btn-primary mx-auto mb-4" style="width: 50%">Simpan</button>
        <div class="text-center">
          <a class="text-md" href="forgot-password.html">Forgot Password?</a>
        </div>
        <div class="text-center mb-4">
          <a class="text-md" href="{{ route('login') }}">Already have an account? Login!</a>
        </div>
      </form>
      </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('template/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('template/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
