<x-layouts.app>
    <x-header 
        title="Upload de Obras" 
        description="Importe novos registros de construção de forma massiva através de arquivos CSV estruturados para o console analítico." 
    />

    @if($errors->any())
    <div class="bg-tertiary/40 rounded-xl p-4 shadow-sm my-2">
        @foreach($errors->all() as $error)
            <p class="text-xs text-tertiary font-semibold">{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="bg-white rounded-xl p-8 shadow-sm">
        <form action="{{ route('process-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="group relative flex flex-col items-center justify-center border-2 border-dashed border-outline-variant rounded-xl bg-surface p-12 transition-all hover:bg-surface-variant/40 hover:border-secondary">
                <span class="material-symbols-outlined text-6xl text-secondary mb-4 group-hover:scale-110 transition-transform">cloud_upload</span>
                <h3 class="text-xl font-headline font-bold text-primary mb-2">Arraste e Solte seu Arquivo</h3>
                <p class="text-on-surface-variant text-sm mb-2">ou clique para selecionar do seu computador</p>
                <div class="flex flex-col items-center mb-4">
                    <span class="text-sm font-medium">Formatos suportados: .csv, .xlsx</span>
                    <span class="text-xs text-on-surface-variant">Tamanho máximo: 25MB</span>
                </div>
                <button class="bg-primary text-white font-headline font-bold py-3 px-8 rounded-lg shadow-lg hover:shadow-primary/20 transition-all hover:scale-[1.02] active:scale-[0.98]">
                    Browse Files
                </button>
                <input name="file" accept=".csv" class="absolute inset-0 opacity-0 cursor-pointer" type="file" />
            </div>
            <div class="mt-2 flex items-center justify-end gap-2">
                <div id="file-added" class="hidden bg-surface rounded-lg p-4 text-xs font-medium text-primary w-full"></div>
                <button type="submit" class="bg-primary text-white font-headline font-bold py-3 px-8 rounded-lg shadow-lg hover:shadow-primary/20 transition-all hover:scale-[1.02] active:scale-[0.98]">
                    Upload
                </button>
            </div>
        </form>
    </div>
    <script>
        const fileInput = document.querySelector('input[type="file"]');
        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            const fileAdded = document.getElementById('file-added');
            fileAdded.innerHTML = `<span class="font-bold">Arquivo selecionado:</span> ${file.name}`;
            fileAdded.classList.remove('hidden');
        });
    </script>
</x-layouts.app>
