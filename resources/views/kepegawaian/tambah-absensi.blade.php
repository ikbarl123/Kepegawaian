@extends('layouts.admin')

@section('header')
Tambah Data  
@endsection
@section('content')
 <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah absensi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" action="{{route('store.Absensi',$pegawai->id_pegawai)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input class="form-control" name="" value="{{$pegawai->nama_pegawai}}" autofocus required readonly>
                                        </div>
                                       <div class="form-group">
                                            <label>Bulan</label>
                                            <select class="form-control" name="bulan">
                                                <option value=""> - Pilih bulan</option>
                                                <option value="Januari"> Januari</option>
                                                <option value="Februari"> Februari</option>
                                                <option value="Maret"> Maret</option>
                                                <option value="April"> April</option>
                                                <option value="Mei"> Mei</option>
                                                <option value="Juni"> Juni</option>
                                                <option value="Juli"> Juli</option>
                                                <option value="Agustus"> Agustus</option>
                                                <option value="September"> September</option>
                                                <option value="Oktober"> Oktober</option>
                                                <option value="November"> November</option>
                                                <option value="Desember"> Desember</option>
                                                
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
                                                <option value=""> - Pilih tahun</option>
                                                <option value="2018"> 2018</option>
                                                <option value="2019"> 2019</option>
                                                <option value="2020"> 2020</option>
                                                <option value="2021"> 2021</option>
                                                <option value="2022"> 2022</option>                    
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Sakit</label>
                                            <input class="form-control" name="sakit" value="0" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanpa Keterangan</label>
                                            <input class="form-control" name="tanpa_keterangan" value="0" autofocus required>
                                        </div>
                                      
                                        <br>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
@endsection
