@extends('layouts.app')
@section('title','slider')

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
                            <h4 class="card-title ">Add New Slider</h4>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('slider.update',$slider->id)}}"  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-8 offset-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$slider->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title" value="{{$slider->sub_title}}">
                                    </div>
                                    <div class="">
                                        <label class="bmd-label-floating">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <a class="btn btn-danger" href="{{route('slider.index')}}">Back</a>
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

