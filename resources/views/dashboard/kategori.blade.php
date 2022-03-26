@extends('dashboard.index')
@section('main')
    <div class="row mt-5">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$item->name}}</td>
                        <td>{!! Str::limit( strip_tags($item->deskripsi),50)!!}</td>
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