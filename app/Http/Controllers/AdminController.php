<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() { return view('admin.admindashboard'); }
    public function login() { return view('admin.adminlogin'); }
    public function kelolaJasa() { return view('admin.kelolajasa'); }
    public function kelolaProduk() { return view('admin.kelolaproduk'); }
    public function kelolaPesanan() { return view('admin.kelolapesanan'); }
    public function kelolaKeuangan() { return view('admin.kelolakeuangan'); }
}
