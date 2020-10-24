@extends('layout.master')

@section('title_content','Edit Data')

@section('content')
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Edit Data</h5>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/article/update/{{$article->id}}" method="post">
            {{csrf_field()}}
            <div class="card-body">
                <input type="hidden" name="id" value="{{$article->id}}">
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" required="required" name="title"
                        value="{{$article->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" required="required" name="content"
                        value="{{$article->content}}">
                </div>
                <div class="form-group">
                    <label for="image">Featured Image</label>
                    <input type="text" class="form-control" required="required" name="image"
                    value="{{$article->featured_image}}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="edit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection