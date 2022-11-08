/*function Suma (){
    var n1,n2,n3, S;
    n1=document.getElementById('num1').value;                                                                            
    n2=document.getElementById('num2').value;
    n3=document.getElementById('num3').value;
    S=parseInt(n1)+parseInt(n2)+parseInt(n3)/0.25;
    document.getElementById('res').value=S;
  }*/

var Nombres;
Nombres = prompt("Digite su nombre");
alert("Bienvenido " + Nombres);

/*
> mayor
> menor
>= menor igual
<= mayor igual
== igual
!= distinto
&& y ademas
|| o si no
*/
function Multiplicar (){
var precio, cantidad, Res;
precio=document.getElementById('prec').value;
cantidad=document.getElementById('cant').value;
Res=parseInt(precio)*parseInt(cantidad);
document.getElementById('R').value=Res;
}
