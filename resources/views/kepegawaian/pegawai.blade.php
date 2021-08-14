@extends('layouts.admin')

@section('header')
Data pegawai
@endsection
@section('content')
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           pegawai
                           <div class="pull-right">

                                <a href="{{route('pegawai.create')}}" class="btn btn-success btn-sm "><i class="fa fa-plus"></i>ADD</a>
                            </div> 
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <div class="card-header">
                                    @if(@session('pesan'))
                                    <div class="alert alert-success pesan" role="alert">
                                        {{session('pesan')}}
                                    </div>        
                                    @endif
                                </div>
                                <div class="card-body table-responsive">
                                     <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Nama Pegawai</th>
                                                <th class="text-center">Tanggal Masuk</th>
                                                <th class="text-center">Jabatan</th>
                                                <th>aksi</th>
                                                    
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($pegawai as $pegawais) 
                                             <tr>
                                                 <th class="text-center col-sm-1">{{$loop->iteration}}</th> 
                                                <th>{{$pegawais->nama_pegawai}}</th>
                                                <th class="text-center col-sm-1">{{$pegawais->tanggal_masuk}}</th>
                                                <th class="text-center col-sm-1">{{$pegawais->jabatan->nama_jabatan}}</th>
                                                <th class="text-center col-sm-1" >
                                                    <a href="{{route('pegawai.edit',$pegawais->id_pegawai)}}" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil">Ubah</i>
                                                    </a>
                                                    <a href="{{route('show.Absensi',$pegawais->id_pegawai)}}" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-eye">Lihat Absensi</i>
                                                    </a>
                                                <form action="{{route('pegawai.destroy',$pegawais->id_pegawai)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin?')">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash-o"></i></button>
                                                    </th>
                                                </form>

                                            </tr>   
                                            @endforeach 
                                            
                                        </tbody>
                                        {{-- {{ $pegawai->links() }}  --}}
                                </div>
                            </div>
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