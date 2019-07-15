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
        <div class="col">

          <div class="card my-2" style="width: 18rem;">
            <div class="card-body">

              <form class="" action="hasil.php" method="post">

                <div id="satu">
                  <?php include "pages/satu.php"; ?>
                </div>

                <div id="dua">
                  <?php include "pages/dua.php"; ?>
                </div>

                <div id="tiga">
                  <?php include "pages/tiga.php"; ?>
                </div>

                <button class="btn btn-outline-danger" type="button" name="button" id="cancel">
                  <span class="fa fa-times"></span> Cancel
                </button>

                <button class="btn btn-outline-primary" type="button" name="button" id="prev">
                  <span class="fa fa-arrow-left"></span> Prev
                </button>

                <button class="btn btn-outline-primary" type="button" name="button" id="next">
                  <span class="fa fa-arrow-right"></span> Next
                </button>

                <button class="btn btn-outline-success" type="submit" name="submit" id="save">
                  <span class="fa fa-check"></span> Save
                </button>

              </form>

              <script type="text/javascript" src="validation.js"></script>
              <script type="text/javascript" src="pagination.js"></script>

            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
