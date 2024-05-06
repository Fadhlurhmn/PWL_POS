{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Level Pengguna</title>
</head>
<body>
    <h1>Data Level Pengguna</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level_kode }}</td>
                <td>{{ $d->level_nama }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html> --}}

@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'User')

@section('content')
<form>
    <div class="form-group">
        <label>Kode Level</label>
        <input type="text" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
        <label>Nama Level</label>
        <input type="text" class="form-control" placeholder="Nama">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form>
@endsection
