<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
     /*  $business = Business::find(10)->update;
      $business->name = 'CucaBeludo';
      $business->email = 'Cucabeludo@hotmail.com';
      $business->address = 'NoMeioDOku';
      $business->save();
      dd($business); */

     /*  $input = [
        'name' => 'Jon 2',
        'email' => 'sakdsk@hotmail.com2',
      ];

      $business = Business::find(10);
      $business->fill($input);
      $business->save();
      dd($business); */
     
     /*deletar*/
      $business = Business::find(3);
        dd($business->toSql());
    }

    

}
