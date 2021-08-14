@extends('layouts.admin')

@section('header')
Edit
@endsection
@section('content')
 <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit pegawai
                        </div>
                        <div class="panel-body">
                            <div class="row justify-content-center ">
                                <div class="col-md-12">
                                    <form role="form" action="{{route('pegawai.update',$pegawai->id_pegawai)}}" method="POST">
                                        @method('PUT')
                                        @csrf
                                       <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input class="form-control" name="nama_pegawai" value="{{$pegawai->nama_pegawai}}"  autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" name="tanggal_masuk" value="{{$pegawai->tanggal_masuk}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <select class="form-control" name="id_jabatan">
                                                <option value=""> - Pilih jabatan</option>
                                                @foreach ($jabatan as $jabatan)
                                                    <option value="{{$jabatan->id_jabatan}}"{{old('id_jabatan',$pegawai->id_jabatan)==$jabatan->id_jabatan ?'selected': null}}> {{$jabatan->nama_jabatan}}</option>
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
