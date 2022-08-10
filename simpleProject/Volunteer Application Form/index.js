var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");
var form3 = document.getElementById("form3");
var form4 = document.getElementById("form4");

var Next1 = document.getElementById("Next1");
var Next2 = document.getElementById("Next2");
var Next3 = document.getElementById("Next3");
var Back1 = document.getElementById("Back1");
var Back2 = document.getElementById("Back2");
var Back3 = document.getElementById("Back3");

Next1.onclick = function () {
  form1.style.left = "-850px";
  form2.style.left = "80px";
  progress.style.width = "400px";
};
Back1.onclick = function () {
  form1.style.left = "80px";
  form2.style.left = "850px";
  progress.style.width = "200px";
};

Next2.onclick = function () {
  form2.style.left = "-850px";
  form3.style.left = "80px";
  progress.style.width = "600px";
};

Back2.onclick = function () {
  form2.style.left = "80px";
  form3.style.left = "850px";
  progress.style.width = "200px";
};

Next3.onclick = function () {
  form3.style.left = "-850px";
  form4.style.left = "80px";
  progress.style.width = "800px";
};

Back3.onclick = function () {
  form3.style.left = "80px";
  form4.style.left = "850px";
  progress.style.width = "240px";
};
