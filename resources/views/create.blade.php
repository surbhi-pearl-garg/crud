@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<form action ="{{ URL('users') }}{{ isset($user) ? '/'$user->id : '' }}" method="post">
			<div class ="form-group">
				{{csrf_field() }}
				@if (isset($user))
				{{ method_field('PUT') }}
				@endif
				<input type="text" name="nama" placeholder="Nama" class="form-control" value="{{ isset($user) ? $user->name : '' }}">
				<input type="email" name="email" placeholder="Email" class="form-control" value="{{ isset($user) ? $user->email : ''  }}">
				<button type="submit" class="btn btn-sm btn-success">Simpon</button>
			</div>
		</form>
	</div>
	</div>
@endsection