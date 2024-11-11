<?php include 'header.php'; ?>

    <section class="interna servicos">
        <div class="topo-interno">
            <a class="text-[30px] text-[#00448F] font-semibold text-center flex gap-2">SERVIÇOS</a>
        </div><!-- topo-interno -->

        <div class="container">
            <div class="form-procura">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Preencha o formulário para encontrar um prestador de serviços perto de você</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-8">
                                    <select class="form-control" id="estados">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" id="cidades">
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" id="tipo">
                                        <option value="">QUAL TIPO DE SERVIÇO?</option>
                                        <option value="">Borracharia</option>
                                        <option value="">Elétrica</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="equipamento">
                                        <option value="">EQUIPAMENTO</option>
                                        <option value="">Caminhão</option>
                                        <option value="">Colheitadeira</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="modelo" id="modelo" placeholder="MODELO">
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="quando">
                                        <option value="">ATENDIMENTO PARA QUANDO?</option>
                                        <option value="">Imediato</option>
                                        <option value="">Até 5 dias</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <textarea class="form-control" name="relato" id="relato" placeholder="BREVE RELATO"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="NOME">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL">
                                    <input type="phone" class="form-control" name="telefone" id="modelo" placeholder="TELEFONE">
                                </div>
                            </div>
                        </form>
                    </div><!-- col-md-8 -->
                    <div class="col-md-4">
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Receba vários orçamentos</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> Negocie direto com o prestador</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true"></i> 100% gratuito</p>
                    </div><!-- col-md-4 -->
                </div><!-- row -->
            </div><!-- form-procura -->

            <section class="como-funciona">
                <div class="box">
                    <h2>Você é um <span>profissional?</span></h2>
                    <p>Cadastre-se como prestador de serviço e comece a atender clientes</p>
                    <div class="botoes">
                        <a class="btn-orcamento" href="">Quero ser um prestador</a>
                    </div><!-- botoes -->
                </div>
            </section><!-- como-funciona -->

            <section class="content-servico">
                <div class="container">
                    <h1 class="titulo-geral">Serviços mais pedidos</h1>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="images/limpeza.png">
                                <div><span>Contrate</span><h2>Diarista</h2></div>
                            </div><!-- card -->
                        </div><!-- col-md-3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="images/tomada-eletrica.png" alt="">
                                <div><span>Contrate</span><h2>Eletricista</h2></div>
                            </div><!-- card -->
                        </div><!-- col-md-3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="images/chave-inglesa.png" alt="">
                                <div><span>Contrate</span><h2>Faz Tudo</h2></div>
                            </div><!-- card -->
                        </div><!-- col-md-3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="images/encanador.png" alt="">
                                <div><span>Contrate</span><h2>Encanador</h2></div>
                            </div><!-- card -->
                        </div><!-- col-md-3 -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- content-servico -->

            <section class="content-servico demais-servicos">
                <div class="container">
                    <h1 class="titulo-geral">Demais serviços</h1>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div><h2>Categoria Lorem Ipsum</h2></div>
                            </div><!-- card -->
                            <a href="/servicos/6" class="link-listagem">Músico</a>
                        </div><!-- col-md-3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <div><h2>Categoria Lorem Ipsum</h2></div>
                            </div><!-- card -->
                            <a href="/servicos/6" class="link-listagem">Músico</a>
                        </div><!-- col-md-3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <div><h2>Categoria Lorem Ipsum</h2></div>
                            </div><!-- card -->
                            <a href="/servicos/6" class="link-listagem">Músico</a>
                        </div><!-- col-md-3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <div><h2>Categoria Lorem Ipsum</h2></div>
                            </div><!-- card -->
                            <a href="/servicos/6" class="link-listagem">Músico</a>
                        </div><!-- col-md-3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <div><h2>Categoria Lorem Ipsum</h2></div>
                            </div><!-- card -->
                            <a href="/servicos/6" class="link-listagem">Músico</a>
                        </div><!-- col-md-3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <div><h2>Categoria Lorem Ipsum</h2></div>
                            </div><!-- card -->
                            <a href="/servicos/6" class="link-listagem">Músico</a>
                        </div><!-- col-md-3 -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- content-servico -->
        </div><!-- container -->
    </section><!-- interna servicos -->

<?php include 'footer.php'; ?>