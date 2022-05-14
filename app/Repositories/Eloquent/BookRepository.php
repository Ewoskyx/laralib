<?php 

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\IBook;

class BookRepository extends BaseRepository implements IBook {
    
    public function model () {
        return Book::class;
    }
}