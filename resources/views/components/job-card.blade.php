<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Employer</div>

    <div class="py-8">
        <h3 class="font-bold group-hover:text-blue-600 text-xl transition-colors duration-300">Job title</h3>
        <p class="text-sm mt-4">Contract - Salary</p>
    </div>
    
    <div class="flex justify-between item-center mt-auto">
        <div>
            <x-tag size="small">Tags</x-tag>
            <x-tag size="small">Tags</x-tag>
            <x-tag size="small">Tags</x-tag>
        </div>
        <x-employer-logo :width="42"/>
    </div>
</x-panel>