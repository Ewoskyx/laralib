<?php 

namespace App\Repositories\Eloquent;

use App\Models\Author;
use App\Repositories\Contracts\IAuthor;

class AuthorRepository extends BaseRepository implements IAuthor {
   
    public function model () {
        return Author::class;
    }
}