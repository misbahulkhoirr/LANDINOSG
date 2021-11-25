@extends('layouts.main')

@section('container')
@if (session()->has('success'))
<div class="alert alert-success col-lg-10 mt-5" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
  <a href="/dashboard/kategori/create" class="btn btn-primary mb-3">Create new kategori</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Usaha</th>
        <th scope="col">No. Telp/HP</th>
        <th scope="col">Email</th>
        <th scope="col">Alamat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($post as $row)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->jenisusaha }}</td>
        <td>{{ $row->nomorHP }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->alamat }}</td>
        <td>
          {{-- <a href="/dashboard/kategori/{{ $row->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          <form action="/dashboard/kategori/{{ $row->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus ?')"><span data-feather="x-circle"></span></button>
          </form> --}}
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
