@extends('layouts.app')

@section('content')
    <header class="flex items-centered mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-gray-600 text-sm font-normal">
                <a href="/projects" class="text-grey-600 text-sm font-normal no-underline">
                    My Projects
                </a> 
                / {{ $project->title }}
            </p>

            <a href="/projects/create" class="button">New Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6 lg:mb-0">
                <div class="mb-8">
                    <h2 class="text-gray-600 text-lg font-normal mb-3">Tasks</h2>
                    {{-- <div class="card mb-3">Lorem ipsum</div>
                    <div class="card mb-3">Lorem ipsum</div>
                    <div class="card mb-3">Lorem ipsum</div>
                    <div class="card mb-3">Lorem ipsum</div>
                    <div class="card">Lorem ipsum</div> --}}

                    @forelse ($project->tasks as $task)
                        <div class="lg:w-1/3 px-3 pb-6">
                            @include('tasks.card')
                        </div>
                    @empty
                        <div>No tasks yet.</div>
                    @endforelse
                </div>

                <div class="mb-8">
                    <h2 class="text-gray-600 text-lg font-normal mb-3">General Notes</h2>
                    <textarea class="card w-full" style="min-height: 200px">Lorem ipsum</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include ('projects.card')
            </div>
        </div>
    </main>
@endsection
