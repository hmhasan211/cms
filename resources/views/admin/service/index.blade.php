@extends('layouts.app')
@section('title','Services')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                   @include('layouts.partial.message')

                    <a href="{{route('service.create')}}" class="btn btn-info">Add services</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All services</h4>
                            <p class="card-service"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="service_table" class="display">
                                    <thead class=" text-primary">
                                    <th>
                                        Sl.
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Sub title
                                    </th>
                                    <th>
                                        Description
                                    </th>

                                    <th>
                                       Status
                                    </th>

                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $key=>$service)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$service->title}}</td>
                                                <td>{{$service->sub_title}}</td>
                                                <td>{{$service->description}}</td>
                                                <td>@if ($service->status==1)
                                                    <i class=" text-success fa fa-circle"></i>
                                                    @else
                                                  <i class=" text-danger fa fa-circle"></i>
                                                @endif
                                                  </td>

                                                <td>
                                                    <a href="{{route('service.edit',$service->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i></a>
                                                    <button type="button" onclick="if(confirm('Are you sure want to delete?')){
                                                        event.preventDefault();document.getElementById('delete-form-{{$service->id}}').submit();
                                                    }else{
                                                        even.preventDefault();
                                                        }" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                                    <form method="POST" action="{{ route('service.destroy',$service->id) }}" id="delete-form-{{$service->id}}" style="display: none">
                                                        @csrf
                                                    </form>

                                                    @if ($service->status==1)
                                                        <a href="{{route('service.offline',$service->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a href="{{route('service.online',$service->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                                    @endif
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
@endsection

@push('script')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script>
            $(document).ready( function () {
                $('#service_table').DataTable();
            } );
    </script>

@endpush
