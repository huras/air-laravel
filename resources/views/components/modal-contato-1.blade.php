<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content p-0 border-radius-0">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-500" id="contactModalLabel">Inicie a conversa com a Air.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body pt-0">
                <p class="text-black fs-16">
                    <strong>Preencha os campos abaixo e aguarde um dos nossos consultores entrar em contato.</strong>
                    Um dos nossos consultores entrará em contato o mais breve possível.
                </p>

                <form action="{{ route('contact.send') }}" method="POST" class='mt-24'>
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="*Nome" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="company" class="form-control" placeholder="*Empresa" required>
                        </div>
                        <div class="col-md-6">
                            <select name="role" class="form-select" required>
                                <option value="ceo">Sócio(a) / CEO / Proprietário</option>
                                <option value="diretor-vendas">Diretor(a) de vendas</option>
                                <option value="diretor-marketing">Diretor(a) de Marketing</option>
                                <option value="diretor-outras">Diretor(a) de Outras Áreas</option>
                                <option value="gerente-marketing">Gerente de Marketing</option>
                                <option value="gerente-vendas">Gerente de Vendas</option>
                                <option value="coordenador-marketing">Coordenador(a)/Supervisor(a) de Marketing</option>
                                <option value="coordenador-vendas">Coordenador(a)/Supervisor(a) de Vendas</option>
                                <option value="assistente-marketing">Analista/Assistente de Marketing</option>
                                <option value="assistente-vendas">Analista/Assistente de Vendas</option>
                                <option value="vendedor">Vendedor(a) / Executivo(a) de Contas</option>
                                <option value="estudante">Estudante</option>
                                <option value="outros">Outros Cargos</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="*Qual seu telefone/whatsapp" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="*E-mail corporativo" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="website" class="form-control" placeholder="*Site da empresa" required>
                        </div>
                        <div class="col-md-6">
                            <select name="segment" class="form-select" required>
                                <option value="agronegocio">Agronegócio</option>
                                <option value="consultoria">Consultorias e Treinamentos</option>
                                <option value="ecommerce">Ecommerce</option>
                                <option value="educacao">Educação e Ensino</option>
                                <option value="marketing-publicidade">Agência de Marketing e Publicidade</option>
                                <option value="engenharia">Engenharia e Indústria Geral</option>
                                <option value="eventos">Eventos</option>
                                <option value="juridico-financeiro">Financeiro, Jurídico e Serviços Relacionados</option>
                                <option value="governo">Governo e Órgãos Públicos</option>
                                <option value="hardware-eletronicos">Hardware e Eletrônicos</option>
                                <option value="imobiliario">Imobiliários</option>
                                <option value="midia-comunicacao">Mídia e Comunicação</option>
                                <option value="ongs">ONGs</option>
                                <option value="saude-estetica">Saúde e Estática</option>
                                <option value="seguros">Seguros</option>
                                <option value="servicos-geral">Serviços em Geral</option>
                                <option value="rh-coaching">Serviços em RH e Coaching</option>
                                <option value="software-cloud">Software e Cloud</option>
                                <option value="telecomunicacoes">Telecomunicações</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="employees" class="form-control" placeholder="*Número de funcionários" required>
                        </div>
                        <div class="col-12 text-area-with-counter">
                            <textarea name="message" class="form-control" rows="8" maxlength="400" placeholder="Mensagem (opcional)"></textarea>
                            <span class="text-muted fs-12 text-area-counter">0/400</span>
                            <small class="">*Preenchimento obrigatório</small>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-11 me-auto">
                            <p class="mt-2 fs-12 fw-300 mt-32">
                                Ao preencher o formulário, concordo em receber comunicações da empresa com conteúdos e informações relevantes.
                                Ao informar meus dados, eu concordo com a <a class='text-black' href="/privacy-policy" target="_blank">Política de Privacidade</a>.
                            </p>

                            <p class="mt-2 fs-12 fw-300">
                                Você pode alterar suas permissões de comunicação a qualquer tempo. Nos comprometemos em guardar suas informações em segurança.
                            </p>
                        </div>
                    </div>


                    <div class="mt-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('#contactModal select[name=segment]').select2({
            dropdownParent: $('#contactModal'),
            minimumResultsForSearch: Infinity,
            placeholder: "*Segmento da empresa",
            allowClear: true
        });

        $('#contactModal select[name=role]').select2({
            dropdownParent: $('#contactModal'),
            minimumResultsForSearch: Infinity,
            placeholder: "*Cargo na empresa",
            allowClear: true
        });

        const selects = document.querySelectorAll('#contactModal select');
        selects.forEach(select => {
            const $select = $(select);
            $select.val(null).trigger('change');
        });
    });
</script>