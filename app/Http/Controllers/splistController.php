<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shoppinglist;


class splistController extends Controller
{
    // to get data from database
    public function index()
    {
        return view ('welcome', ['list'=> shoppinglist::all()]);
    }

    // to insert data into database
    public function saveList(Request $req)
    {

        $shoppingObj = new Shoppinglist();
        $shoppingObj->title = $req->shplist;

        $shoppingObj->save();


        return redirect('/');

    }

    // to delete data from database
    public function deleteList($id)
    {
        $data = shoppinglist::find($id);
        $data->delete();

        return redirect('/');
    }

    // to edigt data in database

    public function editlist($id)
    {
       $data = shoppinglist::find($id);
        return view('edit', ['data' => $data]);
    }

       // to update data into database
       public function updatesh(Request $req)
       {
   
           $shoppingObj = new Shoppinglist();
           $shoppingObj->title = $req->shplist;
   
           $shoppingObj->save();
   
   
           return redirect('/');
   
       }
}
