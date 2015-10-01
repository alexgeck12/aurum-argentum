<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class ItemController extends Controller
{

    public function showItem($id)
    {
        $results = DB::select('select * from item where id = ?', [$id]);

        return view('item', ['name' => $results[0]->name,
                            'type'=> $results[0]->type,
                            'description'=>$results[0]->description,
                            'stone'=>$results[0]->stone,
                            'cost'=>$results[0]->cost,
                            'img'=>$results[0]->img,
                            'material'=>$results[0]->material,
        ]);
    }
}