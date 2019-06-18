<?php

namespace App\Http\Controllers\API;

use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookCollection;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    /**
     * Display a book listing of the resource.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return $this->sendResponse('Get book list.',
            BookResource::collection(Book::orderBy('created_at', 'DESC')->get())
        );
    }

    /**
     * Store a newly created book resource in storage.
     * @param Request $request
     * @return bool|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $this->validateRequest($request, [
            'name' => 'required',
            'isbn' => 'required',
            'author' => 'required'
        ]);

        if ($validation !== true) {
            return $validation;
        }

        $book = new Book();
        $book->name = $request->name;
        $book->description = $request->description;
        $book->isbn = $request->isbn;
        $book->author = $request->author;
        $book->user_id = Auth::user()->id;

        if ($book->save()) {
            return $this->sendResponse('Book created successfully.', new BookResource(Book::find($book->id)));
        } else {
            return $this->sendError('Something bad happend.', [], 400);
        }
    }


    /**
     * Display the specified book resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $book = Book::find($id);
        if ($book) {
            return $this->sendResponse('Book detail.', new BookResource($book));
        } else {
            return $this->sendError('Something bad happend.', [], 400);
        }
    }


    /**
     * Update the specified book resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validation = $this->validateRequest($request, [
            'name' => 'required',
            'isbn' => 'required',
            'author' => 'required'
        ]);

        if ($validation !== true) {
            return $validation;
        }

        $book = Book::find($id);
        $book->name = $request->name;
        $book->description = $request->description;
        $book->isbn = $request->isbn;
        $book->author = $request->author;
        if ($book->save()) {
            return $this->sendResponse('Book updated successfully.', new BookResource(Book::find($id)));
        } else {
            return $this->sendError('Something bad happend.', [], 400);
        }
    }

    /**
     * Remove the specified book resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        if ($book->user_id == Auth::user()->id) {
            if ($book->delete()) {
                return $this->sendResponse('Book deleted successfully.');
            } else {
                return $this->sendError('Something bad happend.', [], 400);
            }
        } else {
            return $this->sendError('You are not authorized to perform this action.', [], 401);
        }


    }

}
