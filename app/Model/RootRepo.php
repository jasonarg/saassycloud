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

    }

    public function findByAttr(string $attr, $value){

    }

    public function create(array $attributeValuePairs){
    }
}