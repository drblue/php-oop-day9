@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                	<ul>
                		@foreach ($products as $product)
                			<li><a href="/products/{{ $product->id }}">{{ $product->name }}</a> ({{ $product->price }} kr)</li>
						@endforeach
                    </ul>

					<h2>Create New Product</h2>
                    <form method="post">
                    	{{ csrf_field() }}
						<input type="text" name="name" placeholder="Product Name">

						<input type="number" name="price" placeholder="Product Price">

						<input type="submit" value="Create Product Naow!">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
