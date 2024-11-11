<?php include 'header.php'; ?>

    <section class="interna locacao cadastro">
        <div class="topo-interno">
            <a class="text-[30px] text-[#00448F] font-semibold text-center flex gap-2">ENTRE OU CADASTRE-SE</a>
        </div><!-- topo-interno -->

        <div class="container">
            <div class="listagem-produtos">
                <form>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="lateral1">
                                        <h1 class="font-bold text-[22px]" style="margin-bottom: 20px;">Já tenho cadastro</h1>
                                        <div class="flex flex-col w-full mt-5">
                                            <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                                <input id="email" required="" type="email" value="" placeholder="E-mail *">
                                            </div>
                                            <div class="flex flex-col border-solid pt-3 border-b-2 border-gray-400">
                                                <input id="senha" required="" type="password" value="" placeholder="Senha">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="flex items-center justify-center mt-5">
                                                        <button class="pt-[15px] pb-[15px] pl-[40px] pr-[40px] rounded-full bg-[var(--primary-color)] text-[var(--secundary-color)] font-bold" style="margin-bottom: 10px; width: 100%;">Entrar</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <h2><a href="" style="color: #333;">Esqueceu sua senha?</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="lateral2">
                                        <h1 class="font-bold text-[22px]" style="margin-bottom: 20px;">Cadastre-se Agora Mesmo</h1>
                                        <p>Crie sua conta exclusiva, tanto para Prestar Serviços, Locar ou Vender máquinas e Equipamentos ou ainda apenas divulgar sua revenda de peças.</p>
                                        <button class="pt-[15px] pb-[15px] pl-[40px] pr-[40px] rounded-full bg-[var(--primary-color)] text-[var(--secundary-color)] font-bold">Ir para criar cadastro</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- listagem-produtos -->
        </div><!-- container -->
    </section><!-- interna servicos -->

<?php include 'footer.php'; ?>