<?php 

namespace App\Repositories\Eloquent;

use Exception;
use App\Repositories\Contracts\IBase;

abstract class BaseRepository implements IBase {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModelClass();
        $this->find = $this->find();
    }

    public function all(){
        return $this->model->all();
    }
    
    public function show($id){
        $result = $this->find($id);
        if (! $result) {
            return false;
        }
        return $result;
    }

    public function findWhere($column, $value){
        return $this->model->where($column, $value)->get();
    }

    public function findWhereFirst($column, $value){
        return $this->model->where($column, $value)->firstOrFail();
    }

    public function paginate($perPage = 10){
        return $this->model->paginate($perPage);
    }

    public function create(array $data){
        return $this->model->create($data);
    }

    public function update($id, array $data){
        $record = $this->find($id);
        if (! $record) {
            return false;
        }
        $record->update($data);
        return $record;
    }

    public function delete($id){
        $record = $this->find($id);
        if (! $record) {
            return false;
        }
        return $record->delete();
    }
    
    public function searchByAttribute($column, $query){
        $response= $this->model->where($column, 'like', '%'.$query.'%')->get();
        return  $response;
    }

    private function find($id = null){
        $result = $this->model->find($id);
        return $result;
    }

    protected function getModelClass()
    {
        if (! method_exists($this, 'model')) {
            throw new Exception("Tanımlı model bulunamadı!");
        }
        return app()->make($this->model());
    }
}