@extends('layout.master')
@section('title','Daftar Pertanyaan WR I')
@section('heading','Daftar Pertanyaan WR I')
@section('gambar','wr.png')

@section('content')
@if (session('status'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('status') }}</strong>
      </div>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pertanyaan</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Bukti Dokumen</th>
      <th scope="col">Bukti Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($question as $question)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $question -> pertanyaan}}</td>
      <td>
        <a href="#">
          <img src="{{ $question->getKeterangan() }}" width="25px">
        </a>
      </td>
      <td>
        <a href="/storage/{{ $question->dokumen }}">
          <img src="{{ $question->getDocument() }}" width="25px">
        </a>
      </td>
      <td>
        <a href="/storage/{{ $question->avatar }}" download="gambar-{{ $loop->iteration }}">
          <img src="{{ $question->getAvatar() }}" width="25px">
        </a>
      </td>
      <td>
        <a href="/question/edit/{{$question->id}}">
          <button class="btn btn-primary">Jawab</button>
        </a>
        <a href="/question/hapus/{{$question->id}}" onclick="javascript:return confirm('Apakah anda yakin akan menghapus data ??')">
          <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></button>
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection