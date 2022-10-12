<?php

namespace App\Http\Controllers;
use App\Models\Hir;
use App\Models\Kep;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hirek = Hir::latest()->get();
        $kepek = Kep::latest()->get();
  
        return view('welcome',compact(['hirek', 'kepek']));
    }
}
