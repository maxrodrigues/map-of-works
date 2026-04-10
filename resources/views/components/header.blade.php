@props([
    'title', 
    'description',
])
<div class="flex justify-between items-end mb-10">
    <div>
        <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">{{ $title }}</h1>
        <p class="text-on-surface-variant">{{ $description }}</p>
    </div>
</div>