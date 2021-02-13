@extends('layouts.app')
@section('title','Member create')

@push('css')

@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <!-- show error messages -->
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span><strong> Sorry!!</strong> {{$error}}</span>
                            </div>
                        @endforeach
                    @endif
                      <!-- End error messages -->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Team</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            
                                <div class="col-md-8 offset-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">Designition</label>
                                        <input type="text" class="form-control" name="designition">
                                    </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">About</label>
                                        <input type="text" class="form-control" name="about">
                                    </div>

                                    <div class="">
                                        <label class="bmd-label-floating">Image</label>
                                        <input type="file" class="form-control" name="image" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Facebook </label>
                                        <input type="text" class="form-control" name="facebook">
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">twitter </label>
                                        <input type="text" class="form-control" name="twitter">
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Linkedin</label>
                                        <input type="text" class="form-control" name="linkedin">
                                    </div>

                                    <a class="btn btn-danger" href="{{route('team.index')}}">Back</a>
                                    <button type="submit" class="btn btn-primary ">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            @endsection
            @push('script')

          @endpush

