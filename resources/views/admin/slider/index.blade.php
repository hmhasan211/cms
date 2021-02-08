@extends('layouts.app')
@section('title','slider')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                   @include('layouts.partial.message')

                    <a href="{{route('slider.create')}}" class="btn btn-info">Add slider</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All sliders</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="slider_table" class="display">
                                    <thead class=" text-primary">
                                    <th>
                                        Sl.
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Sub Title
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Created_at
                                    </th>
                                    <th>
                                        Updated_at
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $key=>$slider)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$slider->title}}</td>
                                                <td>{{$slider->sub_title}}</td>
                                                <td>{{$slider->image}}</td>
                                                <td>{{$slider->created_at}}</td>
                                                <td>{{$slider->updated_at}}</td>
                                                <td>
                                                    <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i></a>
                                                    <button type="button" onclick="if(confirm('Are you sure want to delete?')){
                                                        event.preventDefault();document.getElementById('delete-form-{{$slider->id}}').submit();
                                                    }else{
                                                        even.preventDefault();
                                                        }" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                                    <form method="POST" action="{{ route('slider.destroy',$slider->id) }}" id="delete-form-{{$slider->id}}" style="display: none">
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
                $('#slider_table').DataTable();
            } );
    </script>

@endpush
