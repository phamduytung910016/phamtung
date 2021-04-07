<?php

namespace App\Http\Controllers;

use App\Models\DonViBaoTriModel;
use App\Models\NhaCungCapModel;
use Illuminate\Http\Request;

class DonViBaoTriController extends Controller
{
    protected $donViBaoTri;
    protected $nhaCungCap;

    public function __construct(DonViBaoTriModel $donViBaoTri, NhaCungCapModel $nhaCungCap)
    {
        $this->donViBaoTri = $donViBaoTri;
        $this->nhaCungCap = $nhaCungCap;
    }


    public function index()
    {
        $data = $this->donViBaoTri->all();

        return view('DonViBaoTri.list', compact('data'));
    }


    public function search(Request $request)
    {
    }


    public function getAdd()
    {
        $nhaCungCaps = $this->nhaCungCap->all();
        return view('DonViBaoTri.add', compact('nhaCungCaps'));
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
