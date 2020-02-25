@extends('layout.master')
@section('title','Pencarian Data')
@section('heading','DATA PENCARIAN')
@section('content')
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
      </td>
    </tr>
  @endforeach
  </tbody>
</table>



@endsection