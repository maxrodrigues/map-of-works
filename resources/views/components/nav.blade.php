<aside class="h-screen w-64 fixed left-0 top-0 bg-[#f3f4f5] flex flex-col p-4 space-y-2 font-display text-sm font-medium tonal shift via surface-container-low">
    <div class="mb-6 px-2">
      <h2 class="text-primary font-extrabold text-lg">Acompanhamento de Obras</h2>
      <p class="text-xs uppercase tracking-widest text-on-surface-variant font-bold mb-1">Mapa de Obras</p>
    </div>
    <nav class="space-y-1">
      <x-nav.nav-item icon="dashboard" label="Dashboard" route="dashboard" />
      <x-nav.nav-item icon="upload_file" label="Upload" route="upload" />
      <x-nav.nav-item icon="table_chart" label="Controle de Obras" route="works" />
      <x-nav.nav-item icon="map" label="Mapa de Obras" route="works-map" />
    </nav>
</aside>