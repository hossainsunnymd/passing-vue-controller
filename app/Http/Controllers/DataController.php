<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class DataController extends Controller
{
    public function home()
    {



        return Inertia::render('HomePage', [
            'name'=>'From Controller',
            'res' =>Inertia::defer(fn()=>$this->getData())
        ]);
    }

    private function getData() {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $data=$response->json();
        return $data;
    }
}
