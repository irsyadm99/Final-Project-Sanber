@extends('master')

@section('content')
    <h2>
        Semua Pertanyaan
        <a href="/"><button class="btn btn-success float-right" type="button">Pertanyaan Baru</button></a>
    </h2>
    @foreach($pertanyaan as $key=> $pertanyaan)
    <hr>
    <div class="row">
        <div class="col-1 text-center text-muted">
            <h4>0</h4>
            <p>votes</p>
            <h4>0</h4>
            <p>jawaban</p>
        </div>
        <div class="col">
            <b>{{$pertanyaan-> judul}}</b>
            <p>Jawaban</p>
            <a href="/"><button class="btn btn-success float-right" type="button">{{$pertanyaan-> tag}}</button></a>
        </div>
    </div>
    @endforeach
@endsection