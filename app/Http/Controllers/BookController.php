<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::get();
        return view("book.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view("book.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "stock" => "required",
            "varchar" => "required",
            "category_id" => "required",
            "image" => "image|required|mimes:png,jpg,jpeg"
        ]);

        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $filename);
        
        $book = new Book();
        $book->title = $request->title;
        $book->summary = $request->summary;
        $book->categories_id = $request->category_id;
        $book->stock = $request->stock;
        $book->varchar = $request->varchar;
        $book->image = $filename;
        $book->save();

        return redirect("/book");
        
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('book.show', compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        $categories = Category::get();
        return view('book.edit', compact("book", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title" => "required",
            "stock" => "required",
            "category_id" => "required",
            "image" => "image|mimes:png,jpg,jpeg" 
        ]);

        $book = Book::find($id);
        if($request->has("image"))
        {
            $path = "images/";
            File::delete($path.$book->image);
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);

            $book->image = $filename;
            $book->save();
        }

        $book->title = $request->title;
        $book->summary = $request->summary;
        $book->categories_id = $request->category_id;
        $book->stock = $request->stock;
        $book->varchar = $request->varchar;
        $book->save();

        return redirect("/book");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);

        $path = "images/";
        File::delete($path . $book->image);
        
        
        $book->delete();
        
        return redirect('/book');
    }
}
