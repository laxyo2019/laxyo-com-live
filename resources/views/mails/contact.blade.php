@extends('layouts.mail')

@section('content')
	<h3>Contacted via contact page on laxyo.com</h3>
	<div>
	    <p>Name: {{ $data['name'] }}</p>
	    <p>Email: {{ $data['email'] }}</p>
	    <p>Address: {{ $data['address'] }}</p>
	    <p>Mobile: {{ $data['mobile'] }}</p>
	    <p>Message: {{ $data['message'] }}</p>
	</div>
@endsection
