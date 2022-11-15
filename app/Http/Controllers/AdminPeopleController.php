<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class AdminPeopleController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'people' => Person::filter()->paginate(10)
        ];
        return view('admin.people.kelolaPenggunaUtama',$data);
    }

    public function create(Request $request)
    {
        $data = [
            
        ];
        return view('admin.people.tambahPenggunaUtama',$data);
    }
}
