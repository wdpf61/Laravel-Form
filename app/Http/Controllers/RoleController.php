<?php

namespace App\Http\Controllers;

use App\Rules\UpperCase;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   function index($id, $name){

      $roles=[
         ['id'=>1, 'name'=>'admin'],
         ['id'=>2, 'name'=>'Employee'],
         ['id'=>3, 'name'=>'Hr'],
         ['id'=>4, 'name'=>'Manager'],
      ];

      return view('test', compact('id', 'name', 'roles' ));
   }


   function roleIndex(){
    $roles=[
        ['id'=>1, 'name'=>'admin'],
        ['id'=>2, 'name'=>'Employee'],
        ['id'=>3, 'name'=>'Hr'],
        ['id'=>4, 'name'=>'Manager'],
     ];
      return view('roles.index', ['roles'=> $roles]);
   }

   function create(){
      return view('roles.create');
   }

   function store(Request $request){
       // print_r($request->all());

       $request->validate([
         "name"=> ["required", 'min:3', new UpperCase()] ,
         "department"=>"required|in:Hr,Development",
       ],[
          'name.required'=>"The name field must be filledup"
       ]);

      //database seve 

      //   echo $request->name;
      //   echo $request->department;
      //   echo $request->post('name');

        return redirect("roles")->with("success","Data saved successfully");


      
   }


}
