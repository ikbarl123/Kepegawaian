@extends('layouts.admin')

@section('header')
Tambah Data  
@endsection
@section('content')
 <div class="row justify-content-center ">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah jabatan
                        </div>
                        <div class="panel-body">
                            <div class="row ">
                                <div class="col-md-12">
                                    <form role="form" action="{{route('jabatan.store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>ID jabatan</label>
                                            <input class="form-control" name="id_jabatan"  autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama jabatan</label>
                                            <input class="form-control" name="nama_jabatan"  autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Gaji pokok</label>
                                            <input class="form-control" name="gaji_pokok"  autofocus required>
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
