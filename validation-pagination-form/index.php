<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validation Pagination Form</title>
    <link rel="stylesheet" href="library/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="library/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col">

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

            <button type="button" name="button" id="cancel">
              Cancel
            </button>

            <button type="button" name="button" id="prev">
              Prev
            </button>

            <button type="button" name="button" id="next">
              Next
            </button>

            <button type="submit" name="submit" id="save">
              Save
            </button>

          </form>

          <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

          <script type="text/javascript" src="pagination.js"></script>

        </div>
      </div>
    </div>

  </body>
</html>
