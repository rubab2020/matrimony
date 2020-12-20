@extends('layouts.web')

@section('content')
<div class="page-content">
	<div class="container">
		Welcome {{ Auth::user()->name }}
	</div>
</div>