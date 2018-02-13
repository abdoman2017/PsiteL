

@extends('layouts.app')


@section('content')





	<title>Ajouter un Produit</title>
	
	<form action="ajout" method="POST">
         {{ csrf_field() }}
         <div class="form-group @if($errors->get('description')) has-error @endif">
        Description Produit :
		<input type="text" name="description" class="form-control " value="{{ Request::old('description') }}"   placeholder="Description du Produit" >

        @if($errors->get('description'))
         
	        
		     @foreach($errors->get('description') as $message)
		        <li>{{ $message }}</li>
		     @endforeach
		@endif
	        
        


	    </div>
        </br>
	    <div class="form-group @if($errors->get('reference')) has-error @endif">
		Référence Produit : <input type="text" name="reference" class="form-control" value="{{ Request::old('reference') }}"   placeholder="Référence du Produit">

         @if($errors->get('reference'))
         
	        
		     @foreach($errors->get('reference') as $message)
		        <li>{{ $message }}</li>
		     @endforeach
		@endif



	    </div>
	</br>

        <div class="form-group @if($errors->get('prix')) has-error @endif">
		Prix Produit : <input type="text" name="prix" class="form-control" value="{{ Request::old('prix') }}"   placeholder="Prix du Produit">

      @if($errors->get('prix'))
         
	        
		     @foreach($errors->get('prix') as $message)
		        <li>{{ $message }}</li>
		     @endforeach
		@endif

    </div>
	</br>

        <div class="form-group @if($errors->get('qte')) has-error @endif">
		Quantité Produit : <input type="text" name="qte" class="form-control" value="{{ Request::old('qte') }}" placeholder="Quantité du Produit">

     @if($errors->get('qte'))
         
	        
		     @foreach($errors->get('qte') as $message)
		        <li>{{ $message }}</li>
		     @endforeach
		@endif


    </div>
	</br>
		<center><input type="submit" class="btn btn-primary" value="Ajouter Produit"></center>
		
	</form></br>








<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
@endsection