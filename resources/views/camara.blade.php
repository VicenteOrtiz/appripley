@extends('layouts.app')

@section('content')


	<center>
		<h2>Escanear código de barras</h2>
		<br>
		<input type="file" accept="image/*" capture="camera" onchange="readURL(this);"/>
		<br>
		<br>
		<br>

		<div id="mydiv" src="#" style="display: none;">
	    	<img id="blah" src="#" alt="your image" {{-- style="display: none;" --}} />
			<br>
			<br>
			<br>
    	</div>

		<a href="/infoproducto" class="btn btn-primary btn-lg active gabriel" role="button" aria-pressed="true">Ver producto</a>
	</center>
	

<script type="text/javascript">
	function readURL(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#mydiv')
	            	.show();
	            $('#blah')
	                .attr('src', e.target.result)
	                .width(150)
	                .height(200);
	        };

	        reader.readAsDataURL(input.files[0]);
	    }
	}
</script>

@endsection
