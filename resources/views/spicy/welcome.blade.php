@extends('spicy.layout.first')

{{-- */ $a = "bee"; /* HERE'S A TRICK FOR ASSIGN VARIABLE WITHOUT SHOWING RESULT. --}}

@section('title', $title)

@section('popup')
	<div id="bgpopup" class="bgpopup">
		<p>
			<div class="content-popup"><img src="{{asset('food_asset/assets/img/components/delete.png')}}" align="right"/></div>
	    </p>	
	</div>
@endsection