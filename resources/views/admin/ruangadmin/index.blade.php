@extends('admin.index')

@section('title', 'Ruang Admin')

@section('content')

<div class="content-body">
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor mx-3"> <strong>Ruang Admin</strong> </h4>
            </div>

            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Ruang Admin</li>
                    </ol>
                </div>
            </div>

            <div class="container">

            <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#tambahdataModal">
                 + Tambah Data
            </button>
                    <!-- Modal Tambah Awal-->
            <div class="modal fade" id="tambahdataModal" tabindex="-1" role="dialog" aria-labelledby="tambahdataModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h5 class="modal-title text-light "  id="tambahdataModalLabel"> <strong>Tambah Data</strong></h5>
                            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url ('ruangadmin')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Pemasukan:</label>
                                    <input type="text" class="form-control @error ('pemasukan') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="pemasukan">
                                    @error('pemasukan')
                                    <div class="invalid-feedback">
                                        Pemasukan tidak boleh kosong
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Pengeluaran:</label>
                                    <input type="text" class="form-control @error ('pengeluaran') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="pengeluaran">
                                    @error('pengeluaran')
                                    <div class="invalid-feedback">
                                        Pengeluaran tidak boleh kosong
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Tanggal di Buat:</label>
                                    <input type="date" class="form-control @error ('tanggal_dibuat') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_dibuat">
                                    @error('tanggal_dibuat')
                                    <div class="invalid-feedback">
                                        Text tidak boleh kosong
                                    </div>
                                    @enderror
                                </div>

                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-dark" name="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
             <!-- Modal Tambah Akhir-->

                    <div class="row justify-content-center">
                        <div class="col-12 my-4">
                          <div class="card">
                            <div class="card-body p-0">
                              <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 600px; weight: 400">
                                <table class="table table-striped mb-3">
                                  <thead style="background-color: #2b2f3a ">
                                    <tr>
                                      <th class="text-light" scope="col">Id</th>
                                      <th class="text-light" scope="col">Pemasukan</th>
                                      <th class="text-light" scope="col">Pengeluaran</th>
                                      <th class="text-light" scope="col">Tanggal di Buat</th>
                                      <th class="text-light" scope="col">Tanggal di Ubah</th>
                                      <th class="text-light" scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($ruang_admins as $item)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->pemasukan}}</td>
                                        <td>{{$item->pengeluaran}}</td>
                                        <td>{{$item->tanggal_dibuat}}</td>
                                        <td>{{$item->tanggal_diubah}}</td>
                                        <td>
                                        <button type="button" data-toggle="modal" data-target="#editdataModal"><i class="fa fa-edit" >edit</i></button>
                                            <!-- Modal edit Awal-->
                                            <div class="modal fade" id="editdataModal" tabindex="-1" role="dialog" aria-labelledby="editdataModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-dark">
                                                    <h5 class="modal-title text-light "  id="editdataModalLabel"> <strong>Edit Data</strong></h5>
                                                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url ('ruangadmin')}}">
                                                            <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Pemasukan:</label>
                                                            <input type="text" class="form-control" id="pemasukan" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Pengeluaran:</label>
                                                                <input type="text" class="form-control" id="pengeluaran" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Tanggal di Buat:</label>
                                                                <input type="date" class="form-control" id="tanggal_dibuat" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Tanggal di Ubah:</label>
                                                                <input type="date" class="form-control" id="tanggal_diubah" >
                                                            </div>
                                        
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-dark" name="submit" a href="/ruangadmin/{{$item->id}}/edit" >Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- Modal edit Akhir-->
                                            <button type="submit" class="btn btn-dark" name="submit" a href="ruangadmin/{{$item->id}}/delete" >Hapus</button>
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
                    </div>
        </div>
    </div>
</div>
</div>
@endsection
