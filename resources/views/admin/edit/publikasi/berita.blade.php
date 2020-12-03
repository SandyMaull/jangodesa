@extends('admin.layouts.app')
@section('title')
Jango Desa - Publikasi - Ubah Berita
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('breadcrumb')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Berita</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Publikasi</li>
                    <li class="breadcrumb-item"><a href="{{ url('/administrator/publikasi/berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Ubah Berita</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
    <form class="form-horizontal" method="POST" action="{{ url('/administrator/publikasi/berita/edit_post') }}">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="judul_berita_id" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" id="judul_berita_id" placeholder="Judul Berita" value="{{ $berita->judul }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="konten_berita_id" class="col-sm-2 col-form-label">Konten Berita</label>
                <div class="col-sm-10">
                    <div class="mb-3">
                        <textarea class="textarea" placeholder="Place some text here" name="konten" 
                        style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                        >{{ $berita->content }}</textarea>
                        <input type="hidden" name="id_berita" value="{{ $berita->id }}">
                    </div>
                    @if ($berita->published == 1)
                        <input type="checkbox" id="published" name="published" value="Check" checked>
                        
                    @else
                        <input type="checkbox" id="published" name="published" value="Check">
                    @endif
                    <label for="published"> Publish Berita</label>
                    <p class="text-sm mb-0">
                        Untuk mengupload foto/gambar, disarankan resolusi dibawah 1280x720
                    </p>
                    <p class="text-sm mb-0">
                        Editor <a href="https://github.com/summernote/summernote">Documentation and license
                        information.</a>
                    </p>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="{{ url('/administrator/publikasi/berita') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info float-right">Ubah Berita</button>
        </div>
        <!-- /.card-footer -->
    </form>
@endsection

@section('script')
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
    // Fungsi Summernote Text Editor
      $('.textarea').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']],
                // ['font', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen']],
            ]
      });
    $(document).ready(function(){
        $("img").addClass("img-responsive");
        $("img").css("max-width", "100%");
    });
    })
</script>
@endsection
