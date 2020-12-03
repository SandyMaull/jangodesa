@extends('admin.layouts.app')
@section('title')
Jango Desa - Publikasi - Berita
@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('breadcrumb')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Publikasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Publikasi</li>
                    <li class="breadcrumb-item active">Berita</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        {{-- <div class="card-title">
            <span>Data Seluruh Berita Jango desa</span>
            <form action="{{ url('/administrator/publikasi/berita/search') }}" method="post">
                @csrf
                <input  name="search_text" type="text"/>
                <input type="submit"/>
            </form>
        </div> --}}
        <h3 class="card-title">
            <i class="ion ion-clipboard mr-1"></i>
            Data Seluruh Berita Jango desa
            <form action="{{ url('/administrator/publikasi/berita/search') }}" method="post">
                @csrf
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="search" placeholder="Cari data berita">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-primary btn-flat">Cari</button>
                    </span>
                </div>
            </form>
        </h3>
        <div class="card-tools">
            <a href="{{ url('/administrator/publikasi/berita/add') }}" class="btn btn-primary btn-sm">Tambah Berita Baru</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="berita_table_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="berita_table" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                        aria-describedby="berita_table_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="berita_table" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="No: activate to sort column descending">No.
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="berita_table" rowspan="1" colspan="1"
                                    aria-label="Judul: activate to sort column ascending">Judul</th>
                                <th class="sorting" tabindex="0" aria-controls="published_table" rowspan="1" colspan="1"
                                    aria-label="Published: activate to sort column ascending">Status Publikasi</th>
                                <th aria-controls="berita_table" rowspan="1" colspan="1"
                                    aria-label="Action" style="">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $ber)
                                @php
                                    if ($loop->iteration % 2 == 0) {
                                        $class = 'even';
                                    }
                                    else {
                                        $class = 'odd';
                                    }

                                    if ($ber->published == 1) {
                                        $publish = 'Terpublikasi';
                                    }
                                    else {
                                        $publish = 'Belum Terpublikasi';
                                    }
                                @endphp
                                <tr role="row" class="{{$class}}">
                                    <td tabindex="0" class="sorting_1">{{ $loop->iteration }}</td>
                                    <td>{{ $ber->judul }}</td>
                                    <td>
                                        {{ $publish }}</td>
                                    <td>
                                        <div class="row text-center">
                                            <div class="col-4">
                                                @if ($ber->published == 0)
                                                    <a href="" data-href="{{ url('/administrator/publikasi/berita/pub/'.$ber->id) }}" data-judul="{{ $ber->judul }}" data-publish="{{ $ber->published }}" data-toggle="modal" data-target="#modal-publish-berita"><i class="fas fa-eye"></i>Publikasikan</a>
                                                @else
                                                    <a href="" data-href="{{ url('/administrator/publikasi/berita/unpub/'.$ber->id) }}" data-judul="{{ $ber->judul }}" data-publish="{{ $ber->published }}" data-toggle="modal" data-target="#modal-publish-berita"><i class="fas fa-eye-slash"></i>Sembunyikan</a>
                                                @endif
                                            </div>
                                            <div class="col-4">
                                                <a href="{{ url('/administrator/publikasi/berita/edit/'.$ber->id) }}"><i class="fas fa-edit"></i>Ubah</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="" data-href="{{ url('/administrator/publikasi/berita/del/'.$ber->id) }}" data-id="{{ $ber->id }}" data-judul="{{ $ber->judul }}" data-toggle="modal" data-target="#modal-delete-berita"><i class="fas fa-trash-alt"></i>Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">No.</th>
                                <th rowspan="1" colspan="1">Judul</th>
                                <th rowspan="1" colspan="1">Status Publikasi</th>
                                <th rowspan="1" colspan="1">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    {{ $berita->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
{{-- Modal Publish --}}
    <div class="modal fade" id="modal-publish-berita" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda serius ingin <span id="body-text-modal"></span> berita yang berjudul "<span id="judul"></span>" ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="" id="publish-berita-button" class="btn btn-primary"></a>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

{{-- Modal Delete --}}
    <div class="modal fade" id="modal-delete-berita" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda serius ingin menghapus berita yang berjudul "<span id="judul"></span>" ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="" id="hapus-berita-button" class="btn btn-danger">Hapus</a>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@section('script')
{{-- datatables --}}
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
//FUNGSI TABLE BERITA
    $(function () {
    // Modal DataTables
        $('#berita_table').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": false,
            "autoWidth": true,
            "responsive": true,
        });
    // Modal Publish
        $('#modal-publish-berita').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var judul = button.data('judul')
            var publish = button.data('publish')
            var href = button.data('href')
            var modal = $(this)
            // console.log(publish);
            if (publish == 1) {
                var publish_text = "menyembunyikan";
                document.getElementById("publish-berita-button").innerHTML = "Sembunyikan";
            }
            else {
                var publish_text = "mempublikasikan";
                document.getElementById("publish-berita-button").innerHTML = "Publikasikan";
            }
            modal.find('.modal-title').text('Publikasi Data Berita');
            document.getElementById("judul").innerHTML = judul;
            document.getElementById("body-text-modal").innerHTML = publish_text;
            document.getElementById("publish-berita-button").href = href;
            
        });
    // Modal Delete
        $('#modal-delete-berita').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var judul = button.data('judul')
            var href = button.data('href')
            var modal = $(this)
            modal.find('.modal-title').text('Hapus Data Berita');
            document.getElementById("judul").innerHTML = judul;
            document.getElementById("hapus-berita-button").href = href;
        });
    });
</script>
@endsection
