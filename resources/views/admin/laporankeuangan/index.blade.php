@extends('template.layout')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> LAPORAN UANG MASUK</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-chart-line"></i> LAPORAN UANG MASUK</h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ url ('ruangadmin')}}" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TANGGAL MASUK</label>
                                        <input type="text" name="tanggal_dibuat" value="{{ old('tanggal_dibuat') }}" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <label style="margin-top: 38px;">S/D</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TANGGAL DIUBAH</label>
                                        <input type="text" name="tanggal_diubah" value="{{ old('tanggal_diubah') }}" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary mr-1 btn-submit btn-block" type="submit" style="margin-top: 30px"><i class="fa fa-filter"></i> FILTER</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                    <div class="card">
                        <div class="card-header">
                            <h4><i class="fas fa-chart-line"></i> LAPORAN UANG MASUK</h4>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center;width: 6%">ID</th>
                                        <th scope="col">PEMASUKAN</th>
                                        <th scope="col">PENGELUARAN</th>
                                        <th scope="col">TANGGAL MASUK</th>
                                        <th scope="col">TANGGAL DIUBAH</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                        <tr>
                                            <th scope="row" style="text-align: center"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="text-align: center">
                                   
                                </div>
                            </div>

                        </div>
                    </div>


            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
@endsection
