<?php

namespace App\Http\Controllers;

use App\Models\DonViBaoTriModel;
use Illuminate\Http\Request;

class DonViBaoTriController extends Controller
{
    protected $donViBaoTri;

    public function __construct(DonViBaoTriModel $donViBaoTri)
    {
        return $this->donViBaoTri = $donViBaoTri;
    }


    public function index()
    {
        $data = $this->donViBaoTri->first();
        dd($data->nhaCungCap);
    }


    public function search(Request $request)
    {
    }


    public function getAdd()
    {
    }


    public function postAdd()
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
