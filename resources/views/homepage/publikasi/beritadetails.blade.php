@extends('homepage.lay.app')

@section('body')
<div class="container-fluid padding">
	<div class="row welcome">
		<div class="col-lg-12 text-center">
			<h1 class="display-4">{{ $berita->judul }}</h1>
			<hr>
		</div>
        <div class="col-lg-12 text-center">
            {!! $berita->content !!}
        </div>

	</div>
	
	
</div>
@endsection

@section('script')

@endsection