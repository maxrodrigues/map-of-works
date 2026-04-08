<x-layouts.app>
    <x-header 
        title="Monitoramento de Obras" 
        description="Visão geral em tempo real de obras em andamento e integração urbana." 
    />
        <!-- Key Metric Cards (Row 1) -->
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
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 max-w-7xl">
            <div class="lg:col-span-12 bg-white rounded-xl overflow-hidden shadow-sm">
                <div class="px-8 py-6 flex justify-between items-center bg-surface-container">
                    <h3 class="text-xl font-bold text-on-surface">Recent Projects Registry</h3>
                    <div class="flex gap-4">
                        <button
                            class="flex items-center gap-2 text-sm font-bold text-on-surface-variant bg-white px-4 py-2 rounded-lg border border-outline-variant hover:bg-surface-container transition-colors">
                            <span class="material-symbols-outlined text-sm">filter_alt</span>
                            Filter
                        </button>
                        <button
                            class="flex items-center gap-2 text-sm font-bold text-on-surface-variant bg-white px-4 py-2 rounded-lg border border-outline-variant hover:bg-surface-container transition-colors">
                            <span class="material-symbols-outlined text-sm">download</span>
                            Export
                        </button>
                    </div>
                </div>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container/50">
                            <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                                Project ID</th>
                            <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                                Municipality</th>
                            <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                                Type</th>
                            <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                                Status</th>
                            <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                                Date Registered</th>
                            <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container">
                        <tr class="hover:bg-surface-container-high transition-colors group">
                            <td class="px-8 py-6 font-mono text-sm text-primary font-bold">PA-2024-089</td>
                            <td class="px-8 py-6 text-sm font-medium text-on-surface">West Kensington</td>
                            <td class="px-8 py-6">
                                <span
                                    class="bg-primary-fixed text-on-primary-fixed-variant px-3 py-1 rounded-full text-xs font-bold">Residential</span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                    <span class="text-sm font-medium">In Progress</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-sm text-on-surface-variant">Oct 12, 2023</td>
                            <td class="px-8 py-6">
                                <span
                                    class="material-symbols-outlined text-on-surface-variant cursor-pointer group-hover:text-primary transition-colors">more_vert</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-high transition-colors group">
                            <td class="px-8 py-6 font-mono text-sm text-primary font-bold">PA-2024-112</td>
                            <td class="px-8 py-6 text-sm font-medium text-on-surface">Silver Basin Industrial</td>
                            <td class="px-8 py-6">
                                <span
                                    class="bg-secondary-fixed text-on-secondary-fixed-variant px-3 py-1 rounded-full text-xs font-bold">Industrial</span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-on-surface-variant"></span>
                                    <span class="text-sm font-medium">Planning</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-sm text-on-surface-variant">Nov 04, 2023</td>
                            <td class="px-8 py-6">
                                <span
                                    class="material-symbols-outlined text-on-surface-variant cursor-pointer group-hover:text-primary transition-colors">more_vert</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-high transition-colors group">
                            <td class="px-8 py-6 font-mono text-sm text-primary font-bold">PA-2024-045</td>
                            <td class="px-8 py-6 text-sm font-medium text-on-surface">Bridgeport Hub</td>
                            <td class="px-8 py-6">
                                <span
                                    class="bg-tertiary-fixed text-on-tertiary-fixed-variant px-3 py-1 rounded-full text-xs font-bold">Infrastructure</span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-primary-container"></span>
                                    <span class="text-sm font-medium">Completed</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-sm text-on-surface-variant">Jan 15, 2024</td>
                            <td class="px-8 py-6">
                                <span
                                    class="material-symbols-outlined text-on-surface-variant cursor-pointer group-hover:text-primary transition-colors">more_vert</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-high transition-colors group">
                            <td class="px-8 py-6 font-mono text-sm text-primary font-bold">PA-2024-156</td>
                            <td class="px-8 py-6 text-sm font-medium text-on-surface">Easton Heights</td>
                            <td class="px-8 py-6">
                                <span
                                    class="bg-primary-fixed text-on-primary-fixed-variant px-3 py-1 rounded-full text-xs font-bold">Residential</span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                    <span class="text-sm font-medium">In Progress</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-sm text-on-surface-variant">Feb 22, 2024</td>
                            <td class="px-8 py-6">
                                <span
                                    class="material-symbols-outlined text-on-surface-variant cursor-pointer group-hover:text-primary transition-colors">more_vert</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="px-8 py-4 bg-surface-container-low flex justify-between items-center">
                    <span class="text-xs text-on-surface-variant font-medium italic">Showing 4 of 128 active
                        projects</span>
                    <div class="flex gap-2">
                        <button class="p-1 rounded hover:bg-white text-on-surface-variant transition-colors"><span
                                class="material-symbols-outlined text-lg">chevron_left</span></button>
                        <button class="p-1 rounded hover:bg-white text-on-surface-variant transition-colors"><span
                                class="material-symbols-outlined text-lg">chevron_right</span></button>
                    </div>
                </div>
            </div>
        </div>
</x-layouts.app>
