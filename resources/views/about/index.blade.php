@extends('layout.master')

@section('title_content','Data User')

@section('content')
<div class="col-lg-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Data User</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="/about/add" class="btn btn-success">
                        <i class="fa fa-plus" aria-hidden="true" style="color: white"></i>
                    </a>
                    <a href="/about/cetak_pdf" class="btn btn-warning">
                        <i class="fa fa-print" aria-hidden="true" style="color: white"></i>
                    </a>
                </div>
            </div><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about as $a)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $a->nim }}</td>
                        <td>{{ $a->nama }}</td>
                        <td align="center">
                            <img width="150px" src="{{ asset('storage/'.$a->featured_image)}}">
                        </td>
                        <td class="project-actions text-left">
                            <a href="/about/{{ $a->id }}" class="btn btn-default">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="/about/edit/{{ $a->id }}" class="btn btn-info">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="/about/delete/{{ $a->id }}" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
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
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>&nbsp;
            <div class="dataTables_info" role="status" aria-live="polite">
                Showing {{ $about->currentPage() }} to {{ $about->total() }} of {{ $about->perPage() }} entries               
            </div>
        </div>
    </div>
</div>
@endsection