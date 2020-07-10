@extends('master')

@section('content')

<form action="/pertanyaan" class="was-validated" method="POST" id="form">
    @csrf
  <div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" id="judul" placeholder="Isi judul" name="judul" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pertanyaan">Pertanyaan:</label>
    <input class="form-control" rows="5" id="pertanyaan" placeholder="Isi disini" name="pertanyaan" required></input>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="judul">Tag:</label>
    <input type="text" class="form-control" id="tag" placeholder="tag" name="tag" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
