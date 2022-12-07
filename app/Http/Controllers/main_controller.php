<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\product_model;
use App\Models\category_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class main_controller extends Controller
{
    public function index()
    {
        // dd(auth()->check());
        $data = product_model::take(12)->get();
    
        $dataCategories = category_model::all();

        if (empty(auth()->user()->username)) {
            alert()->success('<span style="color: white;">Selamat Datang :)' . '</span>')->toHtml()->background('#113F67')->toToast()->position('top-end')->autoClose(3000);
        }else{
            alert()->success('<span style="color: white;">Login Berhasil <br> Hai, ' . auth()->user()->username . '</span>')->toHtml()->background('#113F67')->toToast()->position('top-end')->autoClose(3000);
        }

        return view('main-view.index', [
            'data' => $data,
            'dataCategories' => $dataCategories,
        ]);
    }

    public function detail($id)
    {
        $detailProduct = product_model::find($id);

        return view('main-view.detail', [
            'detail' => $detailProduct,
        ]);
    }

    public function categoriesDetails($judul, $idCategory)
    {
        return view('main-view.categoriesDetails', [
            'judul' => $judul,
            'idCategory' => $idCategory,
        ]);
    }

    public function chart()
    {
        return view('main-view.chart');
    }

    public function allProduct()
    {
        return view('main-view.allProduct');
    }

    public function checkOut()
    {
        return view('main-view.checkOut');
    }

    public function store($id)
    {
        return view('main-view.store', [
            'id' => $id,
        ]);
    }
}
