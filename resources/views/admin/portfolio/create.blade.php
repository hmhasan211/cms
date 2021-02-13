@extends('layouts.app')
@section('title','Portfolio')

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
                            <h4 class="card-title ">Add New Portfolio</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-8 offset-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
                                        <input type="text" class="form-control" name="description">
                                    </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">Client</label>
                                        <input type="text" class="form-control" name="client">
                                    </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">Project Link</label>
                                        <input type="text" class="form-control" name="project_link">
                                    </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">skill</label>
                                        <div class="form-check bmd-label-floating">
                                            <input class="bmd-label-floating" type="checkbox" id="inlineCheckbox1" value="php">PHP
                                            <input class="bmd-label-floating" type="checkbox" id="inlineCheckbox1" value="python">Python
                                            <input class="bmd-label-floating" type="checkbox" id="inlineCheckbox1" value="java">Java
                                            <input class="bmd-label-floating" type="checkbox" id="inlineCheckbox1" value="c#">C#

                                        </div>
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

                                    <a class="btn btn-danger" href="{{route('portfolio.index')}}">Back</a>
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

