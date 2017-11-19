<?php
/**
 * SaaSy Cumulus Demo Application
 * User: jason
 * Date: 11/18/17
 * Time: 6:05 PM
 * License: Public Domain
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class RootModel extends Model
{


    /**
     * Overrides the
     * @param string $key
     * @return mixed
     */
    public function getAttribute($key){
        if (array_key_exists($key, $this->relations)){
            return parent::getAttribute($key);
        }
        else{
            return parent::getAttribute(snake_case($key));
        }
    }


    /**
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    public function setAttribute($key, $value){
        return parent::setAttribute(snake_case($key), $value);
    }

}