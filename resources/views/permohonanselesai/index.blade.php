@extends('template.main')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
  

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" >
            <h5 class="m-0 font-weight-bold">Permohonan Selesai</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Pemohon</th>
                            <th>Status</th>
                            <th>Batas Waktu</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Batas Waktu</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Alfin Rizaldi</td>
                            <td>Achmadalfinrizaldi@gmail.com</td>
                            <td>admin</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>Detail<p>edit</p></td> 
                        </tr>
                        <tr>
                            <td>Alfin Rizaldi</td>
                            <td>Achmadalfinrizaldi@gmail.com</td>
                            <td>admin</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>Detail<p>edit</p></td> 
                        </tr>
                        <tr>
                            <td>Alfin Rizaldi</td>
                            <td>Achmadalfinrizaldi@gmail.com</td>
                            <td>admin</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>Detail<p>edit</p></td> 
                        </tr>
                        <tr>
                            <td>Alfin Rizaldi</td>
                            <td>Achmadalfinrizaldi@gmail.com</td>
                            <td>admin</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>Detail<p>edit</p></td>                                                                       
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection