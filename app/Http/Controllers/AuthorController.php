<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

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
