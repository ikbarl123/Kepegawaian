@extends('layouts.admin')

@section('header')
Data jabatan
@endsection
@section('content')
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           jabatan
                           <div class="pull-right">
                               

                                <a href="{{route('jabatan.create')}}" class="btn btn-success btn-sm "><i class="fa fa-plus"></i>ADD</a>
                            </div> 
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <div class="card-header">
                                                                
                                </div>
                                <div class="card-body table-responsive">
                                     <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Kode Jabatan</th>    
                                                <th class="text-center">Nama Jabatan</th> 
                                                <th class="text-center">Gaji Pokok</th>                                                   
                                                <th></th>
                                                    
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($jabatan as $jabatan)
                                             <tr>
                                                <th class="text-center col-sm-1">{{$loop->iteration}}</th>
                                                <th class="text-center col-sm-1">{{$jabatan->id_jabatan}}</th>  
                                                <th>{{$jabatan->nama_jabatan}}</th>  
                                                <th>Rp {{number_format($jabatan->gaji_pokok,0,'','.')}}</th>                                                
                                                <th class="text-center col-sm-1" >
                                                <form action="{{url('admin/jabatan/'.$jabatan->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin?')">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash-o"></i></button>
                                                    </th>
                                                </form>

                                            </tr>   
                                            @endforeach
                                            
                                        </tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
@endsection