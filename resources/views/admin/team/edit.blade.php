@extends('layouts.app')
@section('title','Team Edit')

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
                            <h4 class="card-title ">Edit Team</h4>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('team.update',$team->id)}}"  enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                <input type="hidden" class="form-control" name="old_image" value="{{$team->image}}">
                                <div class="col-md-8 offset-2">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Team Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$team->name}}">
                                            <span class="text-danger"> {{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                        </div>
    
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Designition</label>
                                            <input type="text" class="form-control" name="designition" value="{{$team->designition}}">
                                            <span class="text-danger"> {{ $errors->has('designition') ? $errors->first('designition') : '' }}</span>
                                        </div>
    
                                        <div class="form-group">
                                            <label class="bmd-label-floating">About</label>
                                            <input type="text" class="form-control" name="about" value="{{$team->about}}">
                                            <span class="text-danger"> {{ $errors->has('about') ? $errors->first('about') : '' }}</span>
                                        </div>
    
                                        <div class="">
                                            <label class="bmd-label-floating">Image</label>
                                            <input type="file" class="form-control" name="image"/>
                                            <img src="{{asset($team->image)}}" alt="team image" width="100px">
                                        </div>
    
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Facebook </label>
                                            <input type="text" class="form-control" name="facebook" value="{{$team->facebook}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">twitter </label>
                                            <input type="text" class="form-control" name="twitter" value="{{$team->twitter}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Linkedin</label>
                                            <input type="text" class="form-control" name="linkedin" value="{{$team->linkedin}}">
                                        </div>
                                        <a class="btn btn-danger" href="{{route('team.index')}}">Back</a>
                                    <button type="submit" class="btn btn-primary ">Update</button>
    
                                    </div>
                        </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
@endsection
@push('script')

@endpush

