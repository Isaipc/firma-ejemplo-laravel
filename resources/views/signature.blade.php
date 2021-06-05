@extends('app')

@section('content')
<form method="POST" action="{{ route('signature.upload') }}">
    @csrf
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-4" role="group" aria-label="First group">
            <button id='clear-btn' type="button" class="btn btn-danger">Limpiar</button>
            <button id="btn-2" type="button" class="btn btn-primary">2</button>
            <button type="button" class="btn btn-primary">3</button>
            <button type="button" class="btn btn-primary">4</button>
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-success">PNG</button>
            <button type="button" class="btn btn-success">JPG</button>
            <button type="button" class="btn btn-success">SVG</button>
        </div>
        <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary">8</button>
        </div>
    </div>

    <div class="wrapper">
        <canvas id="signature-pad" class="signature-pad border border-primary"></canvas>
    </div>
    <div class="row mt-2">
        <button class="btn btn-success col-md-4">Guardar</button>
    </div>
</form>
@endsection