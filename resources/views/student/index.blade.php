@extends('layouts.main')

@section('content')
<a href="{{ route('student.create') }}" class="btn btn-success mt-3">Tambah Data</a>
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
<div class="card mt-3">

<div class="card-header">
   Data Mahasiswa
</div>

<div class="card-body">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Prodi</th>
            <th colspan="2"></th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->code }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->faculty->name }}</td>
            <td>
                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection
