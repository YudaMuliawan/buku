@extends('konten')

@section('content')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Buku</h1>
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
                                        + Tambah Data
                                    </button>   
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr  style="text-align: center">
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Tahun</th>
                                                <th>Pengarang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $buku)
                                            <tr style="text-align: center">
                                                <td>{{ $buku->judul }}</td>
                                                <td>{{ $buku->kategori }}</td>
                                                <td>{{ $buku->tahun }}</td>
                                                <td>{{ $buku->nama_pengarang }}</td>
                                                <td >
                                                    <a href="/deletebuku/{{ $buku->id }}" type="button" class="btn btn-danger">Delete</a>
                                                    <button type="button" value="{{ $buku->id }}" class="btn btn-info editbtn">
                                                        Update
                                                    </button>
                                                </td> 
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr  style="text-align: center">
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Tahun</th>
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
                        <h4 class="modal-title">Tambah Data Buku</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/tambahbuku" method="post">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Judul Buku</label>
                                    <input type="text" class="form-control" placeholder="Judul" name="judul" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="kategori" required="required" >
                                        @foreach($datakategori as $datacat)
                                        <option value="{{ $datacat->id_kategori }}">{{ $datacat->kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Tahun</label>
                                    <input type="number" class="form-control" placeholder="Tahun" name="tahun" required="required">
                                </div>
                                <div class="form-group">
                                <label>Select</label>
                                    <select class="form-control" name="pengarang" required="required" >
                                        @foreach($datapengarang as $datap)
                                            <option value="{{ $datap->id_pengarang}}">{{ $datap->nama_pengarang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-outline-primary" value="Tambah Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>

         <!-- Modal Update Data -->
         <div class="modal fade" id="editModal">
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Data Buku</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/updatebuku" method="post">
                            {{ csrf_field() }}
                            @method('PUT')
                            <input type="hidden" id="id" name="id">

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Judul Buku</label>
                                    <input type="text" class="form-control" placeholder="Judul" name="judul" required="required" id="judul">
                                </div>
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="kategori" required="required" id="kategori">
                                        @foreach($datakategori as $datacat)
                                            <option value="{{ $datacat->id_kategori }}">{{ $datacat->kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Tahun</label>
                                    <input type="number" class="form-control" placeholder="Tahun" name="tahun" required="required" id="tahun">
                                </div>
                                <div class="form-group">
                                <label>Select</label>
                                    <select class="form-control" name="pengarang" required="required" id="pengarang">
                                        @foreach($datapengarang as $datap)
                                            <option value="{{ $datap->id_pengarang}}">{{ $datap->nama_pengarang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-outline-primary" value="Update Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection