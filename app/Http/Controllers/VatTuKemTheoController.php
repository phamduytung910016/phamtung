<?php

namespace App\Http\Controllers;

use App\Models\VatTuKemTheo;
use Illuminate\Http\Request;

class VatTuKemTheoController extends Controller
{

    private $thietBi;
    private $vatTuKemTheo;

    public function __construct()
    {
        $this->vatTuKemTheo = new VatTuKemTheo();
    }

    public function index()
    {
        $data = $this->vatTuKemTheo->find(1);
        dd($data->ThietBi);
        //echo $data->ThietBiTuongUng;
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
