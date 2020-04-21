<?php
class SinhVien{
    var $name;
    var $age;
    var $mssv;
    function __construct($name = "", $age = 0,$mssv)
    {
        $this->name = $name;
        $this->age = $age;
        $this->mssv = $mssv;
    }
    function getInfo(){
        echo "Tôi tên là $this->name - tôi được $this->age tuổi - Mã sinh viên của tôi là $this->mssv";
    }
}
class SV1 extends SinhVien{
    
}
class SV2 extends SinhVien{
}
$rex = new Dog('Nguyễn Trung Đức', 20, 'PH07111');
$rin = new Cat('Nguyễn Văn Phúc', 20, 'PH076666');
$rex->getInfo();
echo "<br>";
$rin->getInfo();
?>