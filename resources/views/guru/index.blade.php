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
                <p>Tabel Guru</p>
                <a class="btn btn-primary" href="{{route('guru.create')}}" role="button">Add</a>
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                           <th>Id</th>
                           <th>Nama</th>
                           <th>Nipd</th>
                           <td>Email</td>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $item)
                        <tr>
                            <td>{{$item->id }}</td>
                            <td>{{$item->nama }}</td>
                            <td>{{$item->nipd }}</td>
                            <td>{{$item->email }}</td>
                            <td>
                                <a href="{{ route('guru.show', $item->id) }}" class="bi bi-file-earmark-text"></a>
                                <a href="{{ route('guru.edit', $item->id) }}" class="bi bi-pencil-square"></a>
                                <form action="{{ route('destroy.guru', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('yakin mau delete?')">
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
