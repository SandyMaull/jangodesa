@extends('admin.layouts.app')

@section('title')
    JangoDesa - Beranda Edit
@endsection

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Beranda</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Tampilan</li>
                <li class="breadcrumb-item active">Beranda</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
{{-- Header Name --}}
    <form action="{{ url('administrator/edit/beranda') }}" method="post">
        @csrf
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Judul Slider Images</h3>
                <div class="card-tools">
                    <button id="slider_button" style="display:none;" type="submit" class="btn btn-tool btn-primary">Submit</button>
                </div>
            </div>
            <div class="card-body">
                <input type="hidden" name="bagian" value="judul_images">
                <input id="slider_h1" class="form-control form-control-lg" name="H1" type="text" placeholder="H1" value="{{ $header_judul->h1 }}">
                <br>
                <input id="slider_h3" class="form-control" type="text" name="H3" placeholder="H3" value="{{ $header_judul->h3 }}">
            </div>
            <!-- /.card-body -->
        </div>
    </form>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Slider Images</h3>
            {{-- <div class="card-tools">
                <button type="submit" class="btn btn-tool btn-primary">Submit</button>
            </div> --}}
        </div>
        <div class="card-body">
            <input type="hidden" name="bagian" value="slider_images">
            <input type="hidden" name="url" value="beranda">
            <div class="container">
                <div class="row">
                    @foreach ($slide as $sld)
                        <div class="col col-xs-12 col-sm-12 col-md-8 col-lg-4" style="margin-bottom: 2em;">
                            <div class="input-group input-group-sm">
                                <img src="{{ asset('img/resize_slider/'.$sld->img) }}">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger" data-src="{{ asset('img/resize_slider/'.$sld->img) }}" data-idimage="{{$sld->id}}" data-toggle="modal" data-target="#Hapus_Slider">
                                        Delete
                                    </button>
                                </span>
                            </div>
                        </div>
                    @endforeach
                    <div class="col col-xs-12 col-sm-12 col-md-8 col-lg-4 align-self-center" style="margin-bottom: 2em;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#slider-modal-add">
                            <i class="fas fa-plus"></i>
                            Add New Images
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="card card-info card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="sejarah-tab" role="tablist">
                <li class="pt-2 px-3"><h3 class="card-title">Sejarah</h3></li>
                <li class="nav-item">
                    <a class="nav-link active" id="kalimat-tab" data-toggle="pill" href="#kalimat" role="tab" aria-controls="kalimat" aria-selected="true">Kalimat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tujuan-tab" data-toggle="pill" href="#tujuan" role="tab" aria-controls="tujuan" aria-selected="false">Tujuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lingkup-tab" data-toggle="pill" href="#lingkup" role="tab" aria-controls="lingkup" aria-selected="false">Lingkup</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="sejarah-tabContent">
                <div class="tab-pane fade show active" id="kalimat" role="tabpanel" aria-labelledby="kalimat-tab">
                    <textarea class="form-control" rows="3" name="Sejarah_Kalimat" style="margin-top: 0px; margin-bottom: 0px; height: 127px;" placeholder="Sejarah - Kalimat">{{$sejarah->kalimat}}</textarea>
                </div>
                <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">
                    @foreach ($sejarah->tujuan as $tujuan)
                    <input class="form-control form-control-sm" name="Sejarah_Tujuan_{{$loop->index}}" type="text" placeholder="Sejarah - Tujuan" value="{{$tujuan}}">
                    @endforeach
                </div>
                <div class="tab-pane fade" id="lingkup" role="tabpanel" aria-labelledby="lingkup-tab">
                    @foreach ($sejarah->lingkup as $lingkup)
                    <input class="form-control form-control-sm" name="Lingkup_Tujuan_{{$loop->index}}" type="text" placeholder="Lingkup - Tujuan" value="{{$lingkup}}">
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    {{-- FORM MODAL SLIDERS --}}
    <form action="{{ url('administrator/tambah/beranda') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Modal Tambah Slider-->
        <div class="modal fade" id="slider-modal-add" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Slider Images</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Images File</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="hidden" name="bagian" value="slider_images">
                                <input type="file" name="img[]" class="custom-file-input" id="sliderimagesupload" accept="image/png, image/jpeg, images/jpg" multiple>
                                <label class="custom-file-label" for="sliderimagesupload">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
                </div>
                <!-- /.modal-content -->
            </div>
        <!-- /.modal-dialog -->
        </div>
    </form>
    <form action="{{ url('administrator/delete/beranda') }}" method="post">
        @csrf
        <!-- Modal Delete Slider-->
        <div class="modal fade" id="Hapus_Slider" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <img src="" id="imageSRC">
                        <p>Apakah anda serius ingin menghapus slider image ini ?</p>
                    </div>
                    <input type="hidden" id="deleteID" name="id_image">
                    <input type="hidden" name="bagian" value="slider_images">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </form>
@endsection

@section('script')
    <script>
        // FUNGSI SUBMIT BUTTON JUDUL SLIDER
        var h1 = '{{$header_judul->h1}}';
        var h3 = '{{$header_judul->h3}}';
        var x = document.getElementById("slider_button");
        $("#slider_h1").on("input", function () {
            if (this.value != h1){
                x.style.display = "inline-block";
            }
            else {
                if(document.getElementById("slider_h3").value != h3) {
                    x.style.display = "inline-block";
                } else {
                    x.style.display = "none";
                }
            }
        });
        $("#slider_h3").on("input", function () {
            if (this.value != h3){
                x.style.display = "inline-block";
            }
            else {
                if(document.getElementById("slider_h1").value != h1) {
                    x.style.display = "inline-block";
                } else {
                    x.style.display = "none";
                }
            }
        });
        // FUNGSI HAPUS SLIDER
        $('#Hapus_Slider').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('idimage')
        var src = button.data('src')
        var modal = $(this)

        modal.find('.modal-title').text('Delete Slider ?');
        document.getElementById("imageSRC").src = src;
        modal.find('.modal-body #deleteID').val(id);
        })
    </script>
@endsection