<x-layouts.app>
    <x-header title="Controle de Obras" description="Visão consolidada do portfólio de infraestrutura e projetos ativos em escala regional."/>
    <div class="grid grid-cols-12 gap-6 mb-8">
        <div class="col-span-12 bg-white rounded-xl shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container">
                        <th class="px-8 py-5 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant">
                            Obra / Título</th>
                        <th class="px-8 py-5 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant">
                            Município</th>
                        <th
                            class="px-8 py-5 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant text-center">
                            Latitude</th>
                        <th
                            class="px-8 py-5 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant text-center">
                            Longitude</th>
                        <th
                            class="px-8 py-5 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant text-right">
                            Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y-0">
                    @forelse ($works as $work)
                    <tr class="hover:bg-surface-container-high transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary-fixed rounded flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">apartment</span>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-on-surface">
                                        @if(strlen($work->description) > 35)
                                            {{ substr($work->description, 0, 35) }}...
                                        @else
                                            {{ $work->description }}
                                        @endif
                                    </div>
                                    <div class="text-xs text-on-surface-variant">Ref: {{ $work->number }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface">{{ $work->municipality }}</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">{{ $work->latitude }}</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">{{ $work->longitude }}</td>
                        <td class="px-8 py-6 text-right">
                            <button class="text-primary hover:bg-primary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-tertiary hover:bg-tertiary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-8 py-6 text-center text-on-surface-variant">Nenhuma obra encontrada</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $works->onEachSide(3)->links('components.works-pagination') }}
        </div>
    </div>
</x-layouts.app>
