@extends('layouts.web')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1">
            <ul class="flex flex-col">
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">
                    Contenido
                </li>
                @foreach ($course->posts as $post)
                    <li class="flex items-center text-gray-600 mt-2 rounded-md" type="number">
                        {{ $post->name }}
                        @if ($post->free)
                            <span class="text-xs text-white font-semibold bg-green-500 px-2 rounded-full ml-auto">
                                Gratis
                            </span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="p-8 bg-gray-100 col-span-2">
            <img src="{{ $course->image }}" alt="" srcset="">
            <h2 class="text-4xl">{{ $course->name }}</h2>
            <p>{{ $course->description }}</p>
            <div class="flex mt-3 rounded-full">
                <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2">
                <div>
                    <p class="text-gray-500 text-sm">
                        {{ $course->user->name }}
                    </p>
                    <p class="text-gray-300 text-xm">
                        {{ $course->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 my-8">
                @foreach ($course->similar() as $course)
                <x-CourseCard :course="$course"/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ultimos curso</h1>
        <h2 class="text-xl text-gray-600 mb-2 uppercase">Formate online como profesional</h2>
        <h3 class="text-lg text-gray-500 mb-2 uppercase">70% de los graduados duplican sus ingresos</h3>


        {{-- Se trae el component llamado course-list por parte de la librería de livewire. --}}
        <livewire:course-list>
    </div>
@endsection
