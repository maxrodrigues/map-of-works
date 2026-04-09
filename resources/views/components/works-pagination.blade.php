@if ($paginator->hasPages())
    <div class="bg-surface-container-low px-8 py-4 flex justify-between items-center text-xs text-on-surface-variant">
        <div>
            {{ __('pagination.showing') }} 
            @if ($paginator->firstItem())
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('pagination.to') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
            @else
                {{ $paginator->count() }}
            @endif
            {!! __('pagination.of') !!}
            <span class="font-medium">{{ $paginator->total() }}</span>
            {{ __('pagination.works_registered') }}
        </div>
        <div class="flex gap-4">
            @if ($paginator->onFirstPage())
                <span class="flex items-center gap-1 text-primary ">
                    <span class="material-symbols-outlined text-sm">chevron_left</span> {{ __('pagination.previous') }}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center gap-1 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined text-sm">chevron_left</span> {{ __('pagination.previous') }}
                </a>
            @endif
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center gap-1 hover:text-primary transition-colors font-bold">
                    {{ __('pagination.next') }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                </a>
            @else
                <span class="flex items-center gap-1 text-primary ">
                    {{ __('pagination.next') }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                </span>
            @endif
        </div>
    </div>
@endif