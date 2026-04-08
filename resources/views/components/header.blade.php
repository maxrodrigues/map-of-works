@props([
    'title', 
    'description',
    'hasButton' => false,
    'buttonText' => null,
    'buttonIcon' => null,
    'buttonRoute' => null
])
<div class="flex justify-between items-end mb-12">
    <div>
        <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">{{ $title }}</h1>
        <p class="text-on-surface-variant max-w-lg">{{ $description }}</p>
    </div>

    @if ($hasButton)
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="bg-gradient-to-r from-primary to-primary-container text-white px-6 py-3 rounded-lg font-bold flex items-center gap-2 hover:scale-[0.98] transition-transform duration-150 active:opacity-80">
            <span class="material-symbols-outlined">{{ $buttonIcon }}</span>
            {{ $buttonText }}
        </button>
    @endif
</div>