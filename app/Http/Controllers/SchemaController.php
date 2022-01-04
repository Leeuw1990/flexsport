<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchemaController extends Controller
{
    public function schema()
    {
        return view("schema.schema");
    }
    //
}
