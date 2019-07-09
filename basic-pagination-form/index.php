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

<script type="text/javascript">

  //default

  var x = 1;

  $(document).ready(function(){

    halaman(x);

    $('#prev').click(function(){
      x = x-1;
      halaman(x);
    });

    $('#next').click(function(){
      x = x+1;
      halaman(x);
    });

    function halaman(hal) {
      if (hal == 1) {
        document.getElementById('satu'  ).hidden = false;
        document.getElementById('dua'   ).hidden = true;
        document.getElementById('tiga'  ).hidden = true;

        document.getElementById('cancel').hidden = false;
        document.getElementById('prev'  ).hidden = true;
        document.getElementById('next'  ).hidden = false;
        document.getElementById('save'  ).hidden = true;
      }

      if (hal == 2) {
        document.getElementById('satu'  ).hidden = true;
        document.getElementById('dua'   ).hidden = false;
        document.getElementById('tiga'  ).hidden = true;

        document.getElementById('cancel').hidden = true;
        document.getElementById('prev'  ).hidden = false;
        document.getElementById('next'  ).hidden = false;
        document.getElementById('save'  ).hidden = true;
      }

      if (hal == 3) {
        document.getElementById('satu'  ).hidden = true;
        document.getElementById('dua'   ).hidden = true;
        document.getElementById('tiga'  ).hidden = false;

        document.getElementById('cancel').hidden = true;
        document.getElementById('prev'  ).hidden = false;
        document.getElementById('next'  ).hidden = true;
        document.getElementById('save'  ).hidden = false;
      }
    }

  });

</script>
