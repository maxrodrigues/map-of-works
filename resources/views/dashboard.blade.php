<x-layouts.app>
    <x-header 
        title="Metrícas de Obras" 
        description="Visão geral das metrícas de obras em andamento e integração urbana." 
    />

    <div class="grid grid-cols-12 gap-6 mb-8">
        <div class="col-span-4 bg-white shadow p-6 rounded-xl flex flex-col justify-center">
            <span class="text-xs font-bold text-primary uppercase tracking-widest mb-1">Métricas Globais</span>
            <div class="flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-on-surface">{{ $count }}</span>
                <span class="text-sm text-on-surface-variant">Projetos Ativos</span>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center gap-8 mb-10 max-w-7xl">
        <div class="bg-white p-6 rounded-xl shadow-sm flex flex-col justify-between">
            {!! $chart->container() !!}
            {!! $chart->script() !!}
        </div>
    </div>
         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
</x-layouts.app>
