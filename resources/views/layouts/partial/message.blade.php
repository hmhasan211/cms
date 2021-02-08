@if(session('successMsg'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span><strong> Congratzz!!</strong> {{session('successMsg')}}</span>
    </div>
@endif

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
