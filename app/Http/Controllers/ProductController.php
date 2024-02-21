<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return view('gadgets')
            ->with('GG1', 'SmartPhones')
            ->with('GG2', 'Tablet/IPad')
            ->with('GG3', 'TelePhone');
    }
}

?>