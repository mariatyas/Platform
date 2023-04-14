var pil = [];
var button = "";
var teksPilihan = "";
var input = "";
var cek = "";
function tampilPilihan() {
  var banyakPilihan = document.getElementById("banyakPilihan").value;
  var pilihan = "";
  button = '<button onclick="resultBtn()">SHOW</button>';

  for (var a = 1; a <= banyakPilihan; a++) {
    pilihan +=
      "<p> Pilihan " +
      a +
      ': <input type="text" id="input' +
      a +
      '" placeholder="Masukkan Teks Pilihan"> </p>';
  }
  pilihan += button;
  document.getElementById("pilihan").innerHTML = pilihan;
}
function resultBtn() {
  var banyakPilihan = document.getElementById("banyakPilihan").value;
  var teksPil = "";

  button = '<button onclick="result()">YA</button>';

  for (var i = 1; i <= banyakPilihan; i++) {
    pil[i - 1] = document.getElementById("input" + i).value;
    input += pil[i - 1] + " , ";
    teksPil +=
      '<p><input type="checkbox" name="pilihan" value="' +
      pil[i - 1] +
      '"> ' +
      pil[i - 1] +
      "</p>";
  }
  teksPil += button;
  document.getElementById("checked").innerHTML = teksPil;
}

function result() {
  var namaDepan = document.getElementById("namadepan").value;
  var namaBelakang = document.getElementById("namabelakang").value;
  var email = document.getElementById("email").value;
  banyakPilihan = document.getElementById("banyakPilihan").value;
  let pil = [];
  var checkk = document.getElementsByName("pilihan");
  for (let a = 0; a < radio.length; a++) {
    if (checkk[a].checked) {
      teskPlhn = checkk[a].value;
      pil = teskPlhn;
    }
  }
  var hasil =
    "Hallo, nama saya " +
    namaDepan +
    "" +
    namaBelakang +
    ", dengan email " +
    email +
    ". Saya mempunyai " +
    banyakPilihan +
    " pilihan.";
  document.getElementById("hasil").innerHTML = hasil;
}
