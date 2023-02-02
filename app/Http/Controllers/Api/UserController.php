<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CustomerResource;
use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth:api');

   }


   public function index()
   {

    $user=auth('api')->user();
    return response()->json(CustomerResource::collection(customer::all()),200);
    //return CustomerResource::collection($user->customer) ;
   }
}
