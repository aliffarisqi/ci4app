<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Latihan Codeigniter 4'
        ];
        echo view('layout\header', $data);
        echo view('pages\home');
        echo view('layout\footer');
    }
    public function about()
    {
        $data = [
            'title' => 'about me'
        ];
        echo view('layout\header', $data);
        echo view('pages\about');
        echo view('layout\footer');
    }
}
