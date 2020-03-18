@extends('layouts.master')
@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Change Password</h3>
				</div>
				<div class="panel-body">
					<div class="card-body">
					
					<form class="form-horizontal" method="POST" action="{{ route('user.changePassword') }}">
					{{ csrf_field() }}
 
					<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
						<label for="new-password" class="col-md-4 control-label">Current Password</label>
 	
					<div class="col-md-6">
						<input id="old_password" type="password" class="form-control" name="old_password" required>
 
					@if ($errors->has('current-password'))
						<span class="help-block">
							<strong>{{ $errors->first('current-password') }}</strong>
						</span>
					@endif
					</div>
					</div>
 
					<div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
						<label for="new-password" class="col-md-4 control-label">New Password</label>
 
					<div class="col-md-6">
						<input id="new-password" type="password" class="form-control" name="new-password" required>
 
					@if ($errors->has('new-password'))
						<span class="help-block">
							<strong>{{ $errors->first('new-password') }}</strong>
						</span>
					@endif
					</div>
					</div>
 
					<div class="form-group">
						<label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>
 
						<div class="col-md-6">
							<input id="new-password-confirm" type="password" class="form-control" name="new-password-confirm" required>
						</div>
					</div>
 
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">Change Password</button>
					</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection