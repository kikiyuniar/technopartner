@extends('dashboard.index')
@section('main')
    <div class="row mt-5">
        <div class="col">
            @if (session('errors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Something it's wrong:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <form action="{{url('action_transaksi')}}" method="post" >
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Transaksi</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama transaksi ..." name="nama_transaksi">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nominal</label>
                    <input type="number" class="form-control" placeholder="Masukkan nominal transaksi ..." name="nominal_transaksi">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-success">Tambah</button>
            </form>
        </div>
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Transaksi</th>
                        <th>Jenis Transaksi</th>
                        <th>Deskripsi</th>
                        <th>Nominal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->jenis}}</td>
                        <td>{!! Str::limit( strip_tags($item->deskripsi),50)!!}</td>
                        <td>{{$item->harga}}</td>
                        <td>
                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalkategori">Edit</button>
                            <a href="" class="btn btn-outline-primary">Primary</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


{{-- modal --}}
<div class="modal fade" id="modalkategori" tabindex="-1" aria-labelledby="modalkategoriLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalkategoriLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection