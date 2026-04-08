<x-layouts.app>
    <!-- Main Content Canvas -->
<main class="ml-64 mt-16 p-10 min-h-screen bg-surface">
    <!-- Header Section -->
    <header class="mb-10 max-w-6xl">
    <h1 class="text-4xl font-extrabold text-on-surface tracking-tight mb-2">Construction Monitoring</h1>
    <p class="text-on-surface-variant text-lg">Real-time overview of active site developments and urban integration.</p>
    </header>
    <!-- Key Metric Cards (Row 1) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10 max-w-7xl">
    <!-- Municipalities Covered -->
    <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-secondary shadow-sm flex flex-col justify-between h-40">
    <div class="flex justify-between items-start">
    <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Municipalities Covered</span>
    <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">location_on</span>
    </div>
    <div class="flex items-baseline gap-2">
    <span class="text-5xl font-black text-on-surface">42</span>
    <span class="text-on-surface-variant text-sm">active zones</span>
    </div>
    </div>
    <!-- Total Active Projects -->
    <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-primary shadow-sm flex flex-col justify-between h-40">
    <div class="flex justify-between items-start">
    <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Total Active Projects</span>
    <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">construction</span>
    </div>
    <div class="flex items-end justify-between">
    <span class="text-5xl font-black text-on-surface">128</span>
    <div class="flex items-center text-secondary font-bold mb-1">
    <span class="material-symbols-outlined text-sm">trending_up</span>
    <span class="text-sm ml-1">+5% <span class="font-normal opacity-70">m/m</span></span>
    </div>
    </div>
    </div>
    <!-- Budget Allocation -->
    <div class="bg-surface-container-lowest p-6 rounded-xl border-l-4 border-tertiary-container shadow-sm flex flex-col justify-between h-40">
    <div class="flex justify-between items-start">
    <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Budget Allocation</span>
    <span class="material-symbols-outlined text-tertiary-container">payments</span>
    </div>
    <div>
    <span class="text-4xl font-black text-on-surface">$12.4M</span>
    <div class="mt-4 w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
    <div class="bg-tertiary-container h-full w-3/4 rounded-full"></div>
    </div>
    <div class="flex justify-between mt-1">
    <span class="text-[10px] text-on-surface-variant font-bold">SPENT: $9.3M</span>
    <span class="text-[10px] text-on-surface-variant font-bold">REMAINING: 25%</span>
    </div>
    </div>
    </div>
    </div>
    <!-- Main Layout Split -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 max-w-7xl">
    <!-- Table Container (Main Section) -->
    <div class="lg:col-span-12 bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm">
    <div class="px-8 py-6 flex justify-between items-center bg-surface-container-low">
    <h3 class="text-xl font-bold text-on-surface">Recent Projects Registry</h3>
    <div class="flex gap-4">
    <button class="flex items-center gap-2 text-sm font-bold text-on-surface-variant bg-white px-4 py-2 rounded-lg border border-outline-variant hover:bg-surface-container transition-colors">
    <span class="material-symbols-outlined text-sm">filter_alt</span>
                                Filter
                            </button>
    <button class="flex items-center gap-2 text-sm font-bold text-on-surface-variant bg-white px-4 py-2 rounded-lg border border-outline-variant hover:bg-surface-container transition-colors">
    <span class="material-symbols-outlined text-sm">download</span>
                                Export
                            </button>
    </div>
    </div>
    <table class="w-full text-left border-collapse">
    <thead>
    <tr class="bg-surface-container-low/50">
    <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">Project ID</th>
    <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">Municipality</th>
    <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">Type</th>
    <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">Status</th>
    <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">Date Registered</th>
    <th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface-variant">Action</th>
    </tr>
    </thead>
    <tbody class="divide-y divide-surface-container">
    <tr class="hover:bg-surface-container-high transition-colors group">
    <td class="px-8 py-6 font-mono text-sm text-primary font-bold">PA-2024-089</td>
    <td class="px-8 py-6 text-sm font-medium text-on-surface">West Kensington</td>
    <td class="px-8 py-6">
    <span class="bg-primary-fixed text-on-primary-fixed-variant px-3 py-1 rounded-full text-xs font-bold">Residential</span>
    </td>
    <td class="px-8 py-6">
    <div class="flex items-center gap-2">
    <span class="w-2 h-2 rounded-full bg-secondary"></span>
    <span class="text-sm font-medium">In Progress</span>
    </div>
    </td>
    <td class="px-8 py-6 text-sm text-on-surface-variant">Oct 12, 2023</td>
    <td class="px-8 py-6">
    <span class="material-symbols-outlined text-on-surface-variant cursor-pointer group-hover:text-primary transition-colors">more_vert</span>
    </td>
    </tr>
    <tr class="hover:bg-surface-container-high transition-colors group">
    <td class="px-8 py-6 font-mono text-sm text-primary font-bold">PA-2024-112</td>
    <td class="px-8 py-6 text-sm font-medium text-on-surface">Silver Basin Industrial</td>
    <td class="px-8 py-6">
    <span class="bg-secondary-fixed text-on-secondary-fixed-variant px-3 py-1 rounded-full text-xs font-bold">Industrial</span>
    </td>
    <td class="px-8 py-6">
    <div class="flex items-center gap-2">
    <span class="w-2 h-2 rounded-full bg-on-surface-variant"></span>
    <span class="text-sm font-medium">Planning</span>
    </div>
    </td>
    <td class="px-8 py-6 text-sm text-on-surface-variant">Nov 04, 2023</td>
    <td class="px-8 py-6">
    <span class="material-symbols-outlined text-on-surface-variant cursor-pointer group-hover:text-primary transition-colors">more_vert</span>
    </td>
    </tr>
    <tr class="hover:bg-surface-container-high transition-colors group">
    <td class="px-8 py-6 font-mono text-sm text-primary font-bold">PA-2024-045</td>
    <td class="px-8 py-6 text-sm font-medium text-on-surface">Bridgeport Hub</td>
    <td class="px-8 py-6">
    <span class="bg-tertiary-fixed text-on-tertiary-fixed-variant px-3 py-1 rounded-full text-xs font-bold">Infrastructure</span>
    </td>
    <td class="px-8 py-6">
    <div class="flex items-center gap-2">
    <span class="w-2 h-2 rounded-full bg-primary-container"></span>
    <span class="text-sm font-medium">Completed</span>
    </div>
    </td>
    <td class="px-8 py-6 text-sm text-on-surface-variant">Jan 15, 2024</td>
    <td class="px-8 py-6">
    <span class="material-symbols-outlined text-on-surface-variant cursor-pointer group-hover:text-primary transition-colors">more_vert</span>
    </td>
    </tr>
    <tr class="hover:bg-surface-container-high transition-colors group">
    <td class="px-8 py-6 font-mono text-sm text-primary font-bold">PA-2024-156</td>
    <td class="px-8 py-6 text-sm font-medium text-on-surface">Easton Heights</td>
    <td class="px-8 py-6">
    <span class="bg-primary-fixed text-on-primary-fixed-variant px-3 py-1 rounded-full text-xs font-bold">Residential</span>
    </td>
    <td class="px-8 py-6">
    <div class="flex items-center gap-2">
    <span class="w-2 h-2 rounded-full bg-secondary"></span>
    <span class="text-sm font-medium">In Progress</span>
    </div>
    </td>
    <td class="px-8 py-6 text-sm text-on-surface-variant">Feb 22, 2024</td>
    <td class="px-8 py-6">
    <span class="material-symbols-outlined text-on-surface-variant cursor-pointer group-hover:text-primary transition-colors">more_vert</span>
    </td>
    </tr>
    </tbody>
    </table>
    <div class="px-8 py-4 bg-surface-container-low flex justify-between items-center">
    <span class="text-xs text-on-surface-variant font-medium italic">Showing 4 of 128 active projects</span>
    <div class="flex gap-2">
    <button class="p-1 rounded hover:bg-white text-on-surface-variant transition-colors"><span class="material-symbols-outlined text-lg">chevron_left</span></button>
    <button class="p-1 rounded hover:bg-white text-on-surface-variant transition-colors"><span class="material-symbols-outlined text-lg">chevron_right</span></button>
    </div>
    </div>
    </div>
    <!-- Bento Sub-Grid for Secondary Insights -->
    <div class="lg:col-span-8 bg-surface-container-low p-8 rounded-xl flex flex-col justify-center min-h-[300px]">
    <div class="flex justify-between items-start mb-6">
    <div>
    <h3 class="text-xl font-bold">Construction Progress Distribution</h3>
    <p class="text-sm text-on-surface-variant">Across all registered municipalities</p>
    </div>
    <span class="material-symbols-outlined text-on-surface-variant">insights</span>
    </div>
    <div class="flex items-end justify-between h-40 gap-4 mt-4">
    <div class="flex-1 flex flex-col items-center gap-2">
    <div class="w-full bg-secondary-container rounded-t-lg h-[40%]"></div>
    <span class="text-[10px] font-bold text-on-surface-variant">PLANNED</span>
    </div>
    <div class="flex-1 flex flex-col items-center gap-2">
    <div class="w-full bg-secondary rounded-t-lg h-[85%]"></div>
    <span class="text-[10px] font-bold text-on-surface-variant">ACTIVE</span>
    </div>
    <div class="flex-1 flex flex-col items-center gap-2">
    <div class="w-full bg-primary rounded-t-lg h-[60%]"></div>
    <span class="text-[10px] font-bold text-on-surface-variant">REVIEW</span>
    </div>
    <div class="flex-1 flex flex-col items-center gap-2">
    <div class="w-full bg-tertiary-container rounded-t-lg h-[30%]"></div>
    <span class="text-[10px] font-bold text-on-surface-variant">DELAYED</span>
    </div>
    <div class="flex-1 flex flex-col items-center gap-2">
    <div class="w-full bg-on-surface-variant rounded-t-lg h-[95%]"></div>
    <span class="text-[10px] font-bold text-on-surface-variant">FINISHED</span>
    </div>
    </div>
    </div>
    <div class="lg:col-span-4 bg-primary text-white p-8 rounded-xl relative overflow-hidden flex flex-col justify-between shadow-lg">
    <!-- Abstract visual element -->
    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
    <div>
    <span class="material-symbols-outlined text-4xl mb-4">map</span>
    <h3 class="text-2xl font-bold mb-2">Live Site View</h3>
    <p class="text-primary-fixed-dim text-sm leading-relaxed">Access high-resolution drone telemetry and site monitoring feeds directly from the field.</p>
    </div>
    <button class="bg-white text-primary px-6 py-3 rounded-lg font-bold text-sm w-fit mt-8 hover:bg-secondary-fixed transition-colors">
                        Launch Interactive Map
                    </button>
    <div class="mt-8 flex -space-x-2">
    <img alt="Team member" class="w-8 h-8 rounded-full border-2 border-primary" data-alt="Close up portrait of a female engineer in a construction helmet, soft bokeh background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnvnoKnt5MpK6cRp41_vwtRiMLUGlf50zuU416D76k-EWULP2TOrLC2de7Rz06I3aMeezFkgllTUIc4q4JvfDeiJX2QvxZGVE4k0ZsZ_VwXv6WHmT1wrwurqQZClrSCF9at07cLwZfq1ZJXL2UqmIYdv-gosCBv3WnsOIirIBcAJjzaPVkEnRvJRKrJ5p25bQ8WTleb9ejJ-Y_47rEfiDaNinhcBN3CLT1tODEMbLnty4qoTxtm7Bvz3WS31sRcaS2zSOVvHjO9SKz"/>
    <img alt="Team member" class="w-8 h-8 rounded-full border-2 border-primary" data-alt="Young professional man in a tech office, casual attire, smiling at the camera" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCa_ZzneFe4R4B7W0ow1x1b1WRjOCX-Z1SypNlLQmc49laYZZkbqEv0Sguz1gWw93g5qRv1HypFedPhiFH3PW1tqzU4DBMrClH0pmpFqJPEYyCZGYbko0RsnGWWMfct6InmiSkmalX2y5eLChm3mn5uFT8n6lNUiyA-tQIso7Z0QMzV1iMAEryDldaRY9jeGGy7QUNc8RYp8kYa7uYvlA6_RFiRlJ6ESFVXjuPg750X5LG95j4UHK79o072WVDxwV8gn4oJekLIgWw1"/>
    <img alt="Team member" class="w-8 h-8 rounded-full border-2 border-primary" data-alt="Detailed close up of a person eyes and forehead, neutral expression, crisp focus" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGu24aKi6L-1iNvr-iRyZuFaduVQ3O0cfu5qFLX7-lgIHn0CPCMky6pO68pGxTVzQACeNYCcIcjU1cmnIqTEKFLF70523aVDwHMmXb6aNLv5St_GVJnBTxui6bSJXjTctCRsha2nDY30ZpdWiZ_BgWvl7bJHhH1IsZamyYyAK5PeZDbTCRQlFJt22YYYmdIQB1HbecgnO1dmpAmCjrXM12epoaL-vmpBSv_oWKWcdJ5mPVxUQf_w-1mzo5zZSJeSntXfPSAE1Av_EX"/>
    <div class="w-8 h-8 rounded-full bg-primary-container border-2 border-primary flex items-center justify-center text-[10px] font-bold">+12</div>
    </div>
    </div>
    </div>
    </main>
</x-layouts.app>