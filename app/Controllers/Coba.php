<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'ini controller coba di method index';
    }
    public function about($name = '', $umur = '')
    {
        echo "nama saya $name dan saya berumur $umur tahun";
    }
}
