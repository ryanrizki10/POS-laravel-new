<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class KasirController extends Controller
{
    public function index()
    {
        $data['Products'] = Products::orderBy('id', 'desc')->get()->map(function ($res) {
            return [
                "id" => $res->id,
                "name" => $res->product_name,
                "price" => (int)$res->product_price,
                "image" => asset('storage/' . $res->product_photo),
                "option" => null,
            ];
        });

        return view('kasir.index', $data);
    }
}