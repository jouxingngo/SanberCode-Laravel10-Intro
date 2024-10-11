<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categories = DB::table("categories")->get();
        return view("category.index", compact("categories"));
    }

    public function create(){
        return view("category.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],
[
            'name.required' => "category :attribute is required"
        ]);

        DB::table("categories")->insert(
            [
                "name" => $request->input("name")
            ]
        );

        return redirect("/category");
    }

    public function show($id){
        $category = DB::table('categories')->find($id);
        return view("category.detail", compact("category"));
    }

    public function edit($id){
        $category = DB::table("categories")->find($id);
        return view("category.edit", compact("category"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ],
        [
            'name.required' => "category :attribute is required"
        ]);

        DB::table("categories")
            ->where("id", $id)
            ->update([
                "name" => $request->input("name")
            ]);
        return redirect('/category');
    }

    public function delete($id)
    {
        DB::table('categories')->where( 'id', '=', $id)->delete();
        return redirect("/category");
    }
}
