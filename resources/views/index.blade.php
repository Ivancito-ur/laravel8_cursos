@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ultimos curso</h1>
        <h2 class="text-xl text-gray-600 mb-2 uppercase">Formate online como profesional</h2>
        <h3 class="text-lg text-gray-500 mb-2 uppercase">70% de los graduados duplican sus ingresos</h3>
        
        
        {{-- Se trae el component llamado course-list por parte de la librería de livewire. --}}
        <livewire:course-list>
    </div>
@endsection