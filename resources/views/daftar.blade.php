@extends('layouts.main')
@section('container')

</div>
<div class="container">
    <div class="row mb-5 mt-5">
        <div class="col-md-6">
          <div class="card mb-5" style="width: 40rem;">
              <form action="/daftar" method="post">
                @csrf
                <h1 class="fw-bold text-dark">JOIN US NOW</h1>
                <p class="mb-5">Silahkan isi form berikut untuk permintaan pendaftaran.
                  Kami akan segera menghubungi anda via email untuk selengkapnya.</p>
                <div class="mb-3">
                  <label for="nama" class="form-label fw-bold">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama')}}">
                  @error('nama')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                 
                </div>
                <div class="mb-3">
                    <label for="jenisusaha" class="form-label fw-bold">Jenis Usaha</label>
                    <select id="jenisusaha" class="form-select" name="jenisusaha">
                      <option>Laundry</option>
                      <option>Restaurant</option>
                    </select>
                  </div>
                <div class="mb-3">
                  <label for="nomorHP" class="form-label fw-bold">Nomor Telp/HP</label>
                  <input type="text" class="form-control @error('nomorHP') is-invalid @enderror" id="nomorHP" name="nomorHP" required value="{{ old('nomorHP')}}">
                  @error('nomorHP')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label fw-bold">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat')}}" required value="{{ old('alamat')}}" rows="3"></textarea>
                    @error('alamat')
                    <div class="invalid-feedback">
                      {{ $message}}
                    </div>
                    @enderror
                  </div>

                <button type="submit" class="btn btn-primary fw-bold">Daftar Sekarang</button>
              </form>
          </div>
        </div>
        <div class="col-md-6">
            <img src="img/daftar.jpg" alt="">
        </div>
    </div>

@endsection