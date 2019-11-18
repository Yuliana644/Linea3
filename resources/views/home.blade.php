@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- Creaar formulario  --}}
                    {!!Form::open(['route' => 'file.save', 'method' => 'POST','files'=> true ])!!}
                        {!! Form::label('imagen', 'Imagen') !!}
                        {!! Form::file('imagen') !!}
                        <button type="submit">Guardar</button>
                    {!!Form::close()!!}

                    @foreach ($images as $image)
                        <img src="{{Storage::disk('public')->url($image->imagen)}}" alt="" class="img mt-5" width="500">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
