<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pinjam Ruangan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?= base_url(); ?>css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
  <body>
    
    <form class="row g-3">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form class="form-example" action="" method="post">
              <h1>Pinjam Ruangan</h1><hr>
              
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Username</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-10">
            <label for="inputState" class="form-label">Ruangan</label>
            <select id="inputState" class="form-select">
              <option selected>R1.LK - Ruangan 1 Lab Komputer</option>
              <option selected>R1.LK - Ruangan 2 Lab Komputer</option>
              <option selected>R1.LK - Ruangan 3 Lab Komputer</option>
              <option>...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Jam Mulai</label>
            <select id="inputState" class="form-select">
              <option selected>09.00</option>
              <option selected>10.00</option>
              <option selected>11.00</option>
              <option selected>12.00</option>
              <option selected>13.00</option>
              <option selected>14.00</option>
              <option selected>15.00</option>
              <option selected>18.00</option>
              <option selected>19.00</option>
              <option>...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Jam Selesai</label>
            <select id="inputState" class="form-select">
              <option selected>10.00</option>
              <option selected>11.00</option>
              <option selected>12.00</option>
              <option selected>13.00</option>
              <option selected>14.00</option>
              <option selected>15.00</option>
              <option selected>18.00</option>
              <option selected>19.00</option>
              <option selected>20.00</option>
              <option>...</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Tanggal</label>
            <div class="card-body bg-white text-black"></i></div>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-10">
            <label for="inputState" class="form-label">Keterangan Peminjaman</label>
            <select id="inputState" class="form-select">
              <option selected>Praktikum</option>
              <option selected>Seminar</option>
              <option>...</option>
            </select>
        </div><br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-outline-primary" type="submit" href="dashboard">Tutup</a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="form">Pinjam</a>
          </div><br>
        
    <!-- Bootstrap Bundle with Popper -->
    <script
      src="<?= base_url(); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>