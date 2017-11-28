<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/25/17
 * Time: 4:14 PM
 * License: Public Domain
 */

namespace App\Http\Controllers\Core;


use App\Http\Controllers\Controller;
use App\Model\Core\Repositories\AddressRepoInterface;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    protected $address;


    public function __construct(AddressRepoInterface $address){
        $this->address = $address;
    }

    public function index(Request $request){
        //dd($request);
    }

}