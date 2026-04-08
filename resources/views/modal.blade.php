<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
            <form class="p-8 space-y-6">
                <div>
                    <label
                        class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-2">Título
                        do Projeto</label>
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
                        class="px-6 py-2.5 rounded-lg font-bold text-on-surface-variant hover:bg-surface-container-high transition-colors"
                        type="button">Cancelar</button>
                    <button
                        class="bg-primary text-on-primary px-8 py-2.5 rounded-lg font-bold hover:bg-primary-container transition-all shadow-lg shadow-primary/20"
                        type="submit">Salvar Obra</button>
                </div>
            </form>
            {{-- <div class="space-y-4 md:space-y-6 py-4 md:py-6">
                <p class="leading-relaxed text-body">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="leading-relaxed text-body">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div> --}}
        </div>
    </div>
</div>
