@props(['job'])
<x-panel>
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Employer</a>
    
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">Job title</h3>
        <p class="text-sm text-gray-400 mt-auto">Contract - Salary</p>
    </div>
    
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag size="small" />
    @endforeach
    </div>
</x-panel>