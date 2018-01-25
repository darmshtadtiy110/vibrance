@extends('layouts.main_template')
@section('content')

<div class="row">
	@foreach($users as $user)
	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="panel">
			<div class="panel-heading">
				<span class="panel-title">{{ $user -> name}}</span>
				<span class="panel-controls">
					<a href="#" class="fa fa-plus"></a>
				</span>
			</div>
			<div class="panel-body">
				<div class="media-left pr30">
                <a href="#">
                  <img class="media-object mw100" src="assets/img/avatars/profile_avatar.jpg" alt="...">
                </a>
              </div>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection