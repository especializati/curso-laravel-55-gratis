@if ($errors->any())
    <div class="alert alert-danger col-12 col-md-4" role="alert">
        @foreach ($errors->all() as $error)
            <span><i class="fas fa-exclamation-triangle mr-2"></i>{{ $error }} </span>
        @endforeach
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success col-12 col-md-4" role="alert">
        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger col-12 col-md-4" role="alert">
        <i class="fas fa-exclamation-triangle mr-2"></i>{{ session('error') }}
    </div>
@endif
