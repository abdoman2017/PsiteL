<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use App\http\Requests;
class ProductController extends Controller
{
   public function ViewProduct(){
   $product=Product::all();
   $arr=Array('product'=>$product);
   return view('product.view',$arr);
   }


   public function AjoutProduit(Request $request){

   	if($request->isMethod('post')){
            
      $this->validate($request,[
         'description'=>'required|max:30|min:2|unique:products',
         'reference'=>'required|max:30|min:2|unique:products',
         'prix'=>'required|max:30',
         'qte'=>'required|max:30'
      ]);




   		$NouveauProduit=new Product();
   		$NouveauProduit->description=$request->input('description');
   		$NouveauProduit->reference=$request->input('reference');
   		$NouveauProduit->prix=$request->input('prix');
   		$NouveauProduit->qte=$request->input('qte');
   		$NouveauProduit->save();

   	}

   	return view('product.ajouter');
   }



   public function ModifierProduit(Request $request,$id){
         if($request->isMethod('post')){
         $NouveauProduit=Product::find($id);
         $NouveauProduit->description=$request->input('description');
         $NouveauProduit->reference=$request->input('reference');
         $NouveauProduit->prix=$request->input('prix');
         $NouveauProduit->qte=$request->input('qte');
         $NouveauProduit->save();
            return redirect("product");

         }
         else{


           $product=Product::find($id);
           $arr=Array('product'=>$product);

        return view('product.modifier',$arr);
     }

   }
}
