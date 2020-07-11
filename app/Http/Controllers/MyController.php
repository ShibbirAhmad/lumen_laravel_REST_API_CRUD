<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Validator;



class MyController extends Controller{

   public function displayCustomer(Request $request){

         $customer = Customer::all();
          return response()->json($customer);

    }


    

    public function addCustomer(Request $request){

         $validate= Validator::make($request->all(),[

                 'name' => 'required',
                 'email' => 'required',
                 'phone' => 'required'
         ]); 
         
         if (!$validate->fails()) {
              
             $data= Customer::create($request->all());
             
              return \response()->json($data);

         }

       }



    public function updateCustomer(Request $request, $id){

     $validate= Validator::make($request->all(),[

          'name' => 'required',
          'email' => 'required',
          'phone' => 'required'
        ]); 


        if (!$validate->fails()) {
              
             $customer = Customer::find($id);
             $data=$customer->update($request->all());
             return response()->json($data);

          }
     }




    public function deleteCustomer($id){

             $customer= Customer::find($id);
             $data=$customer->delete();
             return \response()->json($data);
     }











   
//    public function download(){
//           $path= 'download_demo.txt' ;
//     return response()->download($path);

//     }



//   public function catch(Request $request){
        
//          return $request ;

//     }  
     
   














}


?>