<x-layouts.app>
    <x-header title="Controle de Obras"
        description="Visão consolidada do portfólio de infraestrutura e projetos ativos em escala regional."
        hasButton="true" buttonText="Nova Obra" buttonIcon="add" buttonRoute="works.create" />
    <div class="grid grid-cols-12 gap-6 mb-8">
        <div class="col-span-8 bg-white shadow p-6 rounded-xl flex items-center gap-8">
            <div class="flex-1">
                <label
                    class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-2">Município</label>
                <select
                    class="w-full bg-transparent border-0 border-b border-outline-variant focus:border-primary focus:ring-0 text-on-surface font-medium py-1">
                    <option>Todos os Municípios</option>
                    <option>São Paulo</option>
                    <option>Rio de Janeiro</option>
                    <option>Belo Horizonte</option>
                </select>
            </div>
            <div class="flex-1">
                <label class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-2">Status
                    do Projeto</label>
                <div class="flex gap-2">
                    <span
                        class="px-3 py-1 bg-secondary-container text-on-secondary-container text-xs font-semibold rounded-full cursor-pointer">Em
                        Execução</span>
                    <span
                        class="px-3 py-1 bg-surface-container text-slate-500 text-xs font-semibold rounded-full cursor-pointer hover:bg-slate-200">Planejamento</span>
                    <span
                        class="px-3 py-1 bg-surface-container text-slate-500 text-xs font-semibold rounded-full cursor-pointer hover:bg-slate-200">Concluído</span>
                </div>
            </div>
        </div>
        <div class="col-span-4 bg-white shadow p-6 rounded-xl flex flex-col justify-center">
            <span class="text-xs font-bold text-primary uppercase tracking-widest mb-1">Métricas Globais</span>
            <div class="flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-on-surface">24</span>
                <span class="text-sm text-on-surface-variant">Projetos Ativos</span>
            </div>
        </div>

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
                    <!-- Row 1 -->
                    <tr class="hover:bg-surface-container-high transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary-fixed rounded flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">apartment</span>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-on-surface">Expansão de Terminal Logístico
                                    </div>
                                    <div class="text-xs text-on-surface-variant">Ref: OB-2024-001</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface">São Paulo</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">-23.5505</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">-46.6333</td>
                        <td class="px-8 py-6 text-right">
                            <button class="text-primary hover:bg-primary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-tertiary hover:bg-tertiary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="hover:bg-surface-container-high transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-secondary-fixed rounded flex items-center justify-center">
                                    <span class="material-symbols-outlined text-secondary">foundation</span>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-on-surface">Ponte Estaiada Rio Sul</div>
                                    <div class="text-xs text-on-surface-variant">Ref: OB-2024-009</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface">Curitiba</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">-25.4284</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">-49.2733</td>
                        <td class="px-8 py-6 text-right">
                            <button class="text-primary hover:bg-primary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-tertiary hover:bg-tertiary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="hover:bg-surface-container-high transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-surface-variant rounded flex items-center justify-center">
                                    <span class="material-symbols-outlined text-outline">road</span>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-on-surface">Pavimentação Setor Norte</div>
                                    <div class="text-xs text-on-surface-variant">Ref: OB-2023-142</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface">Belo Horizonte</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">-19.9167</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">-43.9333</td>
                        <td class="px-8 py-6 text-right">
                            <button class="text-primary hover:bg-primary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-tertiary hover:bg-tertiary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="hover:bg-surface-container-high transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary-fixed rounded flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">solar_power</span>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-on-surface">Usina Solar Fotovoltaica</div>
                                    <div class="text-xs text-on-surface-variant">Ref: OB-2024-022</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-sm text-on-surface">Petrolina</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">-9.3884</td>
                        <td class="px-8 py-6 text-sm font-mono text-center">-40.5025</td>
                        <td class="px-8 py-6 text-right">
                            <button class="text-primary hover:bg-primary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                            <button class="text-tertiary hover:bg-tertiary/10 p-2 rounded-full transition-all">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div
                class="bg-surface-container-low px-8 py-4 flex justify-between items-center text-xs text-on-surface-variant">
                <div>Mostrando 4 de 24 obras cadastradas</div>
                <div class="flex gap-4">
                    <button class="flex items-center gap-1 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-sm">chevron_left</span> Anterior
                    </button>
                    <button class="flex items-center gap-1 hover:text-primary transition-colors font-bold">
                        Próxima <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
            <div class="px-5 pt-10 pb-6">
                <div class="flex items-center gap-3 mb-2">
                    <div
                        class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">add_business</span>
                    </div>
                    <h2 class="font-headline text-2xl font-extrabold text-on-surface tracking-tight">
                        Cadastrar Nova Obra</h2>
                </div>
                <p class="text-on-surface-variant text-sm font-medium ml-13">
                    Preencha os detalhes arquitetônicos para inicializar um novo perfil de monitoramento de obra.</p>
            </div>
            <form class="p-8 space-y-6">
                <div>
                    <label class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-2">
                        Título do Projeto
                    </label>
                    <input
                        class="w-full bg-transparent border-0 border-b-2 border-surface-variant focus:border-primary focus:ring-0 text-on-surface font-medium py-2 transition-all"
                        placeholder="Ex: Construção de Viaduto Central" type="text" />
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label
                            class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-2">Município</label>
                        <select
                            class="w-full bg-transparent border-0 border-b-2 border-surface-variant focus:border-primary focus:ring-0 text-on-surface font-medium py-2">
                            <option value="">Selecione...</option>
                            <option>São Paulo</option>
                            <option>Rio de Janeiro</option>
                        </select>
                    </div>
                    <div>
                        <label
                            class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-2">Status
                            Inicial</label>
                        <select
                            class="w-full bg-transparent border-0 border-b-2 border-surface-variant focus:border-primary focus:ring-0 text-on-surface font-medium py-2">
                            <option>Planejamento</option>
                            <option>Licenciamento</option>
                            <option>Execução</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label
                            class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-2">Latitude</label>
                        <input
                            class="w-full bg-transparent border-0 border-b-2 border-surface-variant focus:border-primary focus:ring-0 text-on-surface font-mono py-2"
                            placeholder="-23.5505" type="text" />
                    </div>
                    <div>
                        <label
                            class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-2">Longitude</label>
                        <input
                            class="w-full bg-transparent border-0 border-b-2 border-surface-variant focus:border-primary focus:ring-0 text-on-surface font-mono py-2"
                            placeholder="-46.6333" type="text" />
                    </div>
                </div>
                <div class="pt-6 flex justify-end gap-4">
                    <button
                        data-modal-hide="default-modal"
                        class="px-6 py-2.5 rounded-lg font-bold text-on-surface-variant hover:bg-surface-container-high transition-colors"
                        type="button">Cancelar</button>
                    <button
                        class="bg-primary text-on-primary px-8 py-2.5 rounded-lg font-bold hover:bg-primary-container transition-all shadow-lg shadow-primary/20"
                        type="submit">Salvar Obra</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
