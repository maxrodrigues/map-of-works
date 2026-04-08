@props(['icon', 'label', 'route'])
<a class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:text-primary transition-all ease-in-out duration-200" href="{{ route($route) }}">
    <span class="material-symbols-outlined">{{ $icon }}</span>
    <span>{{ $label }}</span>
</a>