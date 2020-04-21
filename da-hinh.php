<?php
class NhanVien {
    function hello(){
        echo "hello world!";
    }
}
class Animal extends NhanVien{
    
}

class FPT extends Animal{
    function hello(){
        echo "Xin Chào <br>";
    }
}

class Poly extends Animal{

}

$vinh = new FPT();
$vinh->say();
$nam = new Poly();
$nam->say();

?>