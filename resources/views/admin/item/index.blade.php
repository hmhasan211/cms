@extends('layouts.app')
@section('title','Items')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                   @include('layouts.partial.message')

                    <a href="{{route('item.create')}}" class="btn btn-info">Add itemes</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All itemes</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="item_table" class="display">
                                    <thead class=" text-primary">
                                    <th>
                                        Sl.
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Image
                                    </th>

                                    <th>
                                        Category Name
                                    </th>
                                    <th>
                                        Descriptiopn
                                    </th>
                                    <th>
                                        Price
                                    </th>

                                    <th>
                                        Created_at
                                    </th>
                                    <th>
                                        Updated_at
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($itemes as $key=>$item)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->image}}</td>

                                                <td>{{$item->description}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                <td>
                                                    <a href="{{route('item.edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i></a>
                                                    <button type="button" onclick="if(confirm('Are you sure want to delete?')){
                                                        event.preventDefault();document.getElementById('delete-form-{{$item->id}}').submit();
                                                    }else{
                                                        even.preventDefault();
                                                        }" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                                    <form method="POST" action="{{ route('item.destroy',$item->id) }}" id="delete-form-{{$item->id}}" style="display: none">
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
                $('#item_table').DataTable();
            } );
    </script>

@endpush
