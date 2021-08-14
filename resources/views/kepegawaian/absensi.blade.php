@extends('layouts.admin')

@section('header')
@endsection
@section('content')
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Data Absensi Pegawai
                           <div class="pull-right">

                                
                            </div> 
                        </div>
                        <div class="panel-body">
                            
<div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label>Nama Pegawai</label>
                            <input type="text" name="nama_pembeli" value="{{$pegawai->nama_pegawai}}" class="form-control" id="formGroupExampleInput" readonly>
                            @error('nama_pegawai')
                                <h6 class="text-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="nama_jabatan" value="{{$pegawai->jabatan->nama_jabatan}}" class="form-control" id="formGroupExampleInput" readonly>
                            @error('jabatan')
                                <h6 class="text-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                         <a href="{{route('save.Absensi',$pegawai->id_pegawai)}}" class="btn btn-success btn-sm "><i class="fa fa-plus"></i>Tambah Absensi</a>

                        <hr>
                       
                        <label>Absensi</label>
                        <table class="table" id="absensi_table">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>Tanpa Keterangan</th>
                                    <th>Sakit </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pegawai->absensi as $absensi) 
                                
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                     <td>
                                 {{$absensi->bulan}}         
                                    </td>
                                    <td>
                                {{$absensi->tahun}}   
                                    </td>
                                    <td>
                                    {{$absensi->tanpa_keterangan}}           
                                    </td>
                                    <td>
                                        {{$absensi->sakit}}   
                                    </td>
                                </tr>
                                  @endforeach 
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>           
            </div>
@endsection
@push('script')
<script type="text/javascript">
    $(document).ready(function () {
                 if($(".pesan").length>0){
        setTimeout(() => {
            $(".pesan").remove();
        }, 2000);
        }
    })


    </script>
@endpush