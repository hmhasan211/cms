@extends('layouts.app')
@section('title','Team')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                   @include('layouts.partial.message')

                    <a href="{{route('team.create')}}" class="btn btn-info">Add Team</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Team</h4>
                        
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="team_table" class="display">
                                    <thead class=" text-primary">
                                    <th>
                                        Sl.
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Designition
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        About
                                    </th>
                                   
                                    <th>
                                        Facebook
                                    </th>

                                    <th>
                                        Twitter
                                    </th>
                                    <th>
                                        Linkedin
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($teams as $key=>$team)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$team->name}}</td>
                                                <td>{{$team->designition}}</td>
                                                <td> <img src="{{asset($team->image)}}" alt="team image" width="100px"></td>
                                                <td>{{$team->about}}</td>
                                                <td>{{$team->facebook}}</td>
                                                <td>{{$team->twitter}}</td>
                                                <td>{{$team->linkedin}}</td>
                                                <td>
                                                    <a href="{{route('team.edit',$team->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i></a>
                                                    <button type="button" onclick="if(confirm('Are you sure want to delete?')){
                                                        event.preventDefault();document.getElementById('delete-form-{{$team->id}}').submit();
                                                    }else{
                                                        even.preventDefault();
                                                        }" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                                    <form method="POST" action="{{ route('team.destroy',$team->id) }}" id="delete-form-{{$team->id}}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
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
                $('#team_table').DataTable();
            } );
    </script>

@endpush
