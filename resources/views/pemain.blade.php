@extends('head')

@section('container')
    <div class="container">
        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Pemain</td>
                    <td>Nomor Punggung</td>
                    <td>Posisi</td>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($pemain as $pm)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pm->nama_pemain }}</td>
                        <td>{{ $pm->no_punggung }}</td>
                        <td>{{ $pm->posisi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection