<?php
//session_start();
include('../controller/valida_login.php');


?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>S.A.S Login</title>
    <!--É a segunda mais importante tag de SEO, ela aparece na descrição dos resultados de busca.-->
    <meta name="description" content="S.A.S Vetor Sistemas® - Sistema de Apoio as Suporte. Auxilia na tomada de decisões rapidas dos nossos tecnicos.">
    <!--É a terceira mais importante tag do SEO. Alguns especialistas em SEO afirmam que para o Google as keywords não tem relevância e
         que a relevância é tão somente para o Bing e Yahoo-->
    <meta name="keywords" content="S.A.S Vetor Sistemas® - Sistema de Apoio as Suporte">
    <!--A função da meta tag viewport está relacionada ao site responsivo. Ela demonstra ao nosso navegador que nosso layout deve se adaptar as diferentes telas-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta para deixar a pagina compativel com o navegador IE ou EDGE-->
    <meta http-equiv="X-UA-Compatible content=IE=edge">

    <!--Define o autor do website. São os créditos da página.-->
    <meta name="author" content="Vetor Sistemas LTDA®-Lucas Pinheiro Silva & Willian Maesato">
    
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="..//Frameworks/bootstrap-4.1.3/css/bootstrap.min.css">
    <script src="../Frameworks/bootstrap-4.1.3/js/bootstrap.min.js"></script>


    <!--icone da pagina (FAVICON)-->
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />

    
</head>
    <body>
        <!-- Começo do Menu de Opções -->
        <div class="container" id="navbarDropdownMenuLink">
            <nav class="navbar navbar-expand-md navbar-light bg-light">

                <button class="navbar-toggler" type="button" id="navbarDropdownMenuLink" data-toggle="collapse" data-target="navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" name="Menu">

                  <!-- Começo Menu Arquivos -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="" data-hover="true" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Arquivos
                            </a>
                            <ul  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                              <!-- Começo Parâmetros -->
                              <li><a class="dropdown-item dropdown-toggle" href="#" >Parâmetros</a>
                                  <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Lojas</a></li>
                                      <li><a class="dropdown-item" href="#">Plano de Contas</a></li>
                                      <li><a class="dropdown-item" href="#">Contadores</a></li>
                                      <li><a class="dropdown-item" href="#">Classificação de Clientes</a></li>

                                      <!-- Começo Vendas -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Vendas</a>
                                          <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">Moedas</a></li>
                                              <li><a class="dropdown-item" href="#">Tipos de Venda</a></li>
                                              <li><a class="dropdown-item" href="#">Tipos de Cartões</a></li>
                                              <li><a class="dropdown-item" href="#">Tipos de Convênios</a></li>
                                              <li><a class="dropdown-item" href="#">Prazos de Pagamentos</a></li>
                                              <li><a class="dropdown-item" href="#">Prazo de Pagamento Financeiras em Lote</a></li>


                                              <!-- Começo Cotas de Vendedores -->
                                              <li><a class="dropdown-item dropdown-toggle" href="#">Cotas de Vendedores</a>
                                                  <ul class="dropdown-menu">

                                                      <li><a class="dropdown-item" href="#">Individual</a></li>
                                                      <li><a class="dropdown-item" href="#">Por Lojas</a></li>

                                                  </ul>
                                              </li>
                                              <!-- Fim Cotas de Vendedores -->

                                          </ul>
                                      </li>
                                      <!-- Fim Vendas -->

                                      <!-- Começo Estoque -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Estoque</a>
                                          <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">Departamentos</a></li>
                                              <li><a class="dropdown-item" href="#">Grupos</a></li>
                                              <li><a class="dropdown-item" href="#">Sub-Grupos</a></li>
                                              <li><a class="dropdown-item" href="#">Seção</a></li>
                                              <li><a class="dropdown-item" href="#">Estações</a></li>
                                              <li><a class="dropdown-item" href="#">Estilos</a></a></li>
                                              <li><a class="dropdown-item" href="#">Cores</a></li>
                                              <li><a class="dropdown-item" href="#">Grades</a></li>
                                              <li><a class="dropdown-item" href="#">Modelos de Etiquetas</a></li>
                                              <li><a class="dropdown-item" href="#">Classificação Fiscal</a></li>
                                              <li><a class="dropdown-item" href="#">Ajuste de NCM</a></li>
                                              <li><a class="dropdown-item" href="#">Impostos</a></li>
                                              <li><a class="dropdown-item" href="#">Alíquotas de Lojas</a></li>
                                              <li><a class="dropdown-item" href="#">Estoque Mínimo</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Estoque -->

                                      <!-- Começo Cobrança -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Cobrança</a>
                                          <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">Carta de Cobrança</a></li>
                                              <li><a class="dropdown-item" href="#">Cobradoras</a></li>
                                              <li><a class="dropdown-item" href="#">Cartório</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Cobrança -->

                                      <!-- Começo Moveleiro -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Moveleiro</a>
                                          <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">Montadoras</a></li>
                                              <li><a class="dropdown-item" href="#">Transportadoras</a></li>
                                              <li><a class="dropdown-item" href="#">Seguradoras</a></li>
                                              <li><a class="dropdown-item" href="#">Departamento de Montagens</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Moveleiro -->

                                      <li><a class="dropdown-item" href="#">Modelos de Contratos</a></li>
                                      <li><a class="dropdown-item" href="#">Impressoras Fiscais</a></li>
                                      <li><a class="dropdown-item" href="#">Franquias</a></li>
                                      <li><a class="dropdown-item" href="#">Documentação Auxiliar</a></li>
                                      <li><a class="dropdown-item" href="#">Cadastro de Feriados Fixos/Móveis</a></li>

                                  </ul>
                              </li>
                              <!-- Fim Parâmetros -->

                              <li><a class="dropdown-item" href="#">Fornecedores</a></li>
                              <li><a class="dropdown-item" href="#">Representantes</a></li>
                              <li><a class="dropdown-item" href="#">Tipo de Fornecedores</a></li>

                              <!-- Começo Produtos -->
                              <li><a class="dropdown-item dropdown-toggle" href="#">Produtos</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Produtos</a></li>

                                        <!-- Começo Tabela de Preços -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Tabela de Preços</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Gerar Tabela</a></li>
                                                <li><a class="dropdown-item" href="#">Alterar Tabela</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Tabela de Preços -->

                                        <li><a class="dropdown-item" href="#">Produtos Fora de Linha</a></li>
                                        <li><a class="dropdown-item" href="#">Inativar/Ativar - Produtos</a></li>
                                        <li><a class="dropdown-item" href="#">Lançar Código NCM em Lote</a></li>

                                        <!-- Fim Código de Barras Fabricante -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Código de Barras Fabricante</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Individual</a></li>
                                                <li><a class="dropdown-item" href="#">Por Grades</a></li>
                                                <li><a class="dropdown-item" href="#">Por Arquivo</a></li>
                                                <li><a class="dropdown-item" href="#">Excluir</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Código de Barras Fabricante -->

                                        <li><a class="dropdown-item" href="#">Ajustar Aliquota ICMS</a></li>

                                    </ul>
                                </li>
                              <!-- Fim Produtos -->

                              <!-- Começo Usuários -->
                              <li><a class="dropdown-item dropdown-toggle" href="#">Usuários</a>
                                  <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Usuários</a></li>
                                      <li><a class="dropdown-item" href="#">Grupo de Usuários</a></li>
                                      <li><a class="dropdown-item" href="#">Verificação por Rotina</a></li>

                                  </ul>
                              </li>
                              <!-- Fim Usuários -->

                              <li><a class="dropdown-item" href="#">Alterar Senha</a></li>
                            </ul>
                  </ul>
                  <!-- Fim Menu Arquivos -->

                  <!-- Começo Menu Movimentações -->
                    <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Movimentações
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <!-- Começo Financeiro -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Financeiro</a>
                                    <ul class="dropdown-menu">

                                        <!-- Começo Contas a Pagar -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Contas a Pagar</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Individual</a></li>
                                                <li><a class="dropdown-item" href="#">Tipos de Venda</a></li>
                                                <li><a class="dropdown-item" href="#">Tipos de Cartões</a></li>
                                                <li><a class="dropdown-item" href="#">Tipos de Convênios</a></li>
                                                <li><a class="dropdown-item" href="#">Prazos de Pagamentos</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Contas a Pagar -->

                                        <!-- Começo Baixa de Títulos -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Baixa de Títulos</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Individual</a></li>
                                                <li><a class="dropdown-item" href="#">Em Lote</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelar Baixas</a></li>
                                                <li><a class="dropdown-item" href="#">Retorno de Pagamento Eletrônico</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Baixa de Títulos -->

                                        <!-- Começo Baixa de Convênios -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Baixa de Convênios</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Em Lote</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelar Baixas</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Baixa de Convênios -->

                                        <!-- Começo Baixa de Cartão de Crédito -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Baixa de Cartão de Crédito</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Em Lote</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelar Baixas</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Baixa de Cartão de Crédito -->

                                        <!-- Começo Cheque-Pré a Receber -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Cheque-Pré a Receber</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Incluir</a></li>
                                                <li><a class="dropdown-item" href="#">Alterar/Excluir</a></li>
                                                <li><a class="dropdown-item" href="#">Baixar</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelar Baixas</a></li>
                                                <li><a class="dropdown-item" href="#">Devolvidos</a></li>
                                                <li><a class="dropdown-item" href="#">Envio a Fornecedores</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Cheque-Pré a Receber -->

                                        <li><a class="dropdown-item" href="#">Crediário a Receber</a></li>

                                        <!-- Começo Conta Corrente -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Conta Corrente</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Cadastro Conta Corrente</a></li>
                                                <li><a class="dropdown-item" href="#">Movimentação</a></li>
                                                <li><a class="dropdown-item" href="#">Transferência Entre Contas</a></li>
                                                <li><a class="dropdown-item" href="#">Compensar Movimento</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Conta Corrente -->

                                        <li><a class="dropdown-item" href="#">Receber Defeitos</a></li>

                                        <!-- Começo Crediário com Antecipação Bancária -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Crediário com Antecipação Bancária</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Lançamento</a></li>
                                                <li><a class="dropdown-item" href="#">Baixa</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Crediário com Antecipação Bancária -->

                                        <!-- Começo Boleto Bancário -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Boleto Bancário</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Configuração de Bancos para Emissão de Boletos</a></li>
                                                <li><a class="dropdown-item" href="#">Emissão de Boletos</a></li>
                                                <li><a class="dropdown-item" href="#">Remessa</a></li>
                                                <li><a class="dropdown-item" href="#">Retorno</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Boleto Bancário -->

                                        <li><a class="dropdown-item" href="#">Pagamento Monstagens/Assintências</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Financeiro -->

                                <!-- Começo Compras -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Compras</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Pedidos</a></li>
                                        <li><a class="dropdown-item" href="#">Pedidos Compras - Moveleiro</a></li>
                                        <li><a class="dropdown-item" href="#">Envio de Pedidos de Compra em Lote ao Fornecedor</a></li>
                                        <li><a class="dropdown-item" href="#">Condições de Pagamento de Compra</a></li>
                                        <li><a class="dropdown-item" href="#">Duplicar</a></li>
                                        <li><a class="dropdown-item" href="#">Bloquear</a></li>
                                        <li><a class="dropdown-item" href="#">Alterar Cor/Tamanho/Quantidade</a></li>
                                        <li><a class="dropdown-item" href="#">Padrões de Compra por Grades</a></li>
                                        <li><a class="dropdown-item" href="#">Assistente de Compras</a></li>
                                        <li><a class="dropdown-item" href="#">Unificar Pedido de Compras</a></li>
                                        <li><a class="dropdown-item" href="#">Transformar Pré-Pedidos em Pedidos</a></li>

                                        <!-- Começo Franquias -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Franquias</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Pedidos</a></li>
                                                <li><a class="dropdown-item" href="#">Preparar Faturamento</a></li>
                                                <li><a class="dropdown-item" href="#">Faturamento Royalties</a></li>
                                                <li><a class="dropdown-item" href="#">Manutenção de Faturamentos</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Franquias -->
                                    </ul>
                                </li>
                                <!-- Fim Compras -->

                                <!-- Começo Pré-Entrada -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Pré-Entrada</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Inclusão</a></li>
                                        <li><a class="dropdown-item" href="#">Pesquisa/Altera/Exclui</a></li>
                                        <li><a class="dropdown-item" href="#">Efetivação</a></li>
                                        <li><a class="dropdown-item" href="#">Agrupar</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Pré-Entrada -->

                                <!-- Começo Entradas -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Entradas</a>
                                    <ul class="dropdown-menu">

                                        <!-- Começo Inclusão -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Inclusão</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Individual</a></li>
                                                <li><a class="dropdown-item" href="#">Individual(Importação)</a></li>
                                                <li><a class="dropdown-item" href="#">Por Pedidos</a></li>
                                                <li><a class="dropdown-item" href="#">Por Pedido Simplificada</a></li>
                                                <li><a class="dropdown-item" href="#">Entrada pelo XML do Fornecedor</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Inclusão -->

                                        <li><a class="dropdown-item" href="#">Pesquisar/Alterar/Excluir</a></li>
                                        <li><a class="dropdown-item" href="#">Avaliar Desempenho</a></li>
                                        <li><a class="dropdown-item" href="#">Pesquisa Nota Fiscal</a></li>
                                        <li><a class="dropdown-item" href="#">Importar XML Nota de Entrada</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Entradas -->

                                <!-- Começo Sugestão de Tranferências -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Sugestão de Tranferências</a>
                                    <ul class="dropdown-menu">

                                        <!-- Começo Inclusão -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Inclusão</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Manual</a></li>
                                                <li><a class="dropdown-item" href="#">Automático</a></li>
                                                <li><a class="dropdown-item" href="#">Análise</a></li>
                                                <li><a class="dropdown-item" href="#">Por Movimentação</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Inclusão -->

                                        <li><a class="dropdown-item" href="#">Pesquisa/Exclusão</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Sugestão de Tranferências -->

                                <!-- Começo Sugestão de Balanço -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Balanço</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Zerar Balanço Anterior</a></li>
                                        <li><a class="dropdown-item" href="#">Zerar Posiçao de Estoque</a></li>
                                        <li><a class="dropdown-item" href="#">Realizar Balanço</a></li>

                                        <!-- Começo Coletor de Dados -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Coletor de Dados</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Importar Dados do Coletor</a></li>
                                                <li><a class="dropdown-item" href="#">Exportar Dados para o Coletor</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Coletor de Dados -->

                                        <li><a class="dropdown-item" href="#">Verificar Diferenças</a></li>
                                        <li><a class="dropdown-item" href="#">Efetivar Ajustes</a></li>
                                        <li><a class="dropdown-item" href="#">Ajuste Manual de Estoque</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Sugestão de Balanço -->
                              </ul>
                  </ul>
                  <!-- Fim Menu Movimentações -->

                  <!-- Começo Menu Ferramentas -->
                    <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Ferramentas
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <!-- Começo Configurações -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Configurações</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Geral</a></li>
                                        <li><a class="dropdown-item" href="#">Local</a></li>

                                        <!-- Começo APP -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">APP</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Vendas</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim APP -->

                                        <li><a class="dropdown-item" href="#">Impressoras</a></li>
                                        <li><a class="dropdown-item" href="#">Cupom de Sorteio</a></li>

                                        <!-- Começo Nf-e -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Nf-e</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">NF-e Parâmetros Gerais</a></li>
                                                <li><a class="dropdown-item" href="#">NF-e-Parâmetros de CFOP</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Nf-e -->

                                        <li><a class="dropdown-item" href="#">ACP</a></li>
                                        <li><a class="dropdown-item" href="#">Renegociação de Dívidas</a></li>
                                        <li><a class="dropdown-item" href="#">Administrar Enquetes</a></li>

                                        <!-- Começo Fidelização -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Fidelização</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Configurar Tabela</a></a></li>
                                                <li><a class="dropdown-item" href="#">Produtos/Pontos</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Fidelização -->

                                        <li><a class="dropdown-item" href="#">Configuração Perda de Comissões</a></li>
                                        <li><a class="dropdown-item" href="#">Data de Transmissão</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Configurações -->

                                <!-- Começo Movimento -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Movimento</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Abrir Movimento</a></li>
                                        <li><a class="dropdown-item" href="#">Fechar Movimento</a></li>
                                        <li><a class="dropdown-item" href="#">Reabrir Movimento</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Movimento -->

                                <!-- Começo Reajuste de Preços -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reajuste de Preços</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Produtos Individual</a></li>
                                        <li><a class="dropdown-item" href="#">Produtos Individual(Por Lote)</a></li>
                                        <li><a class="dropdown-item" href="#">Por Agrupamento(%)</a></li>

                                        <!-- Começo Ofertas -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Ofertas</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Por Produto</a></li>
                                                <li><a class="dropdown-item" href="#">Por Cor/Tamanho</a></li>
                                                <li><a class="dropdown-item" href="#">Em Lote</a></li>
                                                <li><a class="dropdown-item" href="#">Em Lote - Código de Barras</a></li>
                                                <li><a class="dropdown-item" href="#">Retirar Ofertas</a></li>
                                                <li><a class="dropdown-item" href="#">Prorrogar Ofertas</a></li>

                                                <!-- Começo Pré-Ofertas -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Pré-Ofertas</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Individual</a></li>
                                                        <li><a class="dropdown-item" href="#">Em Lote</a></li>
                                                        <li><a class="dropdown-item" href="#">Ativar Pré-Ofertas</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Fim Pré-Ofertas -->

                                            </ul>
                                        </li>
                                        <!-- Fim Ofertas -->

                                    </ul>
                                </li>
                                <!-- Fim Reajuste de Preços -->

                                <!-- Começo Agendas -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Agendas</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Telefones</a></li>
                                        <li><a class="dropdown-item" href="#">Compromissos</a></li>
                                        <li><a class="dropdown-item" href="#">Funcionários</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Agendas -->

                                <!-- Começo Sintegra -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Sintegra</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Digitar Dados</a></a></li>
                                        <li><a class="dropdown-item" href="#">Gerar Arquivo</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Sintegra -->

                                <!-- Começo Cartão Cliente -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cartão Cliente</a>
                                    <ul class="dropdown-menu">

                                        <!-- Começo Emissão -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Emissão</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Individual</a></li>
                                                <li><a class="dropdown-item" href="#">Por Cadastros</a></li>
                                                <li><a class="dropdown-item" href="#">Por Solicitações</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Emissão -->

                                        <li><a class="dropdown-item" href="#">Cancelar Cartão</a></li>
                                        <li><a class="dropdown-item" href="#">Bloquear Cartão</a></li>
                                        <li><a class="dropdown-item" href="#">Liberar Cartão</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Cartão Cliente -->

                                <!-- Começo Integração Fornecedores -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Integração Fornecedores</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Procon</a></li>

                                        <!-- Começo Hering -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Hering</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Importar Artigos</a></li>
                                                <li><a class="dropdown-item" href="#">Importar Notas Fiscais</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Hering -->

                                        <!-- Começo Sped -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Sped</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Cordilheira</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Sped -->

                                        <!-- Começo ID Brasil -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">ID Brasil</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Exportar Dados</a></li>

                                                <!-- Começo Importar Dados -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Importar Dados</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Solicitar Dados</a></li>
                                                        <li><a class="dropdown-item" href="#">Importar Dados</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Fim Importar Dados -->

                                            </ul>
                                        </li>
                                        <!-- Fim ID Brasil -->

                                        <li><a class="dropdown-item" href="#">Servipa</a></li>

                                        <!-- Começo 7Camicie -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">7Camicie</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Exportar Dados</a></li>
                                                <li><a class="dropdown-item" href="#">Importar Dados</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim 7Camicie -->

                                        <li><a class="dropdown-item" href="#">Promob</a></li>
                                        <li><a class="dropdown-item" href="#">MAXPERSON - Vendas</a></li>

                                        <!-- Começo SIAGRO -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">SIAGRO</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Arquivo de Vendas</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim SIAGRO -->

                                        <!-- Começo Exportações BI -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Exportações BI</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Posição de Estoque</a></li>
                                                <li><a class="dropdown-item" href="#">Vendas Por Cliente/Agrupamentos</a></li>
                                                <li><a class="dropdown-item" href="#">Vendas Por Clientes Analítico</a></li>
                                                <li><a class="dropdown-item" href="#">Fluxo de Caixa</a></li>
                                                <li><a class="dropdown-item" href="#">Compras Estoque Minimo/Vendas</a></li>
                                                <li><a class="dropdown-item" href="#">Estoque/Vendas</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Exportações BI -->

                                        <li><a class="dropdown-item" href="#">Importar Vendas e-Comerce</a></li>

                                        <!-- Começo TeiaCard BI -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">TeiaCard BI</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Exportar Dados</a></li>
                                                <li><a class="dropdown-item" href="#">Importar Dados</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim TeiaCard BI -->

                                        <li><a class="dropdown-item" href="#">Altenburg</a></li>
                                        <li><a class="dropdown-item" href="#">Polo Royal</a></a></li>
                                        <li><a class="dropdown-item" href="#">Grendene</a></li>
                                        <li><a class="dropdown-item" href="#">Exportação de Documentos Fiscais</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Integração Fornecedores -->

                                <!-- Começo Exportar Dados -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Exportar Dados</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Foto/Documento Clientes</a></li>
                                        <li><a class="dropdown-item" href="#">Foto Produtos</a></li>
                                        <li><a class="dropdown-item" href="#">Tabelas do Sistema</a></li>
                                        <li><a class="dropdown-item" href="#">Produtos/Agrupamentos</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Exportar Dados -->

                                <!-- Começo Log do Sistema -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Log do Sistema</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Log de Dados</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Log do Sistema -->

                                <!-- Começo Auditoria -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Auditoria</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Vendas de Crediário</a></li>
                                        <li><a class="dropdown-item" href="#">Gerar Código PIN</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Auditoria -->

                                <li><a class="dropdown-item" href="#">Unificação de Clientes</a></li>

                                <!-- Começo Administrativo TEF -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Administrativo TEF</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Gerenciar Padrão</a></li>
                                        <li><a class="dropdown-item" href="#">HiperTEF</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Administrativo TEF -->

                                <!-- Começo Administrativo TEF Dedicado -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Administrativo TEF Dedicado</a>
                                    <ul class="dropdown-menu">

                                        <!-- Começo Serviços -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Serviços</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Pré-Autorização para Pagamento com Cartão de Crédito</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelmanento de Pagamento com Cartão de Crédito ou Débito</a></li>
                                                <li><a class="dropdown-item" href="#">Resumo de Vendas</a></li>
                                                <li><a class="dropdown-item" href="#">Reimpressão de Cupom</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Serviços -->

                                        <!-- Começo Operacional -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Operacional</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Configuração</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Operacional -->

                                    </ul>
                                </li>
                                <!-- Fim Administrativo TEF Dedicado -->

                                <!-- Começo Sped -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Sped</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Notas de Despesa</a></li>
                                        <li><a class="dropdown-item" href="#">Sped Contribuições - EFD</a></li>
                                        <li><a class="dropdown-item" href="#">Sped Fiscal - EFD</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Sped -->

                                <li><a class="dropdown-item" href="#">Ficha de Contéudo de importação(FCI)</a></li>
                                <li><a class="dropdown-item" href="#">Verificar Transmissão Off-Line</a></li>
                                <li><a class="dropdown-item" href="#">Administrativo SITEF</a></li>

                                <!-- Começo Administrativo Auttar -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Administrativo Auttar</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Reimpressão do Último Comprovante</a></li>
                                                <li><a class="dropdown-item" href="#">Reimpressão de Outro Comprovante</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelamento</a></li>
                                                <li><a class="dropdown-item" href="#">Confirmação pelo NSU do CTF</a></li>
                                                <li><a class="dropdown-item" href="#">Desfazimento pelo NSU do CTF</a></li>

                                    </ul>
                                </li>
                                <!-- Fim dministrativo Auttar -->

                                <!-- Começo Assistência Técnica -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Assistência Técnica</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Inclusão</a></li>
                                                <li><a class="dropdown-item" href="#">Manutenção</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Assistência Técnica -->

                                <!-- Começo Depósito Central -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Depósito Central</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Gerenciamento de Entregas</a></li>
                                                <li><a class="dropdown-item" href="#">Gerenciamento de Entregas Simplificado</a></li>
                                                <li><a class="dropdown-item" href="#">Gerenciamento de Montagens</a></li>
                                                <li><a class="dropdown-item" href="#">Alteração Romaneio de Montagem</a></li>
                                                <li><a class="dropdown-item" href="#">Conferência de Saída de Produtos(Coletor de Dados)</a></li>
                                                <li><a class="dropdown-item" href="#">Conferência de Saída de Produtos(Leitor Código de Barras)</a></li>
                                                <li><a class="dropdown-item" href="#">Endereçamento de Deposito</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Depósito Central -->

                                <!-- Começo Ferramentas Administrativas -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Ferramentas Administrativas</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Ajustar Grades</a></li>

                                        <!-- Começo Análise de Crédito -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Análise de Crédito</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                                                <li><a class="dropdown-item" href="#">Acompanhar</a></a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Análise de Crédito -->

                                        <!-- Começo Rotinas Especias -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Rotinas Especias</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Importar Tabelas</a></li>
                                                <li><a class="dropdown-item" href="#">Setar Geradores</a></li>
                                                <li><a class="dropdown-item" href="#">Derrubar Estações</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Rotinas Especias -->

                                    </ul>
                                </li>
                                <!-- Fim Ferramentas Administrativas -->

                                <li><a class="dropdown-item" href="#">Análise de Compras</a></li>
                              </ul>
                  </ul>
                  <!-- Fim Menu Ferramentas -->

                  <!-- Começo Menu Loja -->
                    <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Loja
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li><a class="dropdown-item" href="#">Venda Concomitante</a></li>
                                <li><a class="dropdown-item" href="#">Cotação de Preços</a></li>
                                <li><a class="dropdown-item" href="#">Orçamentos</a></li>
                                <li><a class="dropdown-item" href="#">Venda Rapida</a></li>
                                <li><a class="dropdown-item" href="#">Mesclar Orçamentos</a></li>
                                <li><a class="dropdown-item" href="#">Validar Orçamentos</a></li>
                                <li><a class="dropdown-item" href="#">Conferência de Pacote</a></li>
                                <li><a class="dropdown-item" href="#">Receber Crediário</a></li>

                                <!-- Começo Servipa -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Servipa</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Receber Crediário</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Servipa -->

                                <!-- Começo Rotinas de Caixa -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Rotinas de Caixa</a>
                                    <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Abrir Caixa</a></li>
                                      <li><a class="dropdown-item" href="#">Reabrir Caixa</a></li>
                                      <li><a class="dropdown-item" href="#">Créditos/Débitos</a></li>
                                      <li><a class="dropdown-item" href="#">Fechar Caixa</a></li>
                                      <li><a class="dropdown-item" href="#">Detalhar Caixa</a></li>
                                      <li><a class="dropdown-item" href="#">Caixa Totalizado</a></a></li>

                                    </ul>
                                </li>
                                <!-- Fim Rotinas de Caixa -->

                                <!-- Começo Vale Presente/Mercadoria -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Vale Presente/Mercadoria</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Vender Vale Presente</a></li>
                                        <li><a class="dropdown-item" href="#">Pesquisar Vale Presente/Mercadoria</a></li>
                                        <li><a class="dropdown-item" href="#">Cancelar Vale Presente</a></li>
                                        <li><a class="dropdown-item" href="#">Baixar Vale Mercadoria</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Vale Presente/Mercadoria -->

                                <!-- Começo Rotinas Fiscais -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Rotinas Fiscais</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Emissão de Cupom</a></a></a></li>
                                        <li><a class="dropdown-item" href="#">Leitura X</a></li>
                                        <li><a class="dropdown-item" href="#">Redução Z</a></a></a></li>
                                        <li><a class="dropdown-item" href="#">Cancela Cupom</a></li>

                                        <!-- Começo Nota Fiscal ELETRÔNICA(NF-e) -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Nota Fiscal ELETRÔNICA(NF-e)</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Envio</a></li>
                                                <li><a class="dropdown-item" href="#">Consulta</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelamento</a></li>
                                                <li><a class="dropdown-item" href="#">Pendentes</a></li>
                                                <li><a class="dropdown-item" href="#">Relatório</a></li>
                                                <li><a class="dropdown-item" href="#">Inutilização de Numeração</a></li>
                                                <li><a class="dropdown-item" href="#">Verificar XML Importado</a></li>
                                                <li><a class="dropdown-item" href="#">Envio carregando XML</a></li>
                                                <li><a class="dropdown-item" href="#">Verifica Pulos de Numeração</a></li>
                                                <li><a class="dropdown-item" href="#">Envio de Movimento Diário de Produtos com IPI</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Nota Fiscal ELETRÔNICA(NF-e) -->

                                        <!-- Começo Nota Fiscal ao Consumidor ELETRÔNICA(NFC-e) -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Nota Fiscal ao Consumidor ELETRÔNICA(NFC-e)</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Envio</a></li>
                                                <li><a class="dropdown-item" href="#">Consulta</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelamento</a></li>
                                                <li><a class="dropdown-item" href="#">NFC-e emitidas em Contingência/Pendentes</a></li>
                                                <li><a class="dropdown-item" href="#">Relatório</a></li>
                                                <li><a class="dropdown-item" href="#">Inutilização de Numeração</a></li>
                                                <li><a class="dropdown-item" href="#">Verificar pulos de Numeração</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Nota Fiscal ao Consumidor ELETRÔNICA(NFC-e) -->

                                    </ul>
                                </li>
                                <!-- Fim Rotinas Fiscais -->

                                <li><a class="dropdown-item" href="#">Devolução de Produtos - Com Contrato</a></li>
                                <li><a class="dropdown-item" href="#">Devolução de Produtos - Sem Contrato</a></li>

                                <!-- Começo Pesquisas -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Pesquisas</a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Verificar Vendas</a></li>
                                      <li><a class="dropdown-item" href="#">Consulta Situação do Pedido</a></li>
                                      <li><a class="dropdown-item" href="#">Produto</a></li>
                                      <li><a class="dropdown-item" href="#">Movimentação de Produto</a></li>
                                      <li><a class="dropdown-item" href="#">Fornecedores</a></li>
                                      <li><a class="dropdown-item" href="#">Pedidos</a></li>
                                      <li><a class="dropdown-item" href="#">Cartão de Venda</a></li>
                                      <li><a class="dropdown-item" href="#">Histórico de Cliente</a></li>
                                      <li><a class="dropdown-item" href="#">Busca Preço</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Pesquisas -->

                                <!-- Começo Clientes -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Clientes</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cadastro Completo</a></li>
                                        <li><a class="dropdown-item" href="#">Cadastro Resumido</a></li>
                                        <li><a class="dropdown-item" href="#">Alterar Dados Pessoais</a></li>
                                        <li><a class="dropdown-item" href="#">Pesquisa Avançada</a></a></li>
                                        <li><a class="dropdown-item" href="#">Consulta ACP</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Clientes -->

                                <!-- Começo Funcionários -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Funcionários</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Funcionários</a></li>
                                        <li><a class="dropdown-item" href="#">Vale Funcionários Individual</a></li>
                                        <li><a class="dropdown-item" href="#">Vale Funcionários em Lote</a></li>
                                        <li><a class="dropdown-item" href="#">Baixa/Estorno de Vale Funcionários</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Funcionários -->

                                <!-- Começo Consignação -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Consignação</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Lançar</a></li>
                                        <li><a class="dropdown-item" href="#">Devolver</a></li>
                                        <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Consignação -->

                                <!-- Começo Transferência -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Transferência</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Tranferir Por Código de Barras</a></li>
                                        <li><a class="dropdown-item" href="#">Tranferir por Grades</a></li>
                                        <li><a class="dropdown-item" href="#">Alterar/Excluir</a></li>
                                        <li><a class="dropdown-item" href="#">Aceitar Transferência</a></li>
                                        <li><a class="dropdown-item" href="#">Cancelar Aceite de Tranferência</a></li>
                                        <li><a class="dropdown-item" href="#">Emitir Nota Fiscal em Lote</a></li>

                                        <!-- Começo Pré-Transferência -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Pré-Transferência</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Tranferir Por Código de Barra</a></li>
                                                <li><a class="dropdown-item" href="#">Alterar/Excluir</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Pré-Transferência -->

                                    </ul>
                                </li>
                                <!-- Fim Transferência -->

                                <!-- Começo Alterações -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Alterações</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cliente/Autorizado da Venda</a></li>
                                        <li><a class="dropdown-item" href="#">Vendedor da Venda</a></li>
                                        <li><a class="dropdown-item" href="#">Vendedor da Venda</a></li>
                                        <li><a class="dropdown-item" href="#">Alteração de Moedas(Caixa)</a></li>
                                        <li><a class="dropdown-item" href="#">Itens Orçamento</a></li>
                                        <li><a class="dropdown-item" href="#">Tipo da Venda(Contrato)</a></li>
                                        <li><a class="dropdown-item" href="#">Cliente de Devolução sem Contrato</a></li>
                                        <li><a class="dropdown-item" href="#">Ajustar Percentual da Comissão</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Alterações -->

                                <!-- Começo Cancelamentos -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cancelamentos</a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Vendas</a></li>
                                      <li><a class="dropdown-item" href="#">Orçamentos</a></li>
                                      <li><a class="dropdown-item" href="#">Parcelas Recebidas</a></li>
                                      <li><a class="dropdown-item" href="#">Devoluçao de Produtos</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Cancelamentos -->

                                <!-- Começo Defeitos de Produtos -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Defeitos de Produtos</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Lançar Produtos</a></li>
                                        <li><a class="dropdown-item" href="#">Alterar Produtos</a></li>

                                        <!-- Começo Enviar Defeitos -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Enviar Defeitos</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Preparar Envio</a></li>
                                                <li><a class="dropdown-item" href="#">Enviar Produtos</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelar Envio</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Enviar Defeitos -->

                                    </ul>
                                </li>
                                <!-- Fim Defeitos de Produtos -->

                                <!-- Começo Cobrança -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Cobrança</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Cobrança em Lote</a></li>
                                                <li><a class="dropdown-item" href="#">Lista de Cobrança</a></li>
                                                <li><a class="dropdown-item" href="#">Ficha de Cobrança</a></li>

                                                <!-- Começo Carta/Etiqueta de Cobrança -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Carta/Etiqueta de Cobrança</a>
                                                    <ul class="dropdown-menu">

                                                                <li><a class="dropdown-item" href="#">Individual</a></li>
                                                                <li><a class="dropdown-item" href="#">Em Lote</a></li>

                                                    </ul>
                                                </li>
                                                <!-- Fim Carta/Etiqueta de Cobrança -->

                                                <li><a class="dropdown-item" href="#">Seprocar Clientes</a></li>
                                                <li><a class="dropdown-item" href="#">Retirar Clientes do SPC</a></li>

                                                <!-- Começo Cobradoras -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Cobradoras</a>
                                                    <ul class="dropdown-menu">

                                                                <li><a class="dropdown-item" href="#">Enviar Cliente Cobradora</a></li>
                                                                <li><a class="dropdown-item" href="#">Retirar Cliente Cobradora</a></li>
                                                                <li><a class="dropdown-item" href="#">Ficha Cobradora</a></li>

                                                    </ul>
                                                </li>
                                                <!-- Fim Cobradoras -->

                                                <!-- Começo Protestar Cliente -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Protestar Cliente</a>
                                                    <ul class="dropdown-menu">

                                                                <li><a class="dropdown-item" href="#">Enviar ao Cartório</a></li>
                                                                <li><a class="dropdown-item" href="#">Retirar do Cartório</a></li>

                                                    </ul>
                                                </li>
                                                <!-- Fim Protestar Cliente -->
                                    </ul>
                                </li>
                                <!-- Fim Cobrança -->

                                <!-- Começo Mala Direta - CRM -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Mala Direta - CRM</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Mala Direta - CRM</a></li>

                                                <li><a class="dropdown-item" href="#">Etiquetas Individual</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Mala Direta - CRM -->

                                <li><a class="dropdown-item" href="#">Definir Cheque-Pré</a></li>

                                <!-- Começo Renegociar Contratos -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Renegociar Contratos</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Renegociar Dividas</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelar Renegociação</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Renegociar Contratos -->

                                <li><a class="dropdown-item" href="#">Duplicatas</a></li>

                                <!-- Começo Reimpressões -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Reimpressões</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Papeleta de Venda</a></li>
                                        <li><a class="dropdown-item" href="#">Baixa de Crediário</a></li>
                                        <li><a class="dropdown-item" href="#">Parcelas de Crediário a Receber</a></li>
                                        <li><a class="dropdown-item" href="#">Transferência de Produtos</a></li>
                                        <li><a class="dropdown-item" href="#">Ordem de Defeito de Produtos</a></li>
                                        <li><a class="dropdown-item" href="#">Orçamento</a></li>
                                        <li><a class="dropdown-item" href="#">Consignações</a></li>
                                        <li><a class="dropdown-item" href="#">Devolução</a></li>
                                        <li><a class="dropdown-item" href="#">Devoluçao de Consignações</a></li>
                                        <li><a class="dropdown-item" href="#">ticket de Troca</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Reimpressões -->
                              </li>
                            </ul>
                  </ul>
                  <!-- Fim Menu Loja -->

                  <!-- Começo Menu Relatórios -->
                    <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Relatórios
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <!-- Começo Moveleiro -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Moveleiro</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Reposição de Estoque</a></li>

                                        <!-- Começo Entregas -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Entregas</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Reimpressão Rom. Entrega/Mapa de Sepação</a></li>
                                                <li><a class="dropdown-item" href="#">Romanios de Entrega/Devolução</a></li>
                                                <li><a class="dropdown-item" href="#">Entregas/Devoluções Pendetes</a></li>
                                                <li><a class="dropdown-item" href="#">Entregas/Devoluções Romaneadas</a></li>
                                                <li><a class="dropdown-item" href="#">Entregas Pendentes</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Entregas -->

                                        <!-- Começo Montagens -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Montagens</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Reimpressão de Romaneio de Montagens</a></li>
                                                <li><a class="dropdown-item" href="#">Romanios de Montagens</a></li>
                                                <li><a class="dropdown-item" href="#">Montagens Pendetes</a></li>
                                                <li><a class="dropdown-item" href="#">Montagens Romaneadas</a></li>
                                                <li><a class="dropdown-item" href="#">Reimpressão Extrato Montador</a></li>
                                                <li><a class="dropdown-item" href="#">Montagens Pagas</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fim Montagens -->

                                        <li><a class="dropdown-item" href="#">Assitência Técnica</a></li>
                                        <li><a class="dropdown-item" href="#">Comissões sobre Garantia Extendida e Seguro</a></li>
                                        <li><a class="dropdown-item" href="#">Performance de Produtos Curva ABC</a></li>
                                        <li><a class="dropdown-item" href="#">Crescimento Anual (Comparativo)</a></li>
                                        <li><a class="dropdown-item" href="#">Arquivo do Promob</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Moveleiro -->

                                <!-- Começo Parâmetros -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Parâmetros</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Usuários</a></li>
                                        <li><a class="dropdown-item" href="#">Plano de Contas</a></li>
                                        <li><a class="dropdown-item" href="#">Funcionários</a></li>
                                        <li><a class="dropdown-item" href="#">Lojas</a></li>

                                        <!-- Começo Vendas -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Vendas</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Moedas</a></li>
                                                <li><a class="dropdown-item" href="#">Tipos de Venda</a></li>
                                                <li><a class="dropdown-item" href="#">Tipos de Cartões de Crédito</a></li>
                                                <li><a class="dropdown-item" href="#">Tipos de Convênios</a></li>
                                                <li><a class="dropdown-item" href="#">Prazos de Pagamentos</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Vendas -->

                                        <!-- Começo Estoque -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Estoque</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Departamentos</a></li>
                                                <li><a class="dropdown-item" href="#">Grupos</a></li>
                                                <li><a class="dropdown-item" href="#">Sub-Grupos</a></li>
                                                <li><a class="dropdown-item" href="#">Seção</a></li>
                                                <li><a class="dropdown-item" href="#">Estações</a></li>
                                                <li><a class="dropdown-item" href="#">Estilos</a></a></li>
                                                <li><a class="dropdown-item" href="#">Grades</a></li>
                                                <li><a class="dropdown-item" href="#">Cores</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Estoque -->

                                        <!-- Começo Moveleiro -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Moveleiro</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Montadoras</a></li>
                                                <li><a class="dropdown-item" href="#">Transportadoras</a></li>
                                                <li><a class="dropdown-item" href="#">Seguradoras</a></li>
                                                <li><a class="dropdown-item" href="#">Departamento de Montagens</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Moveleiro -->

                                    </ul>
                                </li>
                                <!-- Fim Parâmetros -->

                                <li><a class="dropdown-item" href="#">Fornecedores</a></li>
                                <li><a class="dropdown-item" href="#">Representantes</a></li>

                                <!-- Começo Produtos -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Produtos</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Lista de Preços</a></li>
                                        <li><a class="dropdown-item" href="#">Lista de Ofetas - Geral</a></li>
                                        <li><a class="dropdown-item" href="#">Lista Ofertas - Cor/Tamanho</a></li>
                                        <li><a class="dropdown-item" href="#">Alíquota de ICMS</a></li>
                                        <li><a class="dropdown-item" href="#">Produtos com Premiação</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Produtos -->

                                <!-- Começo Compras -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Compras</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Pedidos</a></li>
                                        <li><a class="dropdown-item" href="#">Sintético - Loja/Mês</a></li>
                                        <li><a class="dropdown-item" href="#">Pendências</a></li>
                                        <li><a class="dropdown-item" href="#">Entregas Atrasadas</a></li>
                                        <li><a class="dropdown-item" href="#">Compras por Estoque Mínimo</a></li>

                                        <!-- Começo Compras -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Franquias</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Relatório de Faturamentos</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Compras -->

                                    </ul>
                                </li>
                                <!-- Fim Compras -->

                                <!-- Começo Análise de Compras -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Análise de Compras</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Histórico de Produtos</a></li>
                                        <li><a class="dropdown-item" href="#">Histórico Entradas X Estoque</a></li>
                                        <li><a class="dropdown-item" href="#">Ficha Kardex</a></li>
                                        <li><a class="dropdown-item" href="#">Analise de Compras</a></li>
                                        <li><a class="dropdown-item" href="#">Mapa Giro de Estoque</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Análise de Compras -->

                                <li><a class="dropdown-item" href="#">Sugestão de Transferência</a></li>

                                <!-- Começo Movimentação de Produtos -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Movimentação de Produtos</a>
                                    <ul class="dropdown-menu">

                                        <!-- Começo Entradas -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Entradas</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Geral</a></li>
                                                <li><a class="dropdown-item" href="#">Conferência - Sintética</a></li>
                                                <li><a class="dropdown-item" href="#">Conferência - Analítica</a></li>
                                                <li><a class="dropdown-item" href="#">Conferência de Nota Fiscal - Sintética</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Entradas -->

                                        <li><a class="dropdown-item" href="#">Saídas</a></li>

                                        <!-- Começo Transferências -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Transferências</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Geral</a></li>
                                                <li><a class="dropdown-item" href="#">Não Confirmadas</a></li>
                                                <li><a class="dropdown-item" href="#">Guia de Entrega</a></li>
                                                <li><a class="dropdown-item" href="#">Etiquetas de Transporte</a></li>
                                                <li><a class="dropdown-item" href="#">Aceitas</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Transferências -->

                                        <li><a class="dropdown-item" href="#">Consignações</a></li>
                                        <li><a class="dropdown-item" href="#">Devoluções</a></li>
                                        <li><a class="dropdown-item" href="#">Acertos de Estoque</a></li>
                                        <li><a class="dropdown-item" href="#">Entrdas X Saídas</a></li>
                                        <li><a class="dropdown-item" href="#">Pré-Entrada de Pedidos</a></li>
                                        <li><a class="dropdown-item" href="#">Cotações</a></li>
                                        <li><a class="dropdown-item" href="#">Entrdas X Estoque X Saídas</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Movimentação de Produtos -->

                                <!-- Começo Estoque -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Estoque</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Geral</a></li>
                                        <li><a class="dropdown-item" href="#">Inventário</a></li>
                                        <li><a class="dropdown-item" href="#">Livro Fiscal de Inventário</a></li>
                                        <li><a class="dropdown-item" href="#">Margem Média</a></li>
                                        <li><a class="dropdown-item" href="#">Contagem Manual</a></li>
                                        <li><a class="dropdown-item" href="#">Inventário Anterior ao Último Balanço</a></li>
                                        <li><a class="dropdown-item" href="#">Sintético com Última Movimentação</a></li>

                                        <!-- Começo Análise de Estoque -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Análise de Estoque</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Sintético(15 Meses)</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Análise de Estoque -->

                                    </ul>
                                </li>
                                <!-- Fim Estoque -->

                                <!-- Começo Etiquetas -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Etiquetas</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Individual</a></li>
                                        <li><a class="dropdown-item" href="#">Por Entradas</a></li>
                                        <li><a class="dropdown-item" href="#">Por Pedidos</a></li>
                                        <li><a class="dropdown-item" href="#">Por Estoques</a></li>
                                        <li><a class="dropdown-item" href="#">Por Pré-Entradas</a></li>
                                        <li><a class="dropdown-item" href="#">Por Transferências</a></li>
                                        <li><a class="dropdown-item" href="#">Cartão de Venda</a></li>
                                        <li><a class="dropdown-item" href="#">Por Volumes</a></li>
                                        <li><a class="dropdown-item" href="#">Cartão Vendedor</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Etiquetas -->

                                <!-- Começo Crediário -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Crediário</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Avaliação por Vendas</a></li>
                                        <li><a class="dropdown-item" href="#">Avalialçao por Vencimento</a></li>
                                        <li><a class="dropdown-item" href="#">Vendas Quitadas</a></li>
                                        <li><a class="dropdown-item" href="#">Saldo de Carteira</a></li>
                                        <li><a class="dropdown-item" href="#">Percentual de Atraso</a></li>
                                        <li><a class="dropdown-item" href="#">Entradas</a></li>
                                        <li><a class="dropdown-item" href="#">Vendas Renegociadas</a></li>
                                        <li><a class="dropdown-item" href="#">Cartão Cliente</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Crediário -->

                                <!-- Começo Financeiro -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Financeiro</a>
                                    <ul class="dropdown-menu">

                                      <!-- Começo Bancos -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Bancos</a>
                                          <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">Conta Corrente</a></li>
                                              <li><a class="dropdown-item" href="#">Extrato de Movimentação</a></li>
                                              <li><a class="dropdown-item" href="#">Movimento Não Compensado</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Bancos -->

                                        <li><a class="dropdown-item" href="#">Contas a Pagar</a></li>
                                        <li><a class="dropdown-item" href="#">Pagamento Eletrônico</a></li>

                                        <!-- Começo Contas Pagas -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Contas Pagas</a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Geral</a></li>
                                                <li><a class="dropdown-item" href="#">Caixa de Loja</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Contas Pagas -->

                                        <li><a class="dropdown-item" href="#">Histórico de Conta Fornecedor</a></li>

                                        <!-- Começo Crediário -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Crediário</a>
                                            <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">A Receber</a></li>
                                              <li><a class="dropdown-item" href="#">Recebidos</a></li>
                                              <li><a class="dropdown-item" href="#">Crediário com Antecipação Bancária</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Crediário -->

                                        <!-- Começo Cheque-Pré -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Cheque-Pré</a>
                                            <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">A Receber</a></li>
                                              <li><a class="dropdown-item" href="#">Recebidos</a></li>
                                              <li><a class="dropdown-item" href="#">Devolvido</a></li>
                                              <li><a class="dropdown-item" href="#">Lista para Depósitos</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Cheque-Pré -->

                                        <!-- Começo Cartão de Crédito -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Cartão de Crédito</a>
                                            <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">A Receber</a></li>
                                              <li><a class="dropdown-item" href="#">Recebidos</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Cartão de Crédito -->

                                        <!-- Começo Convênios -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Convênios</a>
                                            <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">A Receber</a></li>
                                              <li><a class="dropdown-item" href="#">Recebidos</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Convênios -->

                                        <li><a class="dropdown-item" href="#">Cai Loja - Por Plano de Contas</a></li>
                                        <li><a class="dropdown-item" href="#">Saldo em Caixa nas Lojas</a></a></li>
                                        <li><a class="dropdown-item" href="#">Previsão de Caixa Central</a></li>
                                        <li><a class="dropdown-item" href="#">Fluxo de Caixa Diário - 10 Dias</a></li>
                                        <li><a class="dropdown-item" href="#">Fluxo de Caixa Totalizado - Período</a></li>

                                        <!-- Começo Boletos -->
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Boletos</a>
                                            <ul class="dropdown-menu">

                                              <li><a class="dropdown-item" href="#">Boletos Emitidos</a></li>
                                              <li><a class="dropdown-item" href="#">Histórico de Movimentação Remessa Bancária</a></li>
                                              <li><a class="dropdown-item" href="#">Histórico de Movimentação Retorno Bancário</a></li>

                                            </ul>
                                        </li>
                                        <!-- Fim Boletos -->
                                    </ul>
                                </li>
                                <!-- Fim Financeiro -->

                                <!-- Começo Vendas -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Vendas</a>
                                    <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Geral</a></li>
                                      <li><a class="dropdown-item" href="#">Evolução</a></li>
                                      <li><a class="dropdown-item" href="#">Cupom Fiscal Emitidos</a></li>
                                      <li><a class="dropdown-item" href="#">Nota Fiscal Emitida(NF-e/NFC-e)</a></li>
                                      <li><a class="dropdown-item" href="#">Nota Fiscal do Consumidor Eletrônica</a></li>
                                      <li><a class="dropdown-item" href="#">Nota Fiscal de Sapida Por Cliente</a></li>

                                      <!-- Começo Cotas -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Cotas</a>
                                          <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="#">Análise de Cotas</a></li>
                                            <li><a class="dropdown-item" href="#">Análise de Cotas Totalizado Ano/Mês</a></li>
                                            <li><a class="dropdown-item" href="#">Análise Lojas/Ano Anterior</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Cotas -->

                                      <li><a class="dropdown-item" href="#">Análise de Clientes</a></li>
                                      <li><a class="dropdown-item" href="#">Ticket Médio Por Vendedor</a></li>
                                      <li><a class="dropdown-item" href="#">Detalhadas Por Convênio</a></li>
                                      <li><a class="dropdown-item" href="#">Valores Recebidos no Período</a></li>
                                      <li><a class="dropdown-item" href="#">Detalhadas por Funcionário</a></li>
                                      <li><a class="dropdown-item" href="#">Premiação Especial</a></li>
                                      <li><a class="dropdown-item" href="#">Royalties</a></li>
                                      <li><a class="dropdown-item" href="#">Totalizado Ano/Mês</a></li>
                                      <li><a class="dropdown-item" href="#">Totalizado por Loja/Dia do Mês</a></li>
                                      <li><a class="dropdown-item" href="#">Cotação de Preços</a></li>
                                    </ul>
                                </li>
                                <!-- Fim Vendas -->

                                <!-- Começo Vale Mercadoria/Presente -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Vale Mercadoria/Presente</a>
                                    <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Vales Emitidos</a></li>
                                      <li><a class="dropdown-item" href="#">Vales Cancelados</a></li>
                                      <li><a class="dropdown-item" href="#">Vales Expirados</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Vale Mercadoria/Presente -->

                                <li><a class="dropdown-item" href="#">Vales Expirados</a></li>

                                <!-- Começo Vale Mercadoria/Presente -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Vale Mercadoria/Presente</a>
                                    <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Vales Emitidos</a></li>
                                      <li><a class="dropdown-item" href="#">Vales Cancelados</a></li>
                                      <li><a class="dropdown-item" href="#">Vales Expirados</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Vale Mercadoria/Presente -->

                                <!-- Começo Auditoria -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Auditoria</a>
                                    <ul class="dropdown-menu">

                                      <!-- Começo Orçamentos -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Orçamentos</a>
                                          <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="#">Orçamentos Pendentes</a></li>
                                            <li><a class="dropdown-item" href="#">Cancelados</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Orçamentos -->

                                      <!-- Começo Vendas -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Vendas</a>
                                          <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="#">Vendedores Alterados da Venda</a></li>
                                            <li><a class="dropdown-item" href="#">Contratos Alterados(Tipo de Venda)</a></li>
                                            <li><a class="dropdown-item" href="#">Canceladas</a></li>
                                            <li><a class="dropdown-item" href="#">Por Faixa de Valores</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Vendas -->

                                      <!-- Começo Descontos -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Descontos</a>
                                          <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="#">Vendas</a></li>
                                            <li><a class="dropdown-item" href="#">Produtos</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Descontos -->

                                      <!-- Começo Crediário -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Crediário</a>
                                          <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="#">Parcelas Estornadas</a></li>
                                            <li><a class="dropdown-item" href="#">Parcela com Descontos</a></li>
                                            <li><a class="dropdown-item" href="#">Vendas Acima do Limite</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Crediário -->

                                      <li><a class="dropdown-item" href="#">Movimento de Lojas</a></li>
                                      <li><a class="dropdown-item" href="#">Caixas de Loja</a></li>
                                      <li><a class="dropdown-item" href="#">Entradas de Produtos Em Ofertas</a></li>
                                      <li><a class="dropdown-item" href="#">Cliente Alterado na Venda</a></li>
                                      <li><a class="dropdown-item" href="#">Código PIN</a></li>
                                      <li><a class="dropdown-item" href="#">Conferência do TEF</a></li>
                                      <li><a class="dropdown-item" href="#">Produtos com Reajuste a Menor</a></li>
                                      <li><a class="dropdown-item" href="#">Produtos Sem Foto</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Auditoria -->

                                <!-- Começo Resultados -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Resultados</a>
                                    <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Demonstrativo de Resultados</a></li>
                                      <li><a class="dropdown-item" href="#">Fluxo de Caixa - Entradas e Saídas</a></li>

                                      <!-- Começo Lucratividade -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Lucratividade</a>
                                          <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="#">Sintético</a></li>
                                            <li><a class="dropdown-item" href="#">Por Movimentações - Geral</a></li>
                                            <li><a class="dropdown-item" href="#">Por Movimentações - Individual</a></li>
                                            <li><a class="dropdown-item" href="#">Por Vendedores</a></li>
                                            <li><a class="dropdown-item" href="#">Por Contrato de Venda</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Lucratividade -->

                                      <li><a class="dropdown-item" href="#">Média de Atendimentos por Vendedor - Peças/Clientes/Margem</a></li>

                                      <!-- Começo Ranking -->
                                      <li><a class="dropdown-item dropdown-toggle" href="#">Ranking</a>
                                          <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="#">Clientes</a></li>
                                            <li><a class="dropdown-item" href="#">Fornecedores</a></li>
                                            <li><a class="dropdown-item" href="#">Produtos</a></li>
                                            <li><a class="dropdown-item" href="#">Produtos X Estoque</a></li>
                                            <li><a class="dropdown-item" href="#">Vendedores</a></li>

                                          </ul>
                                      </li>
                                      <!-- Fim Ranking -->

                                    </ul>
                                </li>
                                <!-- Fim Resultados -->

                                <!-- Começo Defeitos de Produtos -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Defeitos de Produtos</a>
                                    <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Movimento de Defeitos</a></li>
                                      <li><a class="dropdown-item" href="#">Defeitos a Receber</a></li>
                                      <li><a class="dropdown-item" href="#">Defeitos Recebidos</a></li>
                                      <li><a class="dropdown-item" href="#">Ranking de Defeitos</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Defeitos de Produtos -->

                                <!-- Começo Comissões -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Comissões</a>
                                    <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Comissões</a></li>
                                      <li><a class="dropdown-item" href="#">Comissões por Crediário Recebido</a></li>
                                      <li><a class="dropdown-item" href="#">Prêmios</a></li>
                                      <li><a class="dropdown-item" href="#">Vale Funcionário</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Comissões -->

                                <!-- Começo Agendas -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Agendas</a>
                                    <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Agenda Telefone</a></li>
                                      <li><a class="dropdown-item" href="#">Agenda Aniversariantes</a></li>
                                      <li><a class="dropdown-item" href="#">Agenda Compromisso</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Agendas -->

                                <li><a class="dropdown-item" href="#">Enquetes</a></li>
                          </ul>
                      </li>
                  </ul>
                  <!-- Fim Menu Relatórios -->

                  <!-- Começo Menu Gráficos -->
                    <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Gráficos
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <li><a class="dropdown-item" href="#">Vendas</a></li>
                                <li><a class="dropdown-item" href="#">Vendas por Hora</a></li>
                                <li><a class="dropdown-item" href="#">Entradas</a></li>
                                <li><a class="dropdown-item" href="#">Saídas</a></li>
                                <li><a class="dropdown-item" href="#">Enquetes</a></li>

                          </ul>
                      </li>
                  </ul>
                  <!-- Fim Menu Gráficos -->

                  <!-- Começo Menu Produção -->
                    <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Produção
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <!-- Começo Parâmetros -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Parâmetros</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Etapa de Produção</a></li>
                                                <li><a class="dropdown-item" href="#">Grupo</a></li>
                                                <li><a class="dropdown-item" href="#">Sub-Grupo</a></li>
                                                <li><a class="dropdown-item" href="#">Materiais</a></li>
                                                <li><a class="dropdown-item" href="#">Produtos</a></li>
                                                <li><a class="dropdown-item" href="#">Composição do Produto</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Parâmetros -->

                                <!-- Começo Movimentações -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Movimentações</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Compras</a></li>

                                                <!-- Começo Entradas -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Entradas</a>
                                                    <ul class="dropdown-menu">

                                                                <li><a class="dropdown-item" href="#">Inclusão</a></li>
                                                                <li><a class="dropdown-item" href="#">Pesquisa/Altera/Excluir</a></li>

                                                    </ul>
                                                </li>
                                                <!-- Fim Entradas -->

                                    </ul>
                                </li>
                                <!-- Fim Movimentações -->

                                <!-- Começo Produção -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Produção</a>
                                    <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">Ordem de Produção</a></li>
                                                <li><a class="dropdown-item" href="#">Movimentação</a></li>
                                                <li><a class="dropdown-item" href="#">Baixa</a></li>
                                                <li><a class="dropdown-item" href="#">Alterar/Excluir</a></li>
                                                <li><a class="dropdown-item" href="#">Lançar Serviços por Funcionário</a></li>

                                    </ul>
                                </li>
                                <!-- Fim Produção -->

                                <!-- Começo Relatórios -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Relatórios</a>
                                    <ul class="dropdown-menu">

                                                <!-- Começo Parâmetros -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Parâmetros</a>
                                                    <ul class="dropdown-menu">

                                                                <li><a class="dropdown-item" href="#">Materias</a></li>
                                                                <li><a class="dropdown-item" href="#">Composição do Produto</a></li>

                                                              </ul>
                                                </li>
                                                <!-- Fim Parâmetros -->

                                                <!-- Começo Movimentações -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Movimentações</a>
                                                    <ul class="dropdown-menu">

                                                                <!-- Começo Compras -->
                                                                <li><a class="dropdown-item dropdown-toggle" href="#">Compras</a>
                                                                    <ul class="dropdown-menu">

                                                                        <li><a class="dropdown-item" href="#">Pedidos</a></li>
                                                                        <li><a class="dropdown-item" href="#">Pendências</a></li>
                                                                        <li><a class="dropdown-item" href="#">Entregas Atrasadas</a></li>
                                                                        <li><a class="dropdown-item" href="#">Previsão de Pagamentos</a></li>

                                                                    </ul>
                                                                </li>
                                                                <!-- Fim Compras -->

                                                                <!-- Começo Entradas -->
                                                                <li><a class="dropdown-item dropdown-toggle" href="#">Entradas</a>
                                                                    <ul class="dropdown-menu">

                                                                        <li><a class="dropdown-item" href="#">Geral</a></li>

                                                                    </ul>
                                                                </li>
                                                                <!-- Fim Entradas -->

                                                              </ul>
                                                </li>
                                                <!-- Fim Movimentações -->

                                                <!-- Começo Produção -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Produção</a>
                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#">Reservas de Materiais</a></li>
                                                        <li><a class="dropdown-item" href="#">Relatório de Produção</a></li>
                                                        <li><a class="dropdown-item" href="#">Reemissão Ordem de Produção</a></li>
                                                        <li><a class="dropdown-item" href="#">Serviços de Produção</a></li>
                                                        <li><a class="dropdown-item" href="#">Serviços por Funcionário</a></li>

                                                    </ul>
                                                </li>
                                                <!-- Fim Produção -->

                                                <!-- Começo Estoque -->
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Estoque</a>
                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="#">Geral</a></li>
                                                        <li><a class="dropdown-item" href="#">Contagem Manual de Estoque de Materia Prima</a></li>

                                                    </ul>
                                                </li>
                                                <!-- Fim Estoque -->

                                    </ul>
                                </li>
                                <!-- Fim Relatórios -->

                                <!-- Começo Balanço -->
                                <li><a class="dropdown-item dropdown-toggle" href="#">Balanço</a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Zerar Balanço Anterior</a></li>
                                        <li><a class="dropdown-item" href="#">Realizar Balanço</a></li>
                                        <li><a class="dropdown-item" href="#">Gerar Diferenças</a></li>
                                        <li><a class="dropdown-item" href="#">Efetivar Ajustes</a></li>
                                        <li><a class="dropdown-item" href="#">Ajuste Manual de Estoque</a></a></li>

                                    </ul>
                                </li>
                                <!-- Fim Balanço -->
                          </ul>
                      </li>
                  </ul>
                  <!-- Fim Menu Produção -->

                  <!-- Começo Menu Atacado -->
                    <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Atacado
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                              <li><a class="dropdown-item" href="#">Pedido Antigo</a></li>
                              <li><a class="dropdown-item" href="#">Pedidos</a></li>
                              <li><a class="dropdown-item" href="#">Faturar Pedidos</a></li>
                              <li><a class="dropdown-item" href="#">Cadastrar Clientes</a></li>
                              <li><a class="dropdown-item" href="#">Pesquisa/Reimpressão</a></li>
                              <li><a class="dropdown-item" href="#">Cancelar Pedido</a></li>

                              <!-- Começo Utilitários -->
                              <li><a class="dropdown-item dropdown-toggle" href="#">Utilitários</a>
                                  <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Muda Vendedor do Cliente</a></li>

                                  </ul>
                              </li>
                              <!-- Fim Utilitários -->

                              <!-- Começo Relatórios -->
                              <li><a class="dropdown-item dropdown-toggle" href="#">Relatórios</a>
                                  <ul class="dropdown-menu">

                                      <li><a class="dropdown-item" href="#">Produtos a Faturar</a></li>
                                      <li><a class="dropdown-item" href="#">Pedidos</a></li>
                                      <li><a class="dropdown-item" href="#">Etiqueta de Entrega</a></li>

                                  </ul>
                              </li>
                              <!-- Fim Relatórios -->
                          </ul>
                      </li>
                  </ul>
                  <!-- Fim Menu Atacado -->

                  <!-- Começo Menu Ajuda -->
                    <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Ajuda
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >

                              <li><a class="dropdown-item" href="Suporte">Suporte On-Line</a></li>
                              <li><a class="dropdown-item" href="#">Histórico</a></li>
                              <li><a class="dropdown-item" href="#">Conexões</a></li>
                              <li><a class="dropdown-item" href="#">Sobre</a></li>

                          </ul>
                      </li>
                  </ul>
                  <!-- Fim Menu Ajuda -->
              </div>
            </div>
          </nav>
</body>
<div class="container"></div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <!--Import jQuery before materialize.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/bootstrap-4-navbar.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <h2>Bem Vindo, <?php echo $_SESSION ['usuario'];?></h2>
        <br>
        <a href="../controller/logout.php">Logout</a>

</html>
