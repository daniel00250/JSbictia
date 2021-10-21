<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Math.random()</h2>

<p>ALEATORIO DE UN GRUPO</p>
<p id="demo1"></p>
<p id="demo2"></p>


<script>


const estudiantes = ["CARLOS ANDRES FANDIÑO RUEDA","JORGE ALBERTO RODRIGUEZ PAEZ","EDGAR LEONARDO RODRIGUEZ VASQUEZ","KELLY JOHANA VERGARA TORRES","LINA MARÍA RODRÍGUEZ RAMÍREZ","JOHN JAIRO ORJUELA ESPINOSA","JHON FAVER MACHADO ALAPE","FRANCISCO JAVIER TORRES VILLAMOR","ANDRES FELIPE GIRALDO","EDWIN GERMAN VILLALBA GONZALEZ","CRISTIAN ORLANDO ROMERO ACOSTA","CRISTIAN DAVID SAINEA CÉSPEDES","DANIEL CAMILO RAMIREZ MARTINEZ","ALEJANDRO RIVAS LOPEZ","DIANA GARCIA SANDOVAL","MARCOS ORTIZ"];


//document.getElementById("demo1").innerHTML = estudiantes.length;
//document.getElementById("demo2").innerHTML = typeof estudiantes;
//document.getElementById("demo3").innerHTML = estudiantes;

var i,j,k;
    for (i = estudiantes.length; i; i--) {
        j = Math.floor(Math.random() * i);
        k = estudiantes[i - 1];
        estudiantes[i - 1] = estudiantes[j];
        estudiantes[j] = k;
    }

const nuevo_estudiantes = estudiantes;

console.log(nuevo_estudiantes);

const grupos=estudiantes.length/2;

document.getElementById("demo1").innerHTML = typeof grupos;
console.log(grupos);

for (var i = 0; i <= grupos ; i++) {
 document.write("grupo  : " + nuevo_estudiantes[i] +" - "+ nuevo_estudiantes[i+1] +"<br>");
}



</script>

</body>
</html>
