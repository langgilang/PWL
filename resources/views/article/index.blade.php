@extends('layout.master')

@section('title_content','Article')

@section('content')
<div class="col-lg-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Data Article</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="article/add" class="btn btn-success">
                        <i class="fa fa-plus" aria-hidden="true" style="color: white"></i>
                    </a>
                    <a href="/article/cetak_pdf" class="btn btn-warning" target="_blank">
                        <i class="fa fa-print" aria-hidden="true" style="color: white"></i>
                    </a>
                </div>
            </div><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                    @foreach ( $article as $art)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $art->title }}</td>
                        <td>{{ $art->content }}</td>
                        <td align="center">
                            <img width="150px" src="{{ asset('storage/'.$art->featured_image)}}">
                        </td>
                        <td class="project-actions text-left">
                            <a href="/article/{{ $art->id }}" class="btn btn-default">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="/article/edit/{{ $art->id }}" class="btn btn-info">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="/article/delete/{{ $art->id }}" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tfoot>
            </table>&nbsp;
            <div class="dataTables_info" role="status" aria-live="polite">
                Showing {{ $article->currentPage() }} to {{ $article->total() }} of {{ $article->perPage() }} entries               
            </div>
        </div>
    </div>
</div>

@endsection
