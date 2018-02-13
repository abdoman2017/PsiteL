
@extends('layouts.app')


@section('content')
	<form action="/modifier/{{$product->id }}" method="POST">
         {{ csrf_field() }}

	    Description Produit : <input type="text" class="form-control input-sm" name="description" value="{{$product->description}}" placeholder="Description du Produit"></br>

		Référence Produit : <input type="text" class="form-control input-sm" name="reference" value="{{$product->reference}}" placeholder="Référence du Produit"></br>

		Prix Produit : <input type="text" class="form-control input-sm" name="prix" value="{{$product->prix}}" placeholder="Prix du Produit"></br>

		Quantité Produit : <input type="text" class="form-control input-sm" name="qte" value="{{$product->qte}}" placeholder="Quantité du Produit"></br>
		<center><input type="submit" class="btn btn-primary" value="Modifier Produit"></center>
		
	</form>

@endsection