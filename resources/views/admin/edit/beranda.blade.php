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
    <form action="{{ url('administrator/editfile/beranda') }}" method="post">
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


{{-- Slider Images --}}
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
                                    <button type="button" class="btn btn-info btn-warning" data-src="{{ asset('img/resize_slider/'.$sld->img) }}" data-idimage="{{$sld->id}}" data-toggle="modal" data-target="#Edit_Slider">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-src="{{ asset('img/resize_slider/'.$sld->img) }}" data-idimage="{{$sld->id}}" data-toggle="modal" data-target="#Hapus_Slider">
                                        Delete
                                    </button>
                                </span>
                            </div>
                        </div>
                    @endforeach
                    <div class="col col-xs-12 col-sm-12 col-md-8 col-lg-4 align-self-center" style="margin-bottom: 2em;">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#Tambah_Slider">
                            <i class="fas fa-plus"></i>
                            Add New Images
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>


{{-- Sejarah --}}
    <form name="sejarah_form" action="{{ url('administrator/editfile/beranda') }}" method="post">
    @csrf
        <div class="card card-info card-tabs">
            <div class="card-header p-0 pt-1">
                <div class="card-title">
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
                        <li class="nav-item">
                            <a class="nav-link" id="video-tab" data-toggle="pill" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
                        </li>
                    </ul>
                </div>
                <div class="card-tools">
                    <input type="hidden" name="bagian" value="sejarah">
                    <button id="sejarah_button" style="display:none;" type="submit" class="btn btn-tool btn-primary">Simpan</button>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content" id="sejarah-tabContent">
                    <div class="tab-pane fade show active" id="kalimat" role="tabpanel" aria-labelledby="kalimat-tab">
                        <textarea class="form-control" rows="3" id="Sejarah_textarea" name="Sejarah_Kalimat" style="margin-top: 0px; margin-bottom: 0px; height: 127px;" placeholder="Sejarah - Kalimat">{{$sejarah->kalimat}}</textarea>
                    </div>
                    <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">
                        @foreach ($sejarah->tujuan as $tujuan)
                            <input class="form-control form-control-sm" id="sejarah_{{$loop->index}}" name="Sejarah_Tujuan[]" type="text" placeholder="Sejarah - Tujuan" value="{{$tujuan}}">
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="lingkup" role="tabpanel" aria-labelledby="lingkup-tab">
                        @foreach ($sejarah->lingkup as $lingkup)
                            <input class="form-control form-control-sm" id="lingkup_{{$loop->index}}" name="Lingkup_Tujuan[]" type="text" placeholder="Lingkup - Tujuan" value="{{$lingkup}}">
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                        <p>Video harus berasal dari youtube, klik kanan pada video youtube yang ingin dicantumkan, lalu "copy embed video", dan pastekan dibawah ini</p>
                        <input class="form-control form-control-sm" id="videotentang" name="Video_Tentang" type="text" placeholder="Sejarah - Video" value="{{$videotentang->video}}">
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </form>


{{-- Visi & Misi --}}
    <form name="visimisi_form" action="{{ url('administrator/editfile/beranda') }}" method="post">
    @csrf
        <div class="card card-info card-tabs">
            <div class="card-header p-0 pt-1">
                <div class="card-title">
                    <ul class="nav nav-tabs" id="visimisi-tab" role="tablist">
                        <li class="pt-2 px-3"><h3 class="card-title">Visi&Misi</h3></li>
                        <li class="nav-item">
                            <a class="nav-link active" id="visi-tab" data-toggle="pill" href="#visi" role="tab" aria-controls="visi" aria-selected="true">Visi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="misi-tab" data-toggle="pill" href="#misi" role="tab" aria-controls="misi" aria-selected="false">Misi</a>
                        </li>
                    </ul>
                </div>
                <div class="card-tools">
                    <input type="hidden" name="bagian" value="visimisi">
                    <button id="visimisi_button" style="display:none;" type="submit" class="btn btn-tool btn-primary">Simpan</button>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content" id="visimisi-tabContent">
                    <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="visi-tab">
                            <textarea class="form-control form-control-sm" id="visi_input" name="Visi" type="text" placeholder="VIsi">{{$visi_misi->visi}}</textarea>
                    </div>
                    <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="misi-tab">
                        @foreach ($visi_misi->misi as $misi)
                            <input class="form-control form-control-sm" id="misi_{{$loop->index}}" name="Misi[]" type="text" placeholder="Misi" value="{{$misi}}">
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </form>


{{-- Struktur Kepengurusan --}}
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Struktur Kepengurusan</h3>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach ($struktur as $strk)
                        <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-4" style="margin-bottom: 2em;">
                            <div class="input-group input-group-sm">
                                <div class="text-center">
                                    <div class="text">{{ $strk->nama }}</div>
                                    <div class="text">{{ $strk->jabatan }}</div>
                                    <img src="{{ asset($strk->images) }}">
                                    <br>
                                    <button type="button" class="btn btn-info btn-warning" data-nama="{{ $strk->nama }}" data-src="{{ asset($strk->images) }}" data-idimage="{{$strk->id}}" data-toggle="modal" data-target="#Pengurus_Edit">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>


{{-- FORM MODAL SLIDERS --}}
    <form action="{{ url('administrator/tambah/beranda') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Modal Tambah Slider-->
        <div class="modal fade" id="Tambah_Slider" style="display: none;" aria-hidden="true">
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
                                <label class="custom-file-label" id="sliderimageuploadlabel" for="sliderimagesupload">Choose file</label>
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
    <form action="{{ url('administrator/editfile/beranda') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Modal Edit Slider-->
        <div class="modal fade" id="Edit_Slider" style="display: none;" aria-hidden="true">
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
                        <img src="" id="imageSRCEdit"><br>
                        <label for="sliderimagesedit">Pilih Images File Terbaru</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="sliderimagesedit" accept="image/png, image/jpeg, images/jpg">
                                <label class="custom-file-label" id="sliderimageeditlabel" for="sliderimagesedit">Choose file</label>
                            </div>
                        </div>
                    </div>
                        {{-- <input type="file" name="img[]" class="custom-file-input" id="sliderimagesupload" accept="image/png, image/jpeg, images/jpg" multiple>
                        <label class="custom-file-label" id="sliderimageuploadlabel" for="sliderimagesupload">Choose file</label> --}}
                    <input type="hidden" id="editID" name="id_image">
                    <input type="hidden" name="bagian" value="slider_images">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </form>

{{-- FORM MODAL PENGURUS --}}
    <form action="{{ url('administrator/editfile/beranda') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Modal Edit Slider-->
        <div class="modal fade" id="Pengurus_Edit" style="display: none;" aria-hidden="true">
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
                        <img src="" id="pengurusSRCEdit"><br><br>
                        <label for="pengurusnameedit">Ubah Nama</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="text" name="nama" class="form-control form-control-sm" id="pengurusnameedit">
                            </div>
                        </div>
                        <label for="pengurusimageedit">Ubah Avatar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="pengurusimageedit" accept="image/png, image/jpeg, images/jpg">
                                <label class="custom-file-label" id="pengurusimageeditlabel" for="pengurusimageedit">Choose file</label>
                            </div>
                        </div>
                    </div>
                        {{-- <input type="file" name="img[]" class="custom-file-input" id="sliderimagesupload" accept="image/png, image/jpeg, images/jpg" multiple>
                        <label class="custom-file-label" id="sliderimageuploadlabel" for="sliderimagesupload">Choose file</label> --}}
                    <input type="hidden" id="pengurusID" name="id_image">
                    <input type="hidden" name="bagian" value="pengurus">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Edit</button>
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


    // FUNGSI MODAL SLIDER
        $('#Tambah_Slider').on('show.bs.modal', function(event) {
            var profilePic = document.getElementById('sliderimagesupload');
            $(document).ready(function(){
                $('#sliderimagesupload').change(function(e){
                    if($('#sliderimagesupload')[0].files){
                        var numFiles = $('#sliderimagesupload')[0].files
                        for (var i = 0; i < numFiles.length; i++)
                        {
                            if (i == 0) {
                                var strings = numFiles[i].name;
                            }
                            else {
                                strings = strings+","+numFiles[i].name;
                            }
                        }
                        if(strings != undefined) {
                            var res = strings.slice(0, 40)+" ...";
                            document.getElementById('sliderimageuploadlabel').innerText = res;
                        }
                    }
                });
            });
        });

    // FUNGSI Edit SLIDER
        $('#Edit_Slider').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('idimage')
            var src = button.data('src')
            var modal = $(this)
            modal.find('.modal-title').text('Edit Image Slider');
            document.getElementById("imageSRCEdit").src = src;
            modal.find('.modal-body #editID').val(id);
            $('#sliderimagesedit').change(function(e){
                if($('#sliderimagesedit')[0].files){
                    var numFiles = $('#sliderimagesedit')[0].files
                    var strings = numFiles[0].name;
                    var res = strings.slice(0, 40)+" ...";
                    document.getElementById('sliderimageeditlabel').innerText = res;
                    // console.log(numFiles[0]);
                    // for (var i = 0; i < numFiles.length; i++)
                    // {
                    //     if (i == 0) {
                    //         var strings = numFiles[i].name;
                    //     }
                    //     else {
                    //         strings = strings+","+numFiles[i].name;
                    //     }
                    // }
                    // if(strings != undefined) {
                    // }
                }
            });
        })

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


    // FUNGSI SUBMIT BUTTON Sejarah
        var y = document.getElementById("sejarah_button");
        var e = document.forms["sejarah_form"].getElementsByTagName('input');
        var i;
        var s = 0;
        var jq = '';
        var temp_tentang = new Array();
        for( i=0; i<e.length; i++ ){
            if(e[i].type == "text") {
                if(e[i].placeholder == 'Sejarah - Tujuan' || e[i].placeholder == 'Lingkup - Tujuan'){
                    temp_tentang[s] = [e[i].id, e[i].value];
                    jq += '#' + e[i].id + ', ';
                    s++;
                }
            }
        }
        var sej_con = document.getElementById('Sejarah_textarea').value.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
        var video_con = document.getElementById('videotentang').value;
        var sej_in_id = jq.slice(0,-2);
        function comparetentang() {
            var i;
            for (i = 0; i < temp_tentang.length; i++) {
                var getdatabyID = document.getElementById(temp_tentang[i][0]).value.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
                var sej_con_new = document.getElementById('Sejarah_textarea').value.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
                var video_con_new = document.getElementById('videotentang').value;
                if(video_con != video_con_new || sej_con != sej_con_new || getdatabyID != temp_tentang[i][1]) {
                    y.style.display = "inline-block";
                    break;
                }
                else {
                    y.style.display = "none";
                }
            }
        }

        $('#Sejarah_textarea').each(function(){
            $(this).on("input", function () {
                comparetentang();
            });
        });

        $(sej_in_id).each(function(){
            $(this).on("input", function () {
                comparetentang();
            });
        });

        $('#videotentang').each(function(){
            $(this).on("input", function () {
                comparetentang();
            });
        });

    // FUNGSI SUBMIT BUTTON VISI&MISI
        var visibutton = document.getElementById("visimisi_button");
        var visiforms = document.forms["visimisi_form"].getElementsByTagName('input');
        var visivariable;
        var visiloop = 0;
        var visikey_temp = '';
        var temp_visi = new Array();
        for( visivariable=0; visivariable<visiforms.length; visivariable++ ){
            if(visiforms[visivariable].type == "text") {
                if(visiforms[visivariable].placeholder == 'Misi'){
                    temp_visi[visiloop] = [visiforms[visivariable].id, visiforms[visivariable].value];
                    visikey_temp += '#' + visiforms[visivariable].id + ', ';
                    visiloop++;
                }
            }
        }


        var visi_con = document.getElementById('visi_input').value;
        function comparevisi() {
            var loopvisi;
            for (loopvisi = 0; loopvisi < temp_visi.length; loopvisi++) {
                var getdatabyIDVIsi = document.getElementById(temp_visi[loopvisi][0]).value;
                var visi_con_new = document.getElementById('visi_input').value;
                if(visi_con != visi_con_new || getdatabyIDVIsi != temp_visi[loopvisi][1]) {
                    visibutton.style.display = "inline-block";
                    break;
                }
                else {
                    visibutton.style.display = "none";
                }
            }
        }


        $('#visi_input').each(function(){
            $(this).on("input", function () {
                comparevisi();
            });
        });

        visikey_temp = visikey_temp.slice(0,-2);
        $(visikey_temp).each(function(){
            $(this).on("input", function () {
                comparevisi();
            });
        });


    //FUNGSI EDIT PENGURUS
        $('#Pengurus_Edit').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('idimage')
                var src = button.data('src')
                var nama = button.data('nama')
                var modal = $(this)
                modal.find('.modal-title').text('Edit Struktur Kepengurusan');
                document.getElementById("pengurusSRCEdit").src = src;
                modal.find('.modal-body #pengurusID').val(id);
                modal.find('.modal-body #pengurusnameedit').val(nama);
                $('#pengurusimageedit').change(function(e){
                    if($('#pengurusimageedit')[0].files){
                        var numFiles = $('#pengurusimageedit')[0].files
                        var strings = numFiles[0].name;
                        var res = strings.slice(0, 40)+" ...";
                        document.getElementById('pengurusimageeditlabel').innerText = res;
                    }
                });
            })
    </script>
@endsection