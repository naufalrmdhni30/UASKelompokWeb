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
    <h3>Tambah Data Dokter</h3>
</div>

<div class="card-body">
    <form action="{{ route('doctors.store') }}" method="POST">
    @csrf
        <div class="form-group mt-2">
            <label for="code">No. Registrasi</label>
            <input type="text" class="form-control" name="registration_code">
        </div>
        <div class="form-group mt-2">
            <label for="name">Nama Dokter</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group mt-2">
            <label for="name">Poli</label>
            <select class="form-control" name="polyclinic_id">
                @foreach ($polyclinics as $polyclinic)
                    <option value="{{ $polyclinic->id }}"> {{ $polyclinic->name }} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
</div>
@endsection
