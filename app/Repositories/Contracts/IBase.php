<?php 
namespace App\Repositories\Contracts;

interface IBase {
    public function all();
    public function show($id);
    public function findWhere($column, $value);
    public function findWhereFirst($column, $value);
    public function paginate($perPage = 10);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function searchByAttribute($column, $name);
}