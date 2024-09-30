<?php
class login
{
    //prop
    private $username = "nasywa";
    private $password = "12345";

    //method login
    private function m_username()
    {
        return $this->username;
    }
    public function tampilkan_username()
    {
        return $this->m_username();
    }
    function tampilkan_password()
    {
        return $this->password;
    }

}
//instansiasi class login
$login = new login();

//memanggil method tampilkan_user dari class login
echo "username:" . $login->tampilkan_username() . "<br/>";
echo "password:" . $login->tampilkan_password();

//menentukan property
class bangunruang
{
    public $persegi;
    public $persegipanjang;
    public $segitiga;
    public $lingkaran;
    public $belahketupat;
    function bicara()
    {
        echo "silahkan pilih bangun ruang";
    }

    function getInfo()
    {
        echo "pilih bangunruang";
        echo "persegi =" . $this->persegi . "<br/>";
        echo "persegipanjang =" . $this->persegipanjang . "<br/>";
        echo "segitiga =" . $this->segitiga . "<br/>";
        echo "lingkaran =" . $this->lingkaran . "<br/>";
        echo "belahketupat =" . $this->belahketupat . "<br/>";
    }
}