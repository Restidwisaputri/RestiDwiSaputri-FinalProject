<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRestoranRequest;
use App\Models\Restoran;
use Illuminate\Http\Request;

class RestoranController extends Controller
{
    public function index()
    {
        $restoran = Restoran::first();
       return view('admin.master.restoran.index', ['restoran' =>$restoran,'page_title' =>'Restoran']);
    }

    public function update(UpdateRestoranRequest $restoran)
    {
        $restoran = Restoran::first();
        $restoran->update();
        return redirect()->back();

    }


}
