@extends('layout.master')
@section('content')
    @include('additional.navbar')
    <div class="container">
        <div id="laporan-panel" class="panel panel-default animated fadeInLeft">
            <div class="panel-heading">
                <h3 class="panel-title">Detail Bears</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::open() !!}
                    <div class="form-group col-sm-12">
                        {!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>'nama']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="table-responsive">
                    <table class="table table-hover dt-responsive" id="tabel">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Danger Level</th>
                        </thead>
                        <tbody>
                        @foreach ($bears as $bear)
                            <tr>
                                <td>{{$bear->id}}</td>
                                <td>{{$bear->name}}</td>
                                <td>{{$bear->type}}</td>
                                <td>{{$bear->danger_level}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="laporan-panel" class="panel panel-default animated fadeInLeft">
            <div class="panel-heading">
                <h3 class="panel-title">Detail Fish</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover dt-responsive" id="tabel">
                        <thead>
                        <th>ID</th>
                        <th>Weight</th>
                        <th>Bear ID</th>
                        </thead>
                        <tbody>
                        @foreach ($fish as $f)
                            <tr>
                                <td>{{$f->id}}</td>
                                <td>{{$f->weight}}</td>
                                <td>{{$f->bear_id}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script !src="">
        $('document').ready(function(){
            var a=$("#tabel").DataTable({
                dom: 't'
            });
            $("#nama").on("keyup change",function(){
                a.column(0).search($("#nama").val()).draw()
            });
        });
    </script>
@stop