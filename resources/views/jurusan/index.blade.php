@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h2>Jurusan</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table">
                            <thead>
                                <th>No</th>
                                <th>Nama Jurusan</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($jurusan as $item)

                                @endforeach
                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
