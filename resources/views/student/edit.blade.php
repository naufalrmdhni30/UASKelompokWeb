@extends('layouts.main')

@section('content')
<div class="col-md-8 offset-md-2">

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br>
    @endif
<div class="card mt-3">

<div class="card-header">
    <h3>Ubah Mahasiswa</h3>
</div>

<div class="card-body">
    <form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mt-2">
        <label for="name">NRP</label>
        <input type="text" class="form-control" name="code" value="{{ $student->code }}">
    </div>
    <div class="form-group mt-2">
        <label for="name">Nama</label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
    </div>
    <div class="form-group mt-2">
        <label for="name">Program Studi</label>
            <select class="form-control" name="faculty_id" value="{{ $student->faculty_id }}>
                @foreach ($faculties as $faculty)
                    <option value="{{ $faculty->id }}"> {{ $faculty->name }} </option>
                @endforeach
            </select>
    </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
</div>
@endsection
