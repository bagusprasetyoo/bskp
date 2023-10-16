@extends('layouts.main')
@section('contents')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data {{ $title }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Posisi</th>
                            <th>Jabatan</th>
                            <th>Tunjangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td><a href="">Detail</a></td>
                            <td><a href="#" class="btn btn-warning btn-sm">
                                    <span class="text">Edit</span></a>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <span class="text">Hapus</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td><a href="">Detail</a></td>
                            <td><a href="#" class="btn btn-warning btn-sm">
                                    <span class="text">Edit</span></a>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <span class="text">Hapus</span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
