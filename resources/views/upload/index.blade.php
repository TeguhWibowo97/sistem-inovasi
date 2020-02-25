@extends('layout.master')
@section('title','upload data')
@section('heading','UPLOAD')

@section('content')
    
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Upload</button>
    
<!-- Modal Upload Start -->
<form action="/upload" method="POST" enctype="multipart/form-data">
@csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="avatar" class="col-form-label"></label>
                    <input type="file" class="form-control" id="avatar" name="avatar">
                </div>
                <div class="form-group">
                    <label for="keterangan" class="col-form-label">Keterangan :</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal Upload End -->

@endsection