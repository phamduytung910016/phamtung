<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon as Carbon;

class BrandController extends Controller
{
    public function index()
    {

        $datas = BrandModel::all();
        return view('test', compact('datas'));
    }

    public function add(Request $request)
    {
        $ten = $request->ten;
        $link = $request->file('link');
        $generate = hexdec(uniqid());

        $image_ext = strtolower($link->getClientOriginalExtension());
        $save = $generate . '.' . $image_ext;
        $link->move('img', $save);
        BrandModel::insert([
            [
                'ten' => $request->ten,
                'link' => 'img/' . $save,
                'created_at' => Carbon::now()
            ]
        ]);

        return back();
    }
}
