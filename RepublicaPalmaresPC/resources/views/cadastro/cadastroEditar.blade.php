@extends('layouthome')

@section('link')
    <!-- switchery -  mascara -->
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet">
@endsection    

@section('conteudo')            
    <div class="wrapper wrapper-content animated fadeInRight"> 
        
        <div class="row m-b-lg">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active" ><a data-toggle="tab" href="#tab-1"> Cadastro</a></li>
                    <li><a data-toggle="tab" href="#tab-2">Informações de acesso</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="row">
                                @foreach ($pessoa as $pessoa)
                                <form role="form" action="#" method="#">
                                    <div class="col-sm-12 ">
                                        <h3 class="text-center m-t-lg">Dados Básicos</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="documento_editar" class="label-control">CPF/CNPJ</label>
                                            <input value="{{ $pessoa->CPF }}" type="text" placeholder="Preencha com o CPF" class="form-control" id="documento_editar" name="documento_editar" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="tiposoc_editar" class="label-control">Tipo Pesooa</label>
                                        <select value="{{ $pessoa->tipo_documento }}" class="form-control m-b" name="tiposoc_editar" id="tiposoc_editar">
                                                <option value="">Selecione</option>
                                                <option value="0">Pessoa Fisíca</option>
                                                <option value="1">Pessoas Juridíca</option>
                                            </select> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="nome_editar" class="label-control">Nome/Razão Social</label>
                                            <input value="{{ $pessoa->nome }}" type="text" placeholder="Prencher com o nome" class="form-control" name="nome_editar" id="nome_editar" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group" id="data_1">
                                            <label class="label-control" for="dt_nascimento">Nascimento/Abertura</label>
                                            <div class="input-group date" >
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" id="nascimento_cadastro" name="nascimento_cadastro" value="{{ $pessoa->Nascimento }}" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="genero_editar" class="label-control">Gênero</label>
                                            <select value="{{ $pessoa->genero }}" class="form-control m-b" name="name_editar" id="name-editar" >
                                                <option value="0">Masculino</option>
                                                <option value="1">Feminino</option>
                                            </select>                                                   
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6" hidden>
                                        <div class="form-group">
                                            <label for="genero_editar" class="label-control">Porte</label>
                                            <select class="form-control m-b" name="name_editar" id="name-editar">
                                                <option value="0">MEI</option>
                                                <option value="1">ME</option>
                                                <option value="2">Pequena</option>
                                                <option value="3">Média</option>
                                                <option value="4">Grande</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <h3 class="text-center m-t-sm">Endereço</h3>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="endereco_editar" class="label-control">Logradouro</label>
                                            <input value="{{ $pessoa->endereco }}"type="text" placeholder="Prenche com o logradouro" class="form-control" id="endereco_editar" name="endereco_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="numero_editar">Número</label>
                                            <input  type="text" placeholder="Prenche com o número" class="form-control" id="numero_editar" name="numero_editar">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="complemento_editar">Complemento</label>
                                            <input type="text" placeholder="Prenche com o complemento" class="form-control" id="complemento_editar" name="complemento_editar">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bairro_editar">Bairro</label>
                                            <input value="{{ $pessoa->bairro }}"type="text" placeholder="Prenche com o bairro" class="form-control" id="bairro_editar" name="bairro_editar">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cidade_editar">Cidade</label>
                                            <input value="{{ $pessoa->cidade }}" type="text" placeholder="Prenche com o cidade" class="form-control" id="cidade_editar" name="cidade_editar">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="uf_editar">UF</label>
                                            <input value="{{ $pessoa->uf }}"type="text" placeholder="Prenche com o UF" class="form-control" id="uf_editar" name="uf_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cep_editar">cep</label>
                                            <input value="{{ $pessoa->cep }}" type="text" placeholder="Prenche com o UF" class="form-control" id="cep_editar" name="cep_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <h3 class="text-center m-t-md">Telefones</h3>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="tel1_editar">Telefone 1</label>
                                            <input value="{{ $pessoa->fone1 }}"type="text" placeholder="Prenche com o telefone" class="form-control" id="tel1_editar" name="tel1_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="tel2_editar">Telefone 2</label>
                                            <input type="text" placeholder="Prenche com o telefone" class="form-control" id="tel2_editar" name="tel2_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <h3 class="text-center m-t-md">E-mail</h3>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email_editar">E-mail</label>
                                            <input value="{{ $pessoa->email }}" type="email" placeholder="Prenche com o e-mail" class="form-control" id="email_editar" name="email_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="m-t-lg m-b-lg  col-sm-12 ">
                                        <div class="text-center">
                                            <button class="btn  btn-primary" type="submit" value="Enviar"> Salvar</button>
                                            <button class="btn  btn-danger" type="reset" value="Enviar"> Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <div class="p-sm">
                                <div class="row m-b-md">
                                    <h3 class="font-bold text-uppercase text-center m-b-md">Permissões de acesso</h3>
                                    <div class="col-sm-4">
                                        
                                        <label for="aluno_editar">Aluno</label>
                                        <input type="checkbox" id="aluno_editar" name="aluno_editar" class="js-switch" checked />
                                        
                                    </div> 

                                    <div class="col-sm-4">
                                        <label for="colaborador_editar">Colaborador</label>
                                        <input type="checkbox" id="colaborador_editar" name="colaborador_editar" class="js-switch_2"/>
                                        
                                    </div> 

                                    <div class="col-sm-4">
                                        <label for="doador_editar">Doador</label>
                                        <input type="checkbox" id="doador_editar" name="doador_editar" class="js-switch_3" checked />
                                        
                                    </div> 

                                </div>
                                <div class="row">
                                    <div class="hr-line-dashed"></div>
                                    <h3 class="font-bold text-uppercase text-center">Participação em Cursos</h3>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="label-control" for="modalidade_editar">Modalidade</label>
                                            <select class="form-control m-b"name="modalidade_editar" id="modalidade_editar" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Arte Marcial</option>
                                                <option value="2">Artesanato</option>
                                                <option value="3">Teatro</option>
                                                <option value="4">Música</option>
                                            </select>                                                   
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="label-control" for="curso_editar">Curso</label>
                                            <select class="form-control m-b" name="curso_editar" id="curso_editar" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Capoeira</option>
                                            </select>                                                   
                                        </div>
                                    </div>
                                    

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="label-control" for="graduacao_editar">Graduação</label>
                                            <select class="form-control m-b"name="graduacao_editar" id="graduacao_editar" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Iniciante</option>
                                                <option value="1">Cordão Verde</option>
                                                <option value="1">Cordão Verde-amarelo</option>
                                            </select>                                                   
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="text-center m-b-md m-t-sm">
                                            <button class="btn btn-sm btn-primary" type="button" value="Adicionar">Adicionar</button>
                                        </div>
                                    </div>


                                    <!-- tabela de cursos que o individuo pertence -->
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover lista_editar" >
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Modalidade</th>
                                                        <th class="text-center">Curso</th>
                                                        <th class="text-center">Graduação/Nível</th>
                                                        <th class="text-center">Remover</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="gradeX">
                                                        <td>Artes Marciais</td>
                                                        <td>
                                                            Capoeira
                                                        </td>
                                                        <td>
                                                            Cordão verde
                                                        </td>
                                                        <td class="text-center ">
                                                            <button class="btn-danger btn btn-xs">
                                                                <i class="fa fa-lg fa-close"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="gradeX">
                                                        <td>Artesanato</td>
                                                        <td>
                                                            Decoração de Vasos e flores
                                                        </td>
                                                        <td>
                                                            Intermediario
                                                        </td>
                                                        <td class="text-center ">
                                                            <button class="btn-danger btn btn-xs">
                                                                <i class="fa fa-lg fa-close"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!--Fim da tabela-->  
                                </div>

                                <div class="row">
                                    <div class="hr-line-dashed"></div>
                                    <h3 class="font-bold text-uppercase text-center">Cargo</h3>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="label-control" for="departamento_cadastro">Departamento</label>
                                            <select class="form-control m-b"name="departamento_cadastro" id="departamento_cadastro" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Geral</option>
                                                <option value="2">Recepção</option>
                                                <option value="3">Tesouraria/ Financeiro</option>
                                                <option value="4">Aula</option>
                                                <option value="5">Diretoria</option>
                                            </select>                                                   
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="label-control" for="cargo_cadastro">Cargo</label>
                                            <select class="form-control m-b"name="cargo_cadastro" id="cargo_cadastro" required>
                                                <option value="1">Ajudante Geral</option>
                                                <option value="2">Recepcionista</option>
                                                <option value="3">Tesoureiro</option>
                                                <option value="4">Professor</option>
                                                <option value="5">Diretor</option>
                                            </select>                                                   
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="text-center m-b-md m-t-sm">
                                            <button class="btn btn-sm btn-primary" type="button" value="Adicionar">Adicionar</button>
                                        </div>
                                    </div>


                                    <!-- tabela de cursos que o individuo pertence -->
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover lista_editar" >
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Modalidade</th>
                                                        <th class="text-center">Curso</th>
                                                        <th class="text-center">Graduação/Nível</th>
                                                        <th class="text-center">Remover</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="gradeX">
                                                        <td>Artes Marciais</td>
                                                        <td>
                                                            Capoeira
                                                        </td>
                                                        <td>
                                                            Cordão verde
                                                        </td>
                                                        <td class="text-center ">
                                                            <button class="btn-danger btn btn-xs">
                                                                <i class="fa fa-lg fa-close"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="gradeX">
                                                        <td>Artesanato</td>
                                                        <td>
                                                            Decoração de Vasos e flores
                                                        </td>
                                                        <td>
                                                            Intermediario
                                                        </td>
                                                        <td class="text-center ">
                                                            <button class="btn-danger btn btn-xs">
                                                                <i class="fa fa-lg fa-close"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!--Fim da tabela-->  
                                </div>
                                <div class="row">
                                    <div class="hr-line-dashed"></div>
                                    <h3 class="font-bold text-uppercase text-center">Usúario de acesso</h3>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="emailUser_editar">Email</label>
                                            <input type="email" placeholder="Ex. email@site.com" class="form-control"  id="emailUser_editar" name="emailUser_editar" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="senha_editar">Senha</label>
                                            <input type="password" placeholder="Cadastre uma senha" class="form-control"  id="senha_editar" name="senha_editar" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="confSenha_editar">Confirma Senha</label>
                                            <input type="password" placeholder="Confirme sua senha" class="form-control"  id="confSenha_editar" name="confSenha_editar" required>
                                        </div>
                                    </div> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
        
@section('scripts')
    <!-- Switchery -->
    <script src="<?php echo asset('js/plugins/switchery/switchery.js')?>"></script>
    <script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>
    <!-- Jquery Validate -->
    <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
    <script src="<?php echo asset('js/pages/validator.js')?>"></script>
    <script src="<?php echo asset('js/pages/cadastroEditar.js')?>"></script>
@endsection