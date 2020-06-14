@extends('welcome')
@section('content')
<div class="col-lg-8 col-md-8">
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
                <h3>DETAIL PENDAFTARAN PASIEN</h3>
            </div>
            <table class="table">
                <tr>
                    <td>Nama</td>
                    <td>{{ $data->nama }}</td>
                </tr>
                <tr>
                    <td>J. Kelamin</td>
                    <td>{{ $data->jk }}</td>
                </tr>
                <tr>
                    <td>TTL </td>
                    <td>{{ $data->tgl_lahir }}</td>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td>
                    <td>{{ $data->alamat }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <td>Nomor Telephone</td>
                    <td>{{ $data->no_telp }}</td>
                </tr>
                <tr>
                    <td>Rt / Rw</td>
                    <td>{{ $data->rtrw }}</td>
                </tr>
                <tr>
                    <td>Keluhan</td>
                    <td>{{ $data->kelurahan }}</td>
                </tr>
            </table>
        </div>


    </div>
    <hr />
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
            <tt>Silahkan masukan kode otp yang di kirim ke email {{ $data->email }}</tt>
             <form role="form" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </span>
                    </div>
                    <input class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" type="username" value="{{  @old('username') }}">
                  </div>
                </div>
                 <div class="text-center">
                  <button type="submit"  class="btn btn-primary my-4">Kirim</button>
                </div>
              </form>
             </div>
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
                          }
                        $('#form_result').html(html);
                  }, error: function(xhr, error, status) {
                        // swal('warning', 'Batal ', 'error');
                        alert(error)
                    }
                });
            })
        });
@endsection
