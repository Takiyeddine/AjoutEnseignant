@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Choisissez l'une des fonctionalitées suivantes : </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('importer_file') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" id="file"  value="{{ old('file') }}">
                        @error('file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                         <div class="form-group">
                        <input type="text" class="form-control @error('file') is-invalid @enderror" name="nom_module"> 
                        @error('file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
