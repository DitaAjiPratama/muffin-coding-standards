var x = 1;

$(document).ready(function(){

  halaman(x);

  $('#prev').click(function(){
    x = x - 1;
    halaman(x);
  });

  $('#next').click(function(){
    x = x + 1;
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
