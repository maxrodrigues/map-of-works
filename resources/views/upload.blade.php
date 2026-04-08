<x-layouts.app>
    <x-header 
        title="Upload de Obras" 
        description="Importe novos registros de construção de forma massiva através de arquivos CSV estruturados para o console analítico." 
    />

    <div class="bg-white rounded-xl p-8 shadow-sm">
        <div class="group relative flex flex-col items-center justify-center border-2 border-dashed border-outline-variant rounded-xl bg-surface p-12 transition-all hover:bg-surface-variant/40 hover:border-secondary">
            <span class="material-symbols-outlined text-6xl text-secondary mb-4 group-hover:scale-110 transition-transform">cloud_upload</span>
            <h3 class="text-xl font-headline font-bold text-primary mb-2">Arraste e Solte seu Arquivo</h3>
            <p class="text-on-surface-variant text-sm mb-6">ou clique para selecionar do seu computador</p>
            <button class="bg-primary text-white font-headline font-bold py-3 px-8 rounded-lg shadow-lg hover:shadow-primary/20 transition-all hover:scale-[1.02] active:scale-[0.98]">
                Browse Files
            </button>
            <input class="absolute inset-0 opacity-0 cursor-pointer" type="file" />
        </div>
        <div class="mt-8 flex items-center justify-between p-4 bg-surface rounded-lg border border-outline-variant/20">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-primary">info</span>
                <span class="text-sm font-medium">Formatos suportados: .csv, .xlsx</span>
            </div>
            <span class="text-xs text-on-surface-variant">Tamanho máximo: 25MB</span>
        </div>
    </div>
</x-layouts.app>
