@extends('homepage.lay.app')

@section('body')
<div class="container-fluid padding">
	<div class="row welcome">
		<div class="col-lg-12 text-center">
			<h1 class="display-4">Berita</h1>
			<hr>
		</div>
		@foreach ($berita as $ber)
			<div class="col-lg-6 text-center">
				<a href="{{ url('/publikasi/berita/' . $ber->id) }}">
					<h3>{{ $ber->judul }}</h3>
					<img src="{{ asset($ber->images) }}" class="img-fluid">
				</a>
			</div>
		@endforeach

	</div>
	
	
</div>
@endsection

@section('script')

@endsection