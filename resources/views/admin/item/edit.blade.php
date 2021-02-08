@extends('layouts.app')
@section('title','cateogry Edit')

@push('css')

@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-2">

                    @include('layouts.partial.message')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit Category</h4>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('category.update',$category->id)}}" >
                                @csrf
                                @method('PUT')
                                <div class="col-md-8 offset-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                    </div>

                                    <a class="btn btn-danger" href="{{route('category.index')}}">Back</a>
                                    <button type="submit" class="btn btn-primary ">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
@endsection
@push('script')

@endpush

