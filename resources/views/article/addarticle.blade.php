@extends('layout.master')

@section('title_content', 'Tambah Data Artikel')

@section('content')
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Tambah Data</h5>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form form action="/article/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" required="required" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" required="required" name="content">
                </div>
                <div class="form-group">
                    <label for="image">Featured Image</label>
                    <input type="file" class="form-control" required="required" name="image">
                </div>
            </div>
            <!-- /.card-body -->

            <div style="padding-left: 20px">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
