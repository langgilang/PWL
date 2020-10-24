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
        <form action="/about/update/{{$about->id}}" method="post">
            {{csrf_field()}}
            <div class="card-body">
                <input type="hidden" name="id" value="{{$about->id}}">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" required="required" name="nim"
                        value="{{$about->nim}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" required="required" name="nama"
                        value="{{$about->nama}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" required="required" name="alamat"
                    value="{{$about->alamat}}">
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