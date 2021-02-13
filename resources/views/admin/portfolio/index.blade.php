@extends('layouts.app')
@section('title','Portfolio')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                   @include('layouts.partial.message')

                    <a href="{{route('portfolio.create')}}" class="btn btn-info">Add Team</a>
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
                                        Title
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Client
                                    </th>
                                    <th>
                                        Link
                                    </th>
                                    <th>
                                        skill
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
                                        @foreach($portfolios as $key=>$team)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$portfolio->title}}</td>
                                                <td>{{$portfolio->description}}</td>
                                                <td> <img src="{{asset($portfolio->image)}}" alt="team image" width="100px"></td>
                                                <td>{{$portfolio->client}}</td>
                                                <td>{{$portfolio->link}}</td>
                                                <td>{{$portfolio->skill}}</td>
                                                <td>{{$portfolio->facebook}}</td>
                                                <td>{{$portfolio->twitter}}</td>
                                                <td>{{$portfolio->linkedin}}</td>
                                                <td>
                                                    <a href="{{route('portfolio.edit',$portfolio->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i></a>
                                                    <button type="button" onclick="if(confirm('Are you sure want to delete?')){
                                                        event.preventDefault();document.getElementById('delete-form-{{$portfolio->id}}').submit();
                                                    }else{
                                                        even.preventDefault();
                                                        }" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                                    <form method="POST" action="{{ route('portfolio.destroy',$portfolio->id) }}" id="delete-form-{{$portfolio->id}}" style="display: none">
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
