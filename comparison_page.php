<html>
<title>Annual Equivalent cost method</title>
<head>
<link rel="stylesheet" href="style\style2.css">
<script>
function fun()
{
  r=parseInt(document.getElementById("r").value);
  t=parseInt(document.getElementById("t").value);
  i=parseInt(document.getElementById("i").value);
  m=parseInt(document.getElementById("m").value);
  t1=parseInt(document.getElementById("t1").value);
  i1=parseInt(document.getElementById("i1").value);
  m1=parseInt(document.getElementById("m1").value);
  a=r/100;
  b=(1+a)**t;
  A=(1-(1/b))/a;
  A1=Number((A).toFixed(2))
  E=(i/A)+m;
  E1=Math.round(E);
  document.getElementById("add").value = A1;
  document.getElementById("sub").value = "$"+E1; 
  b1=(1+a)**t1;
  A2=(1-(1/b1))/a;
  A3=Number((A2).toFixed(2));
  E2=(i1/A2)+m1;
  E3=Math.round(E2);
  document.getElementById("ad").value = A3;
  document.getElementById("su").value = "$"+E3;
  Z1=E1-E3;
  Z2=E3-E1;
  if (E1>E3) {
  greeting = "A manager in charge of a capital budgeting decision would select Machine B because it has an EAC that is $ "+ Z1 +" lower than Machine A.";
  } 
  else {
  greeting = "A manager in charge of a capital budgeting decision would select Machine A because it has an EAC that is $"+ Z2 +" lower than Machine B.";
  }
  document.getElementById("demo").innerHTML = greeting; 
}
</script>
</head>
<body>
<div class="container">
<p class="p1">Annual Equivalent cost method</p>
<p class="p3">Cost of capital: <input id="r"></p>
<br><br><br><br><br><br><br><br>
<button onclick="fun()" class="submit-btn">Calculate</button>
<br/><br/><br><br/><br><br/><br>
<p class="p4" id="demo"></p><br>
&nbsp <a href="<?php echo 'front_page.php' ?>"> 🏠👈home page </a>
</div>
<div class="container1"><p class="p4">EAC Machine A</p>
<table class="p2">
<tr><td>&nbsp An expected lifespan (in years): </td><td><input id="t" ></td></tr>
<tr><td>&nbsp An initial capital outlay (in $): </td><td><input id="i" ></td></tr>
<tr><td>&nbsp An annual maintenance expense (in $) : </td><td><input id="m" ></td></tr></table><br>
</div>
<div class="container2"><p class="p4">EAC Machine B</p>
<table class="p2">
<tr><td>&nbsp An expected lifespan (in years): </td><td><input id="t1" ></td></tr>
<tr><td>&nbsp An initial capital outlay (in $): </td><td><input id="i1" ></td></tr>
<tr><td>&nbsp An annual maintenance expense (in $) : </td><td><input id="m1" ></td></tr></table><br>
</div>
<div class="container3"><p class="p4">EAC Machine A</p>
<table  class="p2"><tr><td>&nbsp Annuity Factor :</td><td> <input id="add"></td></tr>
<tr><td>&nbsp Annual Equivalent Cost: </td><td><input id="sub"></td></tr></table ><br>
</div>
<div class="container4"><p class="p4">EAC Machine B</p>
<table  class="p2"><tr><td>&nbsp Annuity Factor :</td><td> <input id="ad"></td></tr>
<tr><td>&nbsp Annual Equivalent Cost: </td><td><input id="su"></td></tr></table ><br>
</div>
</body>
</html>