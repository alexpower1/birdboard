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
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-gray-600 text-lg font-normal mb-3">Tasks</h2>

                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">{{ $task->body }}</div>
                    @endforeach

                    <div class="card mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf

                            <input class="w-full" name="body" placeholder="Add a new task...">
                        </form>
                    </div>
                </div>

                <div class="mb-8">
                    <h2 class="text-gray-600 text-lg font-normal mb-3">General Notes</h2>
                    <textarea class="card w-full" style="min-height: 200px">Lorem ipsum</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3 lg:py-10">
                @include ('projects.card')
            </div>
        </div>
    </main>
@endsection
