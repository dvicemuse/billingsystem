@foreach ($errors->all() as $error)
	<div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       {{ $error }}
    </div>
@endforeach