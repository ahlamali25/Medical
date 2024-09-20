<!-- @extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $doctor->name }}</h2>
                <p class="card-text mt-3">{{ $doctor->specialization }}</p>
                <p class="card-text">{{ $doctor->email }}</p>
                

                 <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a> 
            </div>
        </div>
    </div>
@endsection -->