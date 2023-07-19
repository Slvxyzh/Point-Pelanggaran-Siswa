@extends('layout.App')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<section class="section">
        <div class="card">
            <div class="card-header">
                <p>Tabel Siswa</p>
                <a class="btn btn-primary" href="/create/siswa" role="button">Add</a>
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                           <th>Id</th>
                           <th>Nama</th>
                           <th>Nisn</th>
                           <td>Alamat</td>
                           <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $item)
                        <tr>
                            <td>{{$item->id }}</td>
                            <td>{{$item->nama }}</td>
                            <td>{{$item->nisn }}</td>
                            <td>{{$item->alamat }}</td>
                            <td>{{$item->jeniskelamin }}</td>
                            <td>
                                <a href="{{ route('siswa.show', $item->id) }}" class="bi bi-file-earmark-text"></a>
                                <a href="{{ route('siswa.edit', $item->id) }}" class="bi bi-pencil-square"></a>
                                <form action="/delete/siswa/{{$item->id}}" method="POST" class="d-inline" onsubmit="return confirm('yakin mau delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bi bi-trash" ></button>
                               </form>
                            </td>
                        </tr>
                    @endforeach
                    
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css')}}"/>
    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
@endsection
