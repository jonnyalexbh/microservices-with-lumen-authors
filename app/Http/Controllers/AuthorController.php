<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * __construct
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * index
     *
     */
    public function index()
    {
        $authors = Author::all();

        return $this->successResponse($authors);
    }

    /**
     * store
     *
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    /**
     * show
     *
     */
    public function show($author)
    {
    }

    /**
     * update
     *
     */
    public function update(Request $request, $author)
    {
    }

    /**
     * destroy
     *
     */
    public function destroy($author)
    {
    }
}
