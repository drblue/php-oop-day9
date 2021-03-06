@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Basket</div>

                <div class="panel-body">
                	<ul>
                		@foreach ($basket->items as $item)
                			<li>{{ $item->quantity }} pcs of {{ $item->product->name }}</li>
						@endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
