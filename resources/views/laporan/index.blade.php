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
                <p>data table</p>
                <a class="btn btn-primary" href="/createlaporan" role="button">Add</a>
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                           <th>guru</th>
                           <th>siswa</th>
                           <th>laporan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporan as $item)
                        <tr>
                            <td>{{$item->guru->nama }}</td>
                           @foreach ($item->siswa as $siswa)
                           <td>{{$siswa->nama }}</td>
                           <td>{{$item->pelanggaran->jenispelanggaran }}</td>
                           @endforeach
                            <td>
                                <a href="{{ route('siswa.show', $item->id) }}" class="bi bi-file-earmark-text"></a>
                                {{-- <a href="{{ route('laporan.edit', $item->id) }}" class="btn btn-info">Edit</a> --}}
                                {{-- <form action="{{ route('destroy.laporan', $item->id) }}" class="d-inline" onsubmit="return confirm('yakin mau delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >Delete</button>
                               </form> --}}
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
