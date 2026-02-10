<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        $ninjas = Ninja::orderBy("updated_at", "desc")->get();
        return view("ninjas.index", ["ninjas" => $ninjas]);
    }
    public function show()
    {
        /**
         * 
         */
    }
    public function create()
    {
        /**
         * 
         */
    }
    public function store()
    {
        /**
         * 
         */
    }
}
