@extends('layouts.admin')

@section('header')
Tambah Data  
@endsection
@section('content')
 <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah pegawai
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" action="{{route('pegawai.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input class="form-control" name="nama_pegawai"  autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Anak</label>
                                            <input class="form-control" name="jumlah_anak">
                                        </div>
                                       <div class="form-group">
                                            <label>Jabatan</label>
                                            <select class="form-control" name="id_jabatan">
                                                <option value=""> - Pilih jabatan</option>
                                                @foreach ($jabatan as $jabatan)
                                                    <option value="{{$jabatan->id_jabatan}}"> {{$jabatan->nama_jabatan}}</option>
                                                @endforeach
                                            </select>
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
