<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Models\ModelBook;
use Illuminate\Http\Request;
use App\Models\User;

class BookController extends Controller
{

    private $objUser;
    private $objBook;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = $this->objBook->all();
        return view('home', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $cadasto = $this->objBook->create([
            'title'     => $request->title,
            'pages'     => $request->pages,
            'price'     => $request->price,
            'id_user'   => $request->id_user   
        ]);

        if($cadasto){
            return redirect('books');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = $this->objBook->find($id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
