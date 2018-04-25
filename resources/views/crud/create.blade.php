@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3><center>CRUD DATA MAHASISWA</center></h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('crud.store')}}" method="post">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
							<input type="text" name="nama" class="form-control" placeholder="Nama">
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
							<input type="text" name="alamat" class="form-control" placeholder="Alamat">
							{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
							<input type="date" name="tanggal_lahir" class="form-control" placeholder="yyyy/mm/dd">
						
							{!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
							<input type="text" name="no_hp" class="form-control" placeholder="Nomer Hp">
							{!! $errors->first('no_hp', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
							<input type="text" name="semester" class="form-control" placeholder="Semester">
							{!! $errors->first('semester', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
</script>
@endsection