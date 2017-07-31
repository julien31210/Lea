@extends('layouts.app')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		@if($events->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Event's Title</th>
					<th>Start</th>
					<th>End</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1;?>
				@foreach($events as $event)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					<td><a href="{{ url('/' . $event->id) }}">{{ $event->title }}</a></td>
					<td>{{ ($event->start_date) }}</td>
					<td>{{($event->end_date) }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ url('/' . $event->id . '/edit')}}">
							<span class="glyphicon glyphicon-edit"></span> Edit</a> 
							<a class="btn btn-danger btn-xs" href="{{ route('delete', $event->id) }}"><span class="glyphicon glyphicon-delete"></span> Delete</a> 

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
			<h2>No event yet!</h2>
			@endif
		</div>
	</div>
	@endsection