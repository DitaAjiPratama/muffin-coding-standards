<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validation Pagination Form</title>
    <link rel="stylesheet" href="library/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="library/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="library/fontawesome-free-5.9.0-web/css/all.css">
    <script src="library/fontawesome-free-5.9.0-web/js/all.js"></script>
    <script src="library/jquery/jquery-3.4.1.min.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <div class="card my-2">
            <div class="card-body">

              <form class="" action="" method="post">

                <div id="satu">
                  <h4 class="card-title">Halaman 1</h4>
                  <hr>
                  <label>Halaman 1 Input 1 *</label>
                  <input class="form-control my-2" type="text" id="1_1" name="1_1" placeholder="Halaman 1 Input 1" value="<?= @$_POST['1_1']; ?>" oninput="berubah(this.id, 1)" required>
                  <hr>
                  <label>Halaman 1 Input 2 *</label>
                  <input class="form-control my-2" type="text" id="1_2" name="1_2" placeholder="Halaman 1 Input 2" value="<?= @$_POST['1_2']; ?>" oninput="berubah(this.id, 1)" required>
                  <hr>
                </div>

                <div id="dua">
                  <h5 class="card-title">Halaman 2</h5>
                  <hr>
                  <label>Halaman 2 Input 1 *</label>
                  <input class="form-control my-2" type="text" id="2_1" name="2_1" placeholder="Halaman 2 Input 1" value="<?= @$_POST['2_1']; ?>" oninput="berubah(this.id, 2)" required>
                  <hr>
                  <label>Halaman 2 Input 2</label>
                  <input class="form-control my-2" type="text" id="2_2" name="2_2" placeholder="Halaman 2 Input 2" value="<?= @$_POST['2_2']; ?>" oninput="berubah(this.id, 2)">
                  <hr>
                </div>

                <div id="tiga">
                  <h5 class="card-title">Halaman 3</h5>
                  <hr>
                  <label>Halaman 3 Input 1 *</label>
                  <input class="form-control my-2" type="text" id="3_1" name="3_1" placeholder="Halaman 3 Input 1" value="<?= @$_POST['3_1']; ?>" oninput="berubah(this.id, 3)" required>
                  <hr>
                  <label>Halaman 3 Input 2 *</label>
                  <input class="form-control my-2" type="text" id="3_2" name="3_2" placeholder="Halaman 3 Input 2" value="<?= @$_POST['3_2']; ?>" oninput="berubah(this.id, 3)" required>
                  <hr>
                </div>

                <button class="btn btn-danger" type="button" name="button" id="cancel">
                  <span class="fa fa-times"></span> Cancel
                </button>

                <button class="btn btn-primary" type="button" name="button" id="prev">
                  <span class="fa fa-arrow-left"></span> Prev
                </button>

                <button class="btn btn-primary" type="button" name="button" id="next">
                  <span class="fa fa-arrow-right"></span> Next
                </button>

                <button class="btn btn-success" type="submit" name="submit" id="save">
                  <span class="fa fa-check"></span> Save
                </button>

              </form>

              <script type="text/javascript" src="script.js"></script>

            </div>
          </div>
        </div>
        <!-- End col-md-6 -->
        <div class="col-md-6">
          <div class="card my-2">
            <div class="card-body">
              <h4>Hasil Post</h4>
              <hr>
              <p><b>Halaman 1 Input 1 : </b><?= @$_POST['1_1']; ?></p>
              <p><b>Halaman 1 Input 2 : </b><?= @$_POST['1_2']; ?></p>
              <p><b>Halaman 2 Input 1 : </b><?= @$_POST['2_1']; ?></p>
              <p><b>Halaman 2 Input 2 : </b><?= @$_POST['2_2']; ?></p>
              <p><b>Halaman 3 Input 1 : </b><?= @$_POST['3_1']; ?></p>
              <p><b>Halaman 3 Input 2 : </b><?= @$_POST['3_2']; ?></p>
              <hr>
            </div>
          </div>
        </div>
        <!-- End col-md-6 -->
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </body>
</html>
