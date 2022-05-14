<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\IStudent;




class StudentRepository extends BaseRepository implements IStudent
{

    public function __construct()
    {
        
    }

    public function model()
    {
        return Student::class;
    }
}
