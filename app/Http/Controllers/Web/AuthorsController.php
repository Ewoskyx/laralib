<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\IAuthor;

class AuthorsController extends Controller
{
    protected $authors;
    
    public function __construct(IAuthor $authors)
    {
        $this->authors = $authors;
    }

    public function index () {
        $authors = $this->authors->all();
        return view('Author/index', ['authors' => $authors]);
    }

    public function show ($id) {
        $author = $this->authors->show($id);
        return view('Author/show', ['author' => $author]);
    }

    public function search($query) {
        $results = $this->authors->searchByAttribute('full_name', $query);
        return view('Author/search', ['results' => $results] );
    }
}
