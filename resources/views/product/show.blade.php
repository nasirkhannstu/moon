@extends('admin')
@section('title', '| Moonster-Gear')

@section('content')
	<div class="row">
	
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2>{{ $product->name }}</h2>
			</div>

			<div class="panel-body">
				<img src="{{ asset('uploads/product/'. $product->image) }}" alt="img" width="100%">
				<h4>Slug: {!! $product->slug !!}</h4>
				<h4>Price: {!! $product->price !!}</h4>
				<h4>Created At: {!! $product->created_at !!}</h4>
				<br>
				<p class="lead">Description: {!! $product->body !!}</p>
			</div>
		</div>
	</div>
@endsection