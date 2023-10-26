@extends('konten')

@section('content')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Kategori</h1>
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
                                        + Tambah Kategori
                                    </button>   
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr  style="text-align: center">
                                                <th>Id</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($datakategori as $datacat)
                                            <tr style="text-align: center">
                                                <td>{{ $datacat->id_kategori }}</td>
                                                <td>{{ $datacat->kategori }}</td>
                                            
                                                <td >
                                                    <button type="button" value="{{ $datacat->id_kategori }}" class="btn btn-info editbtndatacat">
                                                        Update
                                                    </button>
                                                </td> 
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr  style="text-align: center">
                                                <th>Id</th>
                                                <th>Kategori</th>
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
                        <h4 class="modal-title">Tambah Data Kategori</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/tambahkategori" method="post">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input type="text" class="form-control" placeholder="kategori" name="kategori" required="required">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-outline-primary" value="Tambah Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Update Data -->
        <div class="modal fade" id="editModalkategori">
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Data Kategori</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/updatekategori" method="post">
                            {{ csrf_field() }}
                            @method('PUT')
                            <input type="hidden" id="id_kategori" name="id_kategori">

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input type="text" class="form-control" placeholder="Kategori" name="kategori" required="required" id="kategori">
                                </div>
                                
                            </div>
                            <input type="submit" class="btn btn-outline-primary" value="Update Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection