<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name = null)
    {
        //get all books from db
        $books = Book::all()->take(10);
        $bookArray = [];
        //filter and format the response
        foreach($books as $book){
           array_push($bookArray, 
                array(
                "id" => $book->id,
                "name"=> $book->name,
                "isbn"=> $book->isbn,
                "authors"=> array(
                    $book->authors
                ),
                "number_of_pages"=> $book->number_of_pages,
                "publisher"=> $book->publisher,
                "country"=> $book->country,
                "release_date"=> $book->release_date 
                )
            );
        }
        return response()->json(
            array(
                "status_code"=>200, 
                "status"=>"success",
                "data"=> $bookArray
            )
            );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->name = $request->name;
        $book->isbn = $request->isbn;
        $book->authors = $request->authors;
        $book->country = $request->country;
        $book->number_of_pages = $request->number_of_pages;
        $book->publisher = $request->publisher;
        $book->release_date = $request->release_date;
        if($book->save()){
        return response()->json(
            array(
                "status_code"=>201, 
                "status"=>"success",
                "data"=>array(
                   "book"=> array(
                        "name"=> $book->name,
                        "isbn"=> $book->isbn,
                        "authors"=> array(
                            $book->authors
                        ),
                        "number_of_pages"=> $book->number_of_pages,
                        "publisher"=> $book->publisher,
                        "country"=> $book->country,
                        "release_date"=> $book->release_date 
                    )
                )
            )
            );
        }
    }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return response()->json(
            array(
                "status_code"=>200, 
                "status"=>"success",
                "data"=> array(
                    "id"=> $book->id,
                    "name"=> $book->name,
                    "isbn"=> $book->isbn,
                    "authors"=> array(
                        $book->authors
                    ),
                    "number_of_pages"=> $book->number_of_pages,
                    "publisher"=> $book->publisher,
                    "country"=> $book->country,
                    "release_date"=> $book->release_date 
                )
            )
            );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        // $book->update($request->all());
       $book->name = $request->name;
        $book->isbn = $request->isbn;
        $book->authors = $request->authors;
        $book->country = $request->country;
        $book->number_of_pages = $request->number_of_pages;
        $book->publisher = $request->publisher;
        $book->release_date = $request->release_date;
        $book->save();
        return response()->json(
            array(
                "status_code"=>200, 
                "status"=>"success",
                "message"=>"The book " . $book->name ." was updated successfully",
                "data"=> array(
                        "id"=> $book->id,
                        "name"=> $book->name,
                        "isbn"=> $book->isbn,
                        "authors"=> array(
                            $book->authors
                        ),
                        "number_of_pages"=> $book->number_of_pages,
                        "publisher"=> $book->publisher,
                        "country"=> $book->country,
                        "release_date"=> $book->release_date 
                    )
            )
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(
            array(
                "status_code"=>204, 
                "status"=>"success",
                "message"=>"The book " . $book->name ." was deleted successfully",
                "data"=>[]
            ) 
        );
    }
}
