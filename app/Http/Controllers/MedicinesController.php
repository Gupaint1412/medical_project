<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
