<?php include 'header.php'; ?>

    <section class="interna internas">
        <div class="topo-interno">
            <a class="text-[30px] text-[#00448F] font-semibold text-center flex gap-2">PEÇAS</a>
        </div><!-- topo-interno -->

        <div class="container">
            <div class="vitrine-internas">
                <div class="row">
                    <div class="col-md-6">
                        <div class="owl-carousel owl-theme owl-internas">
                            <div class="item">
                                <img src="assets/images/vitrine.png">
                            </div><!-- item -->
                        </div><!-- owl-carousel -->
                    </div><!-- col-md-6 -->
                    <div class="col-md-6">
                        <div class="form-procura">
                            <h2>Fique por dentro das últimas notícias!</h2>
                            <p>Encontre milhares de máquinas disponíveis em qualquer região do Brasil, filtre por categoria, marca ou localização</p>
                            <p>Encontre milhares de máquinas disponíveis em qualquer região do Brasil, filtre por categoria, marca ou localização</p>
                            <p>Encontre milhares de máquinas disponíveis em qualquer região do Brasil, filtre por categoria, marca ou localização</p>
                            <h4 class="preco">R$ 999,99</h4>
                        </div><!-- form-procura -->
                    </div><!-- col-md-6 -->
                </div><!-- row -->
            </div>

            <section class="interna locacao cadastro">
                <div class="listagem-produtos">
                    <form>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="flex flex-col w-full">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="flex flex-col border-solid pt-3 border-t-2 border-b-2 border-gray-400">
                                                <input id="nome" required="" type="text" value="" placeholder="Nome Completo *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                                <input id="email" required="" type="email" value="" placeholder="E-mail *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                                <input id="telefone" type="text" value="" placeholder="Telefone (DDD) + número">
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
                                                <textarea id="servico" required="" value="" placeholder="Serviço que deseja"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                                <textarea id="problema" required="" value="" placeholder="Qual problema necessita ser resolvido?"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col w-full mt-5">
                                    <div class="flex items-center justify-center mt-5 btns-flex">
                                        <button class="pt-[15px] pb-[15px] pl-[40px] pr-[40px] rounded-full bg-[var(--primary-color)] text-[var(--secundary-color)] font-bold btn-voltar">Voltar</button>
                                        <button class="pt-[15px] pb-[15px] pl-[40px] pr-[40px] rounded-full bg-[var(--primary-color)] text-[var(--secundary-color)] font-bold">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- listagem-produtos -->
            </section><!-- interna servicos -->
        </div><!-- container -->
    </section><!-- interna servicos -->

<?php include 'footer.php'; ?>