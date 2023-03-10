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