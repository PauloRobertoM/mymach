<?php include 'header.php'; ?>

<section class="interna locacao cadastro">
    <div class="topo-interno">
        <a class="text-[30px] text-[#00448F] font-semibold text-center flex gap-2">FAÇA SEU CADASTRO AGORA MESMO</a>
    </div><!-- topo-interno -->

    <div class="container">
        <div class="listagem-produtos">
            <form>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="font-bold text-[22px]">Escolha:</h1>
                            </div>
                            <div class="col-md-6">
                                <h2>Campos obrigatórios*</h2>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-md-6">
                                <input type="radio" id="tipoF" checked="" name="tipo" value="F">
                                <label for="tipoF">Pessoa Física</label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="tipoJ" name="tipo" value="J">
                                <label for="tipoJ">Pessoa Jurídica</label>
                            </div>
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="flex flex-col border-solid pt-3 border-t-2 border-b-2 border-gray-400">
                                <input id="nome" required="" type="text" value="" placeholder="Nome Completo *">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                        <input id="cpf" required="" type="text" value="" placeholder="CPF *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                        <input id="dataNascimento" required="" type="date" value="" placeholder="Data de nascimento *">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                        <input id="cep" required="" type="text" value="" placeholder="CEP *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                        <input id="cidade" type="text" value="" placeholder="Cidade">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                        <input id="celular" required="" type="text" value="" placeholder="Celular (DDD) + número *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                        <input id="telefone" type="text" value="" placeholder="Telefone (DDD) + número">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col w-full mt-5">
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-md-3">
                                    <label for="">Sexo *</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" id="feminino" name="sexo" value="F">
                                    <label for="feminino">Feminino</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" id="masculino" name="sexo" value="M">
                                    <label for="masculino">Masculino</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" id="outro" name="sexo" value="O">
                                    <label for="outro">Outro</label>
                                </div>
                            </div>
                            <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                <input id="email" required="" type="email" value="" placeholder="E-mail *">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                        <input id="senha" required="" type="password" value="" placeholder="Senha">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                        <input id="confirmSenha" required="" type="password" value="" placeholder="Confirma a senha *">
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-input" style="margin-bottom: 20px;">
                                <div>
                                    <label for="">Escolha os pacotes: *</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="prestador" name="pacotes" value="prestador">
                                    <label for="prestador">Prestador de Serviços (valor de lançamento R$4,90 por mês, para período de 12 meses)</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="locacao" name="pacotes" value="locacao">
                                    <label for="locacao">Locação e Venda (valor de lançamento R$29,90 por mês, para período de 12 meses)</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="pecas" name="pacotes" value="pecas">
                                    <label for="pecas">Peças (grátis para o lançamento, por ser um serviços apenas de divulgação da empresa)</label>
                                </div>
                            </div>

                            <div class="flex flex-col mt-5 items-center justify-center text-start">
                                <div class="flex w-[80%] xl:w-[60%] mt-3 items-start">
                                    <input class="mt-1 mr-2" type="radio" name="declaracaoInformacoes" id="declaracaoInformacoes" value="true">
                                    <label for="declaracaoInformacoes" class="w-full text-[14px] font-semibold">Declaro que as informaçõoes preenchidas são verídicas e referem-se a minha pessoa. Estou ciente quanto as penalidades previstas em lei sobre uso não autorizado e/ou indevido de informações de terceiros</label>
                                </div>
                                <div class="flex w-[80%] xl:w-[60%] mt-3 items-start">
                                    <input class="mt-1 mr-2" id="declaracaoAcordo" type="radio" name="declaracaoAcordo" value="true">
                                    <label class="w-full text-[14px] font-semibold" for="declaracaoAcordo">Declaro que li e estou de acordo com os Termos de Uso, Políticas de Privacidade e Proteção à Propriedade Intelectual da Mymach Commerce and Services!</label>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mt-5">
                                <button class="pt-[15px] pb-[15px] pl-[40px] pr-[40px] rounded-full bg-[var(--primary-color)] text-[var(--secundary-color)] font-bold">Concluir Cadastro</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- listagem-produtos -->
    </div><!-- container -->

    <section class="visibilidade-garantida">
        <div class="visibilidade-garantida-content">
            <div class="container">
                <h1 class="text-center" style="font-size: 44px;">Visibilidade garantida!</h1>
                <p>Junte-se a nós, cadastre-se como <strong>prestador de serviço</strong> ou cadastre <strong>seu equipamento</strong> de manutenção e aumente suas oportunidades de negócios hoje mesmo!</p>
            </div><!-- container -->
        </div><!-- visibilidade-garantida-content -->
    </section><!-- visibilidade-garantida -->
</section><!-- interna servicos -->

<?php include 'footer.php'; ?>