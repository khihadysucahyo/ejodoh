<!-- Author: Khihady Sucahyo -->
<?php
  include 'lib/koneksi.php';
  include 'assets/php/destroy.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Public</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css">
    <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style media="screen">
    body {display: flex;min-height: 100vh;flex-direction: column;}
    main {flex: 1 0 auto;}
    input:not(.exc){text-align: center;}
    </style>
  </head>
  <body style="background-color: rgb(176, 202, 0);">
    <div class="row">
      <div class="col s12">
        <img src="assets/img/bismillah.png" width="200">
      </div>
    </div>

    <main class="container valign-wrapper">
      <div class="row"> <!-- actually the issue is here - row is not expanded to cover 100% width -->
          <div class="col s12">
            <div class="card-panel center-align teal">
              <h2 style="color: rgb(176, 202, 0);">e-Jodoh</h2>
              <span class="white-text">
                e-Jodoh adalah aplikasi yang diperuntukkan untuk membantu user dalam melakukan pemeringkatan
                terhadap gebetan-gebetan user sehingga memudahkan dalam pengambilan keputusan.
              </span>
              <form class="form-horizontal" role="form" method="post" action="input_data.php">
              <input required type="text" class="validate" name="jml_gebetan" placeholder="Masukkan Jumlah Gebetan Anda" value="">
              <div class="row">
                  <div class="input-field offset-s12">
                    <button  type="submit" class="btn btn-primary right">
                      Proses
                    </button>
                  </div>
              </div>
            </form>
            </div>
          </div>
      </div>
    </main>

  </body>
</html>
<!DOCTYPE html>
