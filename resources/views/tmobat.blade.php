@extends('layouts.template')
@section('title','Data obat')
@section('content')

@foreach ($load_css as $item)
@php echo $item @endphp
@endforeach

@foreach ($load_js as $item)
@php echo $item @endphp
@endforeach


{{-- table content --}}
<script>
    $(function(){
        $('.alert').fadeOut(300);
        $('#table').on('click', '.edit', function() {
            var access = $(this).attr('to');
            $('.show_form').load(access).slideDown();
        });
        $('#table').on('click', '.delete', function() {
            var id = $(this).attr('id');
            $('#judul').html('Menghapus data menyebab kan data tidak kembali lagi selamanya seperti mantan ? apakah anda yakin ?');
            $('#cetak_data').html('<button id='+id+' class="delete btn btn-danger btn-sm"><i class="fa fa-print"></i> Hapus Data ? </button>');
            $('#confirm').modal('show');
        })
        $('#confirm').on('click','.delete', function() {
            var id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                url: '{{ Url('master/obat/show') }}',
                success:function(data){
                    alert('data berhasil di hapus');
                    $('#example2').DataTable().ajax.reload();
                    $('#confirm').modal('hide');
                },error(error,xhr,status){
                    alert('warning');
                }
            });
        });
    });
</script>


<div class="card">
    <div class="col">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Data master pasien</h3>
            <p class="text-sm mb-0">
                This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in
                order
                to get started fast.
            </p>
        </div>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="table">
                <thead class="thead-light">
                    <tr>
                        <th> Nama </th>
                        <th> Deskrripsi</th>
                        <th> Jumlah Tersedia </th>
                        <th>Satuan </th>
                        <th> Komposisi</th>
                        <th> Kegunaan</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(function(){
            $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
                return {
                    "iStart": oSettings._iDisplayStart,
                    "iEnd": oSettings.fnDisplayEnd(),
                    "iLength": oSettings._iDisplayLength,
                    "iTotal": oSettings.fnRecordsTotal(),
                    "iFilteredTotal": oSettings.fnRecordsDisplay(),
                    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                };
            };
            $('#table').DataTable({
                initComplete: function() {
                    var api = this.api();
                    $('#datatables input')
                    .off('.DT')
                    .on('keyup.DT', function(e) {
                        if (e.keyCode == 13) {
                            api.search(this.value).draw();
                        }
                    });
                },
                oLanguage: {
                    sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'

                },
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ Url('master/obat/table') }}",
                },
                columns: [
                {
                    data: 'DT_RowIndex',
                },
                {
                    data : 'nama',
                },
                {
                    data : 'jk',
                    orderable :false,
                    render: function (data, type, row) {
                        if (data == "P") {
                            return 'Perempuan';
                        }else
                        if (data == "L") {
                            return 'Laki - laki';
                        }
                    }
                },
                {
                    data : 'email',
                },
                {
                    data : 'no_telp',
                },
                {
                    data : 'action',
                    orderable :false,
                }
                ],
                'responsive' : true,
            });


            $('#example2').on('click','.finish',function(){
                var id = $(this).attr('id');
                $('#judul').html('Confirmasi Rapat ini telah selesai <br /> Menset Rapat Selesai Berarti Hasil keputusan musyawarah final klik ok untuk menyelesaikan.');
                $('#cetak_data').html('<button id='+id+' ket="1" class="selesai btn btn-success btn-sm"><i class="fa fa-print"></i> Rapat Selesai</button> <button id='+id+' ket="2" class="selesai btn btn-success btn-sm"><i class="fa fa-print"></i> Rapat Belum Selesai</button>');
                $('#confirm').modal('show');
            });
            $('#confirm').on('click','.selesai', function() {
                var id = $(this).attr('id');
                var ket = $(this).attr('ket');

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: id,
                        status : ket,
                        _token: '{{ csrf_token() }}',
                        _method: 'GET'
                    },
                    url: '{{ Url('notulen_final') }}',
                    success:function(data){
                        $('#form_result').html('<div class="alert alert-info">'+data.success+'</div>');
                        $('#example2').DataTable().ajax.reload();
                        $('#confirm').modal('hide');
                    },error(error,xhr,status){
                        alert('warning');
                    }
                });
            });

            // $('.print_action').click(function(){
                //     var id = $(this).attr('id');
                //     $.ajax({
                    //         url : '{{ Url('notulen/print') }}',
                    //         data: 'id='+id+'&_csrf='+'{{ csrf_token() }}',
                    //         type: 'post',
                    //         success:function(data){
                        //             //      alert('success');
                        //         },error(error,xhr,status){
                            //             alert('warning');
                            //         }
                            //     });
                            // });

                            $('#load_form').on('click',function(){
                                $('.show_form').load($(this).attr('load')).slideDown();
                            });

                        });
</script>
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i> Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="judul"></div>
                <hr />
                <div id="cetak_data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
