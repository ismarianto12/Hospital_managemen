@extends('welcome')
@section('content')
<div class="col-lg-8 col-md-8">
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
                <h4>Daftar Pasien Medis</h4>
            </div>
            <div id="form_result"></div>
            <form role="form" action="{{ route('daftar.store') }}" method="post" id="simpan">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i>
                            </span>
                        </div>
                        <input class="form-control" name="nama" placeholder="Nama Pasien" type="text" value="">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i>
                            </span>
                        </div>
                       <select name="jk" class="form-control">
                         <option value="L">Laki - Laki </option>
                         <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i>
                            </span>
                        </div>
                        <input class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" type="text" value="">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i>
                            </span>
                        </div>
                        <input class="form-control" name="email" placeholder="Email" type="email" value="">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i>
                            </span>
                        </div>
                        <textarea name="alamat" class="form-control" placeholder="Masukan alamat lengkap"
                            value=""></textarea>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i>
                            </span>
                        </div>
                        <textarea name="keluhan" class="form-control" placeholder="Keluhan sakit yang di rasa"
                            value=""></textarea>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-book"></i>
                            </span>
                        </div>
                        <input class="form-control" name="no_telp" placeholder="Nomor Telp" type="text" value="">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i>
                            </span>
                        </div>
                        <input class="form-control" name="rtrw" placeholder="RT / RW" type="text" value="">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i>
                            </span>
                        </div>
                        <input class="form-control" name="kelurahan" placeholder="Nama Kelurahan" type="text" value="">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" id="simpan" class="btn btn-primary my-4">Daftar Pasien</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- validasi --}}
<script>
    $(function() {
          $('#simpan').on('submit', function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'post',
                url: $(this).attr('action'),
                data: formData,
                headers: {
                    '_csrf': '{{ csrf_token() }}'
                },
                dataType: "json",
                success: function(data) {
                    var html = '';
                    if (data.errors) {
                        html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        } else if (data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            window.location.href = data.url;
                         }
                        $('#form_result').html(html);
                  }, error: function(xhr, error, status) {
                        // swal('warning', 'Batal ', 'error');
                        alert(error)
                    }
                });
            })
        });

</script>

{{-- endvalidation --}}
@endsection
