@extends('layout.App')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Pelanggaran</h4>
                    <a class="btn btn-primary" href="/createpelanggar" role="button">Add</a>
                </div>
                <div class="card-content">
                   
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Jenispelanggaran</th>
                                    <th>Tindakan</th>
                                    <th>Jmlh_point</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($pelanggaran as $item)
                                <tr>
                                    <td>{{$item->id }}</td>
                                    <td>{{$item->jenispelanggaran }}</td>
                                    <td>{{$item->tindakan }}</td>
                                    <td>{{$item->jmlh_point }}</td>
                                    <td>
                                        {{-- <a href="{{ route('pelanggar.show', $item->id) }}" class="btn btn-warning">Detail</a> --}}
                                        <a href="{{ route('pelanggar.edit', $item->id) }}" class="bi bi-pencil-square"></a>
                                        <form action="/dasboard/destroy/{{$item->id}}" method="POST" class="d-inline" onsubmit="return confirm('yakin mau delete?')">
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
            </div>
        </div>
    </div>
</section>
@endsection
