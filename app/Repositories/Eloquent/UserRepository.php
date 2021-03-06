<?php 

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\IUser;

class UserRepository extends BaseRepository implements IUser {

     public function model () {
        return User::class;
    }
}