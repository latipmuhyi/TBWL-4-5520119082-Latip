@extends('adminlte::page')

@section('title', 'Laporan Masuk')

@section('content_header')
<h1>BOOK PAGE</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Laporan Barang Masuk') }}

                </div>
                <div class="card-body">
                    {{-- <button class="btn btn-primary float-left mr-3" data-toggle="modal" data-target="#tambahBukuModal"><i class="fa fa-plus"></i> Add Data</button> --}}
                    <a href="{{route('admin.print.bmasuk')}}" target="_blank" class="btn btn-secondary mb-5"><i class="fa fa-print"></i>Print to PDF</a>
                    <div class="btn-group mb-5" role="group" aria-label="Basis Example">
                        <a href="{{route('admin.book.export')}}" class="btn btn-info" target="_blank">Exports</a>
                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#importDataModal">Import</a>
                    </div>
                    <table id="table-data" class="table table-borderer display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>KATEGORI</th>
                                <th>MEREK</th>
                                <th>HARGA</th>
                                <th>STOK</th>
                                <th>METHOD</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($product as $key)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$key->name}}</td>
                                <td>{{$key->categories_id}}</td>
                                <td>{{$key->brands_id}}</td>
                                <td>{{$key->harga}}</td>
                                <td>{{$key->stok}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('js')
<script>
    $(function() {
        $("#datepicker").datepicker({
            format: "yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
        });
        $(document).on('click', '#btn-delete-buku', function() {
            let id = $(this).data('id');
            let judul = $(this).data('judul');
            let cover = $(this).data('cover');
            $('#delete-id').val(id);
            $('#delete-old-cover').val(cover);
            $('#delete-judul').text(judul);
            console.log("hallo");
        });



        $(document).on('click', '#btn-edit-buku', function() {
            let id = $(this).data('id');


            $('#image-area').empty();

            $.ajax({
                type: "get",
                url: baseurl + '/admin/ajaxadmin/dataBuku/' + id,
                dataType: 'json',
                success: function(res) {
                    $('#edit-judul').val(res.judul);
                    $('#edit-penerbit').val(res.penerbit);
                    $('#edit-penulis').val(res.penulis);
                    $('#edit-tahun').val(res.tahun);
                    $('#edit-id').val(res.id);
                    $('#edit-old-cover').val(res.cover);

                    if (res.cover !== null) {
                        $('#image-area').append(
                            "<img src='" + baseurl + "/storage/cover_buku/" + res.cover + "' width='200px'/>"
                        );
                    } else {
                        $('#image-area').append('[Gambar tidak tersedia]');
                    }
                },
            });
        });

    });
</script>
@stop
@section('js')
<script>

</script>
@stop
