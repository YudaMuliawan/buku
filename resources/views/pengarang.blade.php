@extends('konten')

@section('content')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Pengarang</h1>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            @if (session('status'))
                                <div class= "alert alert-success">{{ session('status') }}</div>
                            @endif

                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-primary">
                                        + Tambah Pengarang
                                    </button>   
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr  style="text-align: center">
                                                <th>Id</th>
                                                <th>Nama Pengarang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($datapengarang as $datap)
                                            <tr style="text-align: center">
                                                <td>{{ $datap->id_pengarang }}</td>
                                                <td>{{ $datap->nama_pengarang }}</td>
                                            
                                                <td >
                                                    <button type="button" value="{{ $datap->id_pengarang }}" class="btn btn-info editbtndatap">
                                                        Update
                                                    </button>
                                                </td> 
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr  style="text-align: center">
                                                <th>Id</th>
                                                <th>Pengarang</th>
                                                <th>Aksi</th>                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

         <!-- Modal tambah Data -->
         <div class="modal fade" id="modal-primary">
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Pengarang</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/tambahpengarang" method="post">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Pengarang</label>
                                    <input type="text" class="form-control" placeholder="Nama Pengarang" name="nama_pengarang" required="nama_pengarang">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-outline-primary" value="Tambah Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Update Data -->
        <div class="modal fade" id="editModalpengarang">
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Data Pengarang</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/updatepengarang" method="post">
                            {{ csrf_field() }}
                            @method('PUT')
                            <input type="hidden" id="id_pengarang" name="id_pengarang">

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Pengarang</label>
                                    <input type="text" class="form-control" placeholder="Nama Pengarang" name="nama_pengarang" required="required" id="nama_pengarang">
                                </div>
                                
                            </div>
                            <input type="submit" class="btn btn-outline-primary" value="Update Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection