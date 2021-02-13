@extends('layouts.app')
@section('title','Edit Menu')

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
                            <h4 class="card-title ">Add New Menu</h4>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('menu.update',$menu->id)}}"  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-8 offset-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="name" value="{{$menu->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sub Title</label>
                                        <input type="text" class="form-control" name="link" value="{{$menu->link}}">
                                    </div>

                                    <a class="btn btn-danger" href="{{route('menu.index')}}">Back</a>
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

