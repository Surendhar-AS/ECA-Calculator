<html>
<title>Annual Equivalent cost method</title>
<head>
<link rel="stylesheet" href="style\style3.css">
<script>
function fun()
{
  r=parseInt(document.getElementById("r").value);
  t=parseInt(document.getElementById("t").value);
  i=parseInt(document.getElementById("i").value);
  m=parseInt(document.getElementById("m").value);
  a=r/100;
  b=(1+a)**t;
  A=(1-(1/b))/a;
  A1=Number((A).toFixed(2))
  E=(i/A)+m;
  E1=Math.round(E);
  document.getElementById("add").value = A1;
  document.getElementById("sub").value = "$"+E1; 
}
</script>
</head>
<body>
<div class="container ">
<p class="p1">Annual Equivalent cost method</p>
<table class="p2">
<tr><td>&nbsp Cost of capital (in %):</td><td> <input id="r" ></td></tr>
<tr><td>&nbsp An expected lifespan (in years): </td><td><input id="t" ></td></tr>
<tr><td>&nbsp An initial capital outlay (in $): </td><td><input id="i" ></td></tr>
<tr><td>&nbsp An annual maintenance expense (in $) : </td><td><input id="m" ></td></tr></table><br>
<button onclick="fun()" class="submit-btn">Calculate</button><br>
<table  class="p2"><tr><td>&nbsp Annuity Factor :</td><td> <input id="add"></td></tr>
<tr><td>&nbsp Annual Equivalent Cost: </td><td><input id="sub"></td></tr></table ><br>
&nbsp <a href="<?php echo 'front_page.php' ?>"> 🏠👈home page </a>
</div>

</body>
</html>