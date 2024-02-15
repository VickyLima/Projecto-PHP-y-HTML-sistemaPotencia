<?php
function conexion(){
    $conexion = mysqli_connect("localhost","root","","sistemapotencia"); 
    return $conexion;
}