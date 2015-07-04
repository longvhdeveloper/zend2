<?php
interface khudulich
{
    public function lichtrinh();
}

class VungTau implements khudulich
{
    public function lichtrinh()
    {
        echo "Lich trinh di Vung Tau";
    }
}

class Dalat implements khudulich
{
    public function lichtrinh()
    {
        echo "Lich trinh di Da lat";
    }
}

class NhaTrang implements khudulich
{
    public function lichtrinh()
    {
        echo "Lich trinh di Nha Trang";
    }
}

class Nghile
{
    public $dipicnic;
    public function setPicnic(khudulich $dipicnic)
    {
        $this->dipicnic = $dipicnic;
    }

    public function getPicnic()
    {
        return $this->dipicnic;
    }
}

$dalat = new DaLat();
$nghile = new NghiLe();
$nghile->setPicnic($dalat);
$nghile->getPicnic()->lichtrinh();
echo "<br/>";

$nhatrang = new NhaTrang();
$nghile->setPicnic($nhatrang);
$nghile->getPicnic()->lichtrinh();
