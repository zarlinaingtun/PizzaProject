<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaControllers extends Controller
{
    function index(){
        return view('index');
    }
    function pizzas() {
        //Array Format
        // $pizzas=[
        //     ["id"=>1,"username"=>"mgmg","pizza_name"=>"chessy pizza","topping"=>"salad","sauce"=>"tomato","price"=>9.99],//index 0
        //     ["id"=>2,"username"=>"mama","pizza_name"=>"spicy pizza","topping"=>"salad","sauce"=>"tomato","price"=>8.99]// index 1
          
        // ];

        //send data into blade by associated array
        // return view('pizzas',["key"=>"Hello"]);

        //Get data from database by Object Format or Collection
         $pizzas=Pizza::all();
         return view('pizzas',["pizzas"=>$pizzas]);
        // return dd($pizzas);
    }
    function insert(Request $req){
    //    return $req->toArray();
    $validation=$req->validate([
        "username"=>"required",
        "pizza_name"=>"required",
        "topping"=>"required",
        "sauce"=>"required",
        "price"=>"required"

    ]);
    if($validation){
        //insert data into database's table
        //create obj for Pizza model
        $pizza=new Pizza();
        $pizza->username=$req->username;//col's name=user's data
        $pizza->pizza_name=$req->pizza_name;
        $pizza->topping=$req->topping;
        $pizza->sauce=$req->sauce;
        $pizza->price=$req->price;
        $pizza->save();
        // return $pizza;//return data with json format
        return back()->with("success","Thank for your order");
    }
    else{
        return back()->withErrors($validation);
    }
    }

    function delete($id){
        // return $id;
        //find data by id 
        $delete_pizza_data=Pizza::find($id);//get data by collection obj

        // return $delete_pizza_data;
        // $name=$delete_pizza_data['username'];

        //delete that data
        $delete_pizza_data->delete();
        return back()->with("Delete","$delete_pizza_data->username 's Order is deleted.");

    }
    //edit form function
    function edit($id){
        $pizza=Pizza::find($id);
        // return $pizza;
        return view("edit",["pizza"=>$pizza]);
       
    }
    function update($id,Request $req){
        //get data by id
        $updatedatabyid=Pizza::find($id);
        //override (data from database) by (user's new data)
        $updatedatabyid->username=$req->username;
        $updatedatabyid->pizza_name=$req->pizza_name;
        $updatedatabyid->topping=$req->topping;
        $updatedatabyid->sauce=$req->sauce;
        $updatedatabyid->price=$req->price;
        //update that data
        $updatedatabyid->update();
        //redirect page
        // return redirect('/pizzas');
        return redirect()->route("pizzas")->with("updatesuccess","$updatedatabyid->username's order is successfully updated.");
    }

}
