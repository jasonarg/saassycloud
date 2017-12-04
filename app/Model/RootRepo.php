<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/25/17
 * Time: 4:12 PM
 * License: Public Domain
 */

namespace App\Model;


abstract class RootRepo implements RootRepoInterface
{
    protected $model;

    public function findAll(){
        return $this->model->all();
    }

    public function findById(integer $id){
        return $this->model->findById();
    }

    public function findByAttr(string $attr, $value, $unique = false){
        if($unique){
            return $this->model->where($attr, $value)->first();
        }
        return $this->model->where($attr, $value)->get();
    }

    public function findByAttrWith(string $attr, $value, string $with, $unique = false){
        if($unique){
            return $this->model->where($attr, $value)->with($with)->first();
        }
        return $this->model->where($attr, $value)->with($with)->get();
    }

    public function findByConditions(array $conditions){
        return $this->model->where($conditions)->get();
    }

    /**
     * Creates a new instance of $model and returns it
     * @param array $attributeValuePairs = []
     *
     * @return mixed
     */
    public function create(array $attributeValuePairs = []){
        $newObjName =  \get_class($this->model);
        $newObj = new $newObjName;
        foreach($attributeValuePairs as $key => $value){
            $newObj->$key = $value;
        }
        $newObj->save();

        return $newObj;

    }
}