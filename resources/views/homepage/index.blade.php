@extends('homepage.lay.app')
{{-- {{dd($slide)}} --}}
@section('body')
{{-- @foreach ($slide as $sld)
	{{$sld->id}}
@endforeach --}}

	<!--- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			@foreach ($slide as $sld)
			@if ($sld->id == 1)
				<li data-target="#slides" data-slide-to="0" class="active"></li>
			@else
				<li data-target="#slides" data-slide-to="{{$loop->index}}"></li>
			@endif
			@endforeach
		</ol>
		<div class="carousel-inner">
			@foreach ($slide as $sld)

			@if ($sld->id == 1)
				<div class="carousel-item active" >
					<img src="{{ asset('img/'.$sld->img) }}" style="filter: blur(8px);-webkit-filter: blur(8px);">
					<div class="carousel-caption">
						<h1 class="display-2">{{ $header_judul->h1 }}</h1>
						<h3>{{ $header_judul->h3 }}</h3>
					</div>
				</div>	
			@else
				<div class="carousel-item">
					<img src="{{ asset('img/'.$sld->img) }}">
				</div>
			@endif
				
			@endforeach
		</div>
	</div>

	<!--- Sejarah -->
	<div class="container-fluid padding" id="Sejarah">
		<div class="row welcome">
			<div class="col-lg-12 text-center">
				<h1 class="display-4" >Sejarah Jango Desa</h1>
				<hr>
			</div>
			<div class="col-lg-12">
				<p class="lead">{{$sejarah->kalimat}}
				</p>
			</div>
			<div class="col-lg-6">
				<h3 class="display-4">Tujuan Jango Desa</h3>
				<hr>
				@foreach ($sejarah->tujuan as $tjn)
					<p class="display-0">{{$tjn}}</p>
				@endforeach
			</div>
			<div class="col-lg-6">
				<h3 class="display-4">Lingkup Jango Desa</h3>
				<hr>
				@foreach ($sejarah->lingkup as $lkp)
					<p class="display-0">{{$lkp}}</p>
				@endforeach
			</div>
			<div class="col-lg-12 text-center">
				<h3 class="display-4">Video Tentang Jango Desa</h3>
				<hr>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="{{$string}}" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<!--- Visi Misi -->
	<div class="container-fluid padding" id="VisiMisi">
		<div class="row padding align-items-center">
			<div class="col-lg-12 text-center">
				<h1 class="display-4" >Visi&Misi Jango Desa</h1>
				<hr>
			</div>
			<div class="col-lg-6 text-center" >
				<img src="{{ asset('img/logo-bg.png') }}" width="70%" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h3 class="display-4">Visi</h3>
				<p class="display-0">{{$visi_misi->visi}}
				</p>
				<h3 class="display-4">Misi</h3>
				@foreach ($visi_misi->misi as $msi)
	
					<p class="display-0">
						{{$msi}}
					</p>
					
				@endforeach
			</div>
		</div>
	</div>

	<!--- Struktur Pengurus -->
	<div class="container-fluid padding" id="StOrganisasi">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Struktur Organisasi</h1>
				<hr>
			</div>
		</div>
	</div>
	<div class="container-fluid padding">
		<div class="row text-center">
			@foreach ($strk as $struktur)
				@if ($struktur->jabatan == 'Direktur')
					<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<img class="pengurus-img" src="{{ asset($struktur->images) }}" />
						<h3>{{$struktur->jabatan}}</h3>
						<p>{{$struktur->nama}}</p>
					</div>
				@endif
			@endforeach
		</div>
		<div class="row text-center">
			@foreach ($strk as $struktur)
				@if ($struktur->jabatan == 'Koordinator' || $struktur->jabatan == 'Penelitian')
					<div class="col col-xs-12 col-sm-6 col-md-6">
						<img class="pengurus-img" src="{{ asset($struktur->images) }}">
						<h3>{{$struktur->jabatan}}</h3>
						<p>{{$struktur->nama}}</p>
					</div>
				@endif
			@endforeach
		</div>
		<div class="row text-center">
			@foreach ($strk as $struktur)
				@if ($struktur->jabatan == 'Wakil Koordinator 1' || $struktur->jabatan == 'Content Creator' || $struktur->jabatan == 'Web Developer' || $struktur->jabatan == 'Wakil Koordinator 2')
					<div class="col col-xs-12 col-sm-9 col-md-6 col-lg-3">
						<img class="pengurus-img" src="{{ asset($struktur->images) }}">
						<h3 class="display-2">{{$struktur->jabatan}}</h3>
						<p>{{$struktur->nama}}</p>
						@if ($struktur->jabatan == 'Wakil Koordinator 1')
						<!-- Pemberdayaan -->
							<div class="col col-12 text-center">
								<button class="koor1" data-toggle="collapse" data-target="#koor1">{{$strk2[0]->jabatan}}
								</button>
								<div id="koor1" class="collapse">
									<hr>
									<div class="container-fluid">
										<div class="row text-center">
											<div class="col-12">
												<img class="pengurus-img" src="{{ asset($strk2[0]->images) }}">
												<p class="struktur-name">{{$strk2[0]->nama}}</p>
											</div>
										</div>
									</div>
									<hr>
								</div>
							</div>
						@endif
						@if ($struktur->jabatan == 'Wakil Koordinator 2')
							<!-- Keorganisasian -->
							<div class="col col-12 text-center">
								<button class="koor2" data-toggle="collapse" data-target="#koor2">{{$strk2[1]->jabatan}}
								</button>
								<div id="koor2" class="collapse">
									<hr>
									<div class="container-fluid">
										<div class="row text-center">
											<div class="col-12">
												<img class="pengurus-img" src="{{ asset($strk2[1]->images) }}">
												<p class="struktur-name">{{$strk2[1]->nama}}</p>
											</div>
										</div>
									</div>
									<hr>
								</div>
							</div>
						@endif
					</div>
				@endif
			@endforeach
		</div>
	</div>

	<!--- Kontak -->
	<div class="container-fluid padding" id="Connect">
		<div class="row text-center padding">
				<div class="row welcome text-center">
					<div class="col-12">
						<h1 class="display-4">Kontak</h1>
						<hr>
					</div>
				</div>
			<div class="col-12 social padding">
				@php
					$keys = 0;
				@endphp
				@foreach ($kontak as $kntk)
					<a href="{{ $kntk->url }}"><i class="{{$kntk->class}}"></i></a>
				@endforeach
				{{-- @for ($i = 0; $i < $jumlah_kontak; $i++)
				{{$ujang = 0}}
				<a href="{{ $kontak[$kntk_key[$keys]] }}"><i class="fab fa-facebook"></i></a>
				<a href="{{ $kontak->phone }}"><i class="fab fa-google-plus-g"></i></a>
				<a href="{{ $kontak->ig }}"><i class="fab fa-instagram"></i></a>
				<a href="{{ $kontak->fb }}"><i class="fab fa-youtube"></i></a>
				<a href="{{ $kontak->gmaps }}"><i class="fab fa-youtube"></i></a> --}}
				@php
					$keys += 1;
				@endphp
			</div>
		</div>
	</div>
@endsection