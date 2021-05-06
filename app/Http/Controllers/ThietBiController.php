<?php

namespace App\Http\Controllers;

use App\Models\ThietBiModel;
use App\Models\User;
use Illuminate\Http\Request;

class ThietBiController extends Controller
{
    private $canBoSuDung;
    private $khoaPhongSuDung;
    private $nhaCungCap;
    private $donViBaoTri;
    private $thietBi;

    public function __construct()
    {
         $this->thietBi =new ThietBiModel();

    }

    public function index()
    {
        return view('ThietBi.list');

    }

    public function search(Request $request)
    {

    }

    public function getAdd()
    {

    }

    public function postAdd($request)
    {

    }

    public function delete($id)
    {

    }

    public function getEdit($id)
    {

    }

    public function postEdit(Request $request, $id)
    {

    }
}
