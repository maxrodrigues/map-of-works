<x-layouts.app>
    <x-header 
        title="Monitoramento de Obras" 
        description="Visão geral em tempo real de obras em andamento e integração urbana." 
    />
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10 max-w-7xl">
        <!-- Municipalities Covered -->
        <div
            class="bg-white p-6 rounded-xl border-l-4 border-secondary shadow-sm flex flex-col justify-between h-40">
            <div class="flex justify-between items-start">
                <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Municipalities
                    Covered</span>
                <span class="material-symbols-outlined text-secondary"
                    style="font-variation-settings: 'FILL' 1;">location_on</span>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="text-5xl font-black text-on-surface">42</span>
                <span class="text-on-surface-variant text-sm">active zones</span>
            </div>
        </div>
        <!-- Total Active Projects -->
        <div
            class="bg-white p-6 rounded-xl border-l-4 border-primary shadow-sm flex flex-col justify-between h-40">
            <div class="flex justify-between items-start">
                <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Total Active
                    Projects</span>
                <span class="material-symbols-outlined text-primary"
                    style="font-variation-settings: 'FILL' 1;">construction</span>
            </div>
            <div class="flex items-end justify-between">
                <span class="text-5xl font-black text-on-surface">128</span>
                <div class="flex items-center text-secondary font-bold mb-1">
                    <span class="material-symbols-outlined text-sm">trending_up</span>
                    <span class="text-sm ml-1">+5% <span class="font-normal opacity-70">m/m</span></span>
                </div>
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
