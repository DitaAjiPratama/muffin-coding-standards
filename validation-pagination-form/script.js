var x = 1;

halaman(x);
berhenti(x);

$('#prev').click(function(){
  x = x - 1;
  halaman(x);
  berhenti(x);
});

$('#next').click(function(){
  x = x + 1;
  halaman(x);
  berhenti(x);
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

function berhenti(hal) {

  if ( hal == 1 ) {
    if (
      !!document.getElementById("1_1").value &&
      !!document.getElementById("1_2").value
    ) {
      document.getElementById("next").disabled = false;
    }
    else {
      document.getElementById("next").disabled = true;
    }
  }

  if ( hal == 2 ) {
    if (
      !!document.getElementById("2_1").value
    ) {
      document.getElementById("next").disabled = false;
    }
    else {
      document.getElementById("next").disabled = true;
    }
  }

  if ( hal == 3 ) {
    if (
      !!document.getElementById("3_1").value &&
      !!document.getElementById("3_2").value
    ) {
      document.getElementById("save").disabled = false;
    }
    else {
      document.getElementById("save").disabled = true;
    }
  }

}

function berubah(nama_id, hal) {

  if (document.getElementById(nama_id).hasAttribute('required')) {
    if (!!document.getElementById(nama_id).value) {
      document.getElementById(nama_id).classList.add("is-valid");
      document.getElementById(nama_id).classList.remove("is-invalid");
    }
    else {
      document.getElementById(nama_id).classList.remove("is-valid");
      document.getElementById(nama_id).classList.add("is-invalid");
    }
  }

  berhenti(hal);

}
