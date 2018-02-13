
@extends('layouts.app')


@section('content')
<div class="container">
<table class="table table-condensed">
	<thead class="thead-dark">
	<tr>
		<th scope="col">Description </th>

		<th scope="col">Référence</th>

		<th scope="col">Prix</th>

		<th scope="col">Quantité</th>

		<th scope="col">Modifier</th>

		<th scope="col">Supprimer</th>

	</tr>
	</thead>

@foreach($product as $myproduct)


	<tr>
		<td>
			{{ $myproduct->description  }}
		</td>

		<td>
			{{ $myproduct->reference  }}
		</td>

		<td>
            {{ $myproduct->prix  }}
		</td>

		<td>
			{{ $myproduct->qte  }}
		</td>

		<td>
			<a href="modifier/{{$myproduct->id}}" class="btn btn-primary">Modifier</a>
		</td>

		<td>
			<a href="ajout/{{$myproduct->id}}" class="btn btn-secondary">Supprimer</a>
		</td>

	</tr>
@endforeach
</table>
</div>

@endsection