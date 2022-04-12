@extends('templates._main')
@section('judul', 'kontak')
@section('isi')
<h2 class="mt-3">kontak</h2>
<h3>{{$handphone}}</h3>
<img src="/img/gambar1.jpg" alt="gambar1"> <br>
<img src="{{asset('img/gambar1.jpg')}}" alt="gambar1">
@endsection


