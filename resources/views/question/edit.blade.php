@extends('layout.master')
@section('title','Edit Data')
@section('heading','Input Data')

@section('content')
<!-- Modal Upload Start -->
<form action="/question/edit/{{ $question->id }}" method="POST" enctype="multipart/form-data">
@csrf
    <h5>{{$question->pertanyaan}}</h5>
    <hr>
    <div class="form-group">
        <label for="keterangan">Keterangan :</label>
        <textarea class="form-control" name="keterangan" id="keterangan" width="500px" required>{{ $question->keterangan }}</textarea>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">    
                <label>Upload Bukti Dokumen :</label>
                <input type="file" class="form-control" name="dokumen">
                <hr>
                <p>NB : </p>
                <p>- Silahkan upload berupa file dokumen pdf</p>
                <p>- Jika file lebih dari satu, silahkan satukan file dahulu menggunakan .rar atau .zip</p>
                <p>- Jika anda salah upload file bisa diulangi langkah ini lagi.</p>
            </div>
            <div class="col-md-6">
                <label>Upload Bukti Foto :</label>
                <input type="file" class="form-control" name="avatar">
                <hr>
                <p>NB : </p>
                <p>- Silahkan upload berupa file dokumen jpg.</p>
                <p>- Jika file lebih dari satu, silahkan satukan file dahulu menggunakan .rar atau .zip</p>
                <p>- Jika anda salah upload file bisa ulangi langkah ini lagi.</p>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </div>
</form>
<!-- Modal Upload End -->
        
@endsection