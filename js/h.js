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