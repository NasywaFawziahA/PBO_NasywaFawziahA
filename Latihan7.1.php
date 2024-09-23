<?php
class manusia
{//class induk

    //property class manusia
    public $nama_saya;
    //method pada class manusia
    function berinama($saya)
    {
        $this->nama_saya = $saya;
    }
}

// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia
{

    //peoperty class teman
    public $nama_teman;
    //method pada class teman
    function berinamateman($teman)
    {
        $this->nama_teman = $teman;
    }
}
//instalasi class teman 
$objectteman = new teman;

//method beri nama aladah method pada class manusia,tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia
$objectteman->berinama("dika");
$objectteman->berinamateman("andra");

//menampilkan isi property
echo "nama saya:" . $objectteman->nama_saya . "<br/>";
echo "nama teman saya:" . $objectteman->nama_teman;
?>