@extends('layouts.app')
@section('title','Menu')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                   @include('layouts.partial.message')

                    <a href="{{route('menu.create')}}" class="btn btn-info">Add Menu</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Menus</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-bordered table-hover">
                                <table id="slider_table" class="display">
                                    <thead class=" text-primary">
                                    <th>
                                        Sl.
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Link
                                    </th>
                                    <th>
                                        Status
                                    </th>

                                    <th>
                                        action
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($menus as $key=>$menu)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$menu->name}}</td>
                                                <td>{{$menu->link}}</td>
                                                <td>
                                                    @if ($menu->status==1)
                                                        <i class=" text-success fa fa-circle"></i>
                                                    @else
                                                        <i class=" text-danger fa fa-circle"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('menu.edit',$menu->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i></a>
                                                    <button type="button" onclick="if(confirm('Are you sure want to delete?')){
                                                        event.preventDefault();document.getElementById('delete-form-{{$menu->id}}').submit();
                                                    }else{
                                                        even.preventDefault();
                                                        }" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                                    <form method="POST" action="{{ route('menu.destroy',$menu->id) }}" id="delete-form-{{$menu->id}}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    @if ($menu->status==1)
                                                        <a href="{{route('menu.offline',$menu->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a href="{{route('menu.online',$menu->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
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
                $('#slider_table').DataTable();
            } );
    </script>

@endpush
