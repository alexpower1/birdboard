<div class="card" style="height: 250px;">
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-200 pl-4">
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </h3>

    <div class="text-gray-600">{{ $project->description, 100 }}</div>
</div>
