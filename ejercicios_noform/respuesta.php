<?php
print "<pre>";
print_r($_POST); //PARA LAS MATRICES ARRAY
print "<pre>";

$nombre = trim($_POST["nombre"]);/*trim para que quite los primeros y ultimos espacios =    paco mer*/

if($nombre ==""){

    print "<p>no has introducido un nombre</p>";

}else{
    print"el nombre es:$nombre";
}

if(isset($_POST['aceptar'])){/*ha llegado un elemento con el nombre acepta*/

    print "<p>has aceptado las condiciones</p>";

}else{

    print "no has aceptado las condiciones";
}

if(isset($_POST["ciclos"])){
    $ciclo =$_POST["ciclos"];

        if($ciclo =="DAW"){
            print "aprenderas a hacer paginas web";

        }
        elseif($ciclo == "DAM"){
            PRINT "vas a crear aplicaciones";
        }else{
            print "vas a montar una red";
        }
}   


if(isset($_POST["intereses2"])){
    print "<p>tienes interes</p>";
    $intereses2 =$_POST["intereses2"];

    foreach($intereses2 as $interes){
        print "<p>estas interesado en $interes</p>";
    }
}else{
    print "<p>no tiene intereses</p>";
}

?>