<?php

namespace App\Http\Controllers;

use App\Models\DonViBaoTriModel;
use App\Models\NhaCungCapModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->phanQuyen != 2) {
            $nhaCungCaps = $this->nhaCungCap->all();
            return view('DonViBaoTri.add', compact('nhaCungCaps'));
        } else {
            return back()->with('quyen', 'Bạn không có quyền thực hiện chức năng này');
        }
    }


    public function postAdd()
    {
        $this->
    }

    public function delete($id)
    {
    }

    public function getEdit($id)
    {
        $donViBaoTri = $this->donViBaoTri->find($id);
        $nhaCungCaps = $this->nhaCungCap->all();
        return view('DonViBaoTri.edit', compact('donViBaoTri', 'nhaCungCaps'));
    }

    public function postEdit(Request $request, $id)
    {
    }
}
