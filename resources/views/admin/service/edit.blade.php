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
                            <h4 class="card-title ">Edit service</h4>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('service.update',$service->id)}}" >
                                @csrf
                                @method('POST')
                                <div class="col-md-8 offset-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$service->title}}">
                                    </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title" value="{{$service->sub_title}}">
                                    </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
                                        <input type="text" class="form-control" name="description" value="{{$service->description}}">
                                    </div>

                                    <a class="btn btn-danger" href="{{route('service.index')}}">Back</a>
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

