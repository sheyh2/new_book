@if (session('error'))
    <div class="alert alert-danger alert-dismissible border-0 fade show" role="alert">
        <strong>Error!</strong> {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible border-0 fade show" role="alert">
            <strong>Error!</strong> {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible border-0 fade show" role="alert">
        <strong>Success: </strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
