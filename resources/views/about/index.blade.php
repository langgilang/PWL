@extends('layout.master')

@section('title_content','About')

@section('content')
<div class="col-lg-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Data User</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="/about/add" class="btn btn-success">Tambah Data</a>
                </div>
            </div><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $a)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $a->nim }}</td>
                        <td>{{ $a->nama }}</td>
                        <td class="project-actions text-left">
                            <a href="/about/{{ $a->id }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-folder">
                                    Detil
                                </i>
                            </a>
                            <a href="/about/edit/{{ $a->id }}" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt">
                                    Edit
                                </i>
                            </a>
                            <a href="/about/delete/{{ $a->id }}" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash">
                                    Delete
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>&nbsp;
            <div class="dataTables_info" role="status" aria-live="polite">
                Showing {{ $abouts->currentPage() }} to {{ $abouts->total() }} of {{ $abouts->perPage() }} entries               
            </div>
        </div>
        
    </div>
    
</div>

@endsection