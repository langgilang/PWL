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
                    <a href="article/add" class="btn btn-success">Tambah Data</a>
                </div>
            </div><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                    @foreach ( $article as $art)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $art->title }}</td>
                        <td>{{ $art->content }}</td>
                        <td class="project-actions text-right">
                            <a href="/article/{{ $art->id }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-folder">
                                    Detil
                                </i>
                            </a>
                            <a href="/article/edit/{{ $art->id }}" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt">
                                    Edit
                                </i>
                            </a>
                            <a href="/article/delete/{{ $art->id }}" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash">
                                    Delete
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection
