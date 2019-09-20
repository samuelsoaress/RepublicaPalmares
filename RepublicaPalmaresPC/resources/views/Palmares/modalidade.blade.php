<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ONG Republica de palmares | Login </title>
    
    <link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('font-awesome/css/font-awesome.css')?>" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
    
    <!-- switchery -  mascara -->
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet">

    <link href="<?php echo asset('css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">
    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <a href="homerestrita.html">
                                <h1 class="text-muted">Republica de Palmares</h1>
                            </a>
                        </div>
                        <div class="logo-element">
                            RCP
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Cadastro</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="cadastro.html">Criar</a></li>
                            <li><a href="cadastroLista.html">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="modalidade.html"><i class="fa fa-shield"></i> <span class="nav-label">Modalidade</span> </a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Cursos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="curso.html">Criar</a></li>
                            <li><a href="cursoLista.html">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Doações</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="doacao.html">Doar</a></li>
                            <li><a href="doacaoLista.html">Ver</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Agenda</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="agenda.html">Criar</a></li>
                            <li><a href="listaEvento.html">Editar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>                        
                    </div>
                    
                    <ul class="nav navbar-top-links navbar-right">
                        
                        <li>
                            <a href="index.html">
                                <i class="fa fa-sign-out"></i> Sair
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <div class="wrapper wrapper-content animated fadeInRight"> 
                
                <div class="row m-b-lg">
                    
                    <div class="ibox-content panel-body">
                            
                        <div class="col-sm-12 m-b-lg">
                            <h2 class="text-uppercase text-center">
                                Modalidades
                            </h2>
                        </div>

                        <div class="p-sm">
                            
                            <div class="row">
                                   
                                <!-- tabela de cursos que o individuo pertence -->
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover " id="modalidades_cadastro" >
                                            <thead>
                                                <tr>
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center">Modalidade</th>
                                                    <th class="text-center">Descrição modalidade</th>
                                                    <th class="text-center">Editar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr >
                                                    <td>
                                                        001
                                                    </td>
                                                    <td>
                                                            Artes Marciais
                                                    </td>
                                                    <td>
                                                        Molidade que abrange toda e qualquer curso de arte marcial e/ou  qualuqer esportes de combate e/ou de defesa pessoal.
                                                    </td>
                                                    <td class="text-center ">
                                                        <button class="btn-info btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>002</td>
                                                    <td>
                                                        Artesanato
                                                    </td>
                                                    <td>
                                                        Molidade que abrange toda e qualquer curso de criação e desenvolvimento manual de artigos e/ou utensilios através do trabalho manual, utilizando-se de matéria-prima natural, ou produção de um artesão.
                                                    </td>
                                                    <td class="text-center ">
                                                        <button class="btn-info btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>003</td>
                                                    <td>
                                                        Teatro
                                                    </td>
                                                    <td>
                                                        Molidade que abrange toda e qualquer curso de criação e desenvolvimento manual de artigos e/ou utensilios através do trabalho manual, utilizando-se de matéria-prima natural, ou produção de um artesão.
                                                    </td>
                                                    <td class="text-center ">
                                                        <button class="btn-info btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>004</td>
                                                    <td>
                                                        Música
                                                    </td>
                                                    <td>
                                                        Molidade que abrange toda e qualquer curso de música, tais como: Voz e vocalização, instrumentos de corda, intrumentos de percursão .
                                                    </td>
                                                    <td class="text-center ">
                                                        <button class="btn-info btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!--Fim da tabela-->
                                <div class="col-sm-12">
                                        <div class="text-right m-b-md m-t-sm">
                                            <button id="adicionar_modalidade" class="btn  btn-primary text-uppercase" type="button" value="Adicionar">Adicionar modalidade</button>
                                        </div>
                                    </div>
                            </div>

                            <div class="hidden" id="inserirModalidade" >

                                <div class="hr-line-dashed"></div>

                                <div class="row">
                                    <div class="col-sm-12 m-b-md">
                                        <h3 class="text-center m-t-lg">Cadastrar Nova Modalidade</h3>
                                    </div>
                                    <form action="#" id="cadastrar_modalidade">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="label-control" for="Id_modalidade_criar">ID da Modalidade</label>
                                                <input type="text" class="form-control m-b"name="Id_modalidade_criar" id="Id_modalidade_criar" value="" disabled/>
                                                                                                    
                                            </div>
                                        </div>
        
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label class="label-control"for="modalidade_criar">Nome Modalidade</label>
                                                <input type="text" class="form-control m-b"name="modalidade_criar" id="modalidade_criar" required/>
                                                                                                    
                                            </div>
                                        </div>
        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="label-control" for="modalidade_descricao">Descrição da Modalidade</label>
                                                <textarea name="modalidade_descricao" class="form-control m-b" id="modalidade_descricao" placeholder="Descreva a modalidade" cols="30" rows="10" required></textarea>                                                  
                                            </div>
                                        </div>
        
                                        <div class="col-sm-12">
                                            
                                            <div class="text-center m-b-md m-t-sm">
                                                <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                                <button class="btn  btn-primary text-uppercase" type="button" value="Adicionar">Salvar</button>
                                            </div>
                                        </div>

                                    </form>
                                    
                                </div>
                            </div> <!--Fim de inserir novo registro-->
                                
                        </div>
                    </div>                    
                </div>
            </div>
        <div class="footer">
            <div class="pull-right">
                República de palmares <strong>2019</strong>.
            </div>
            <div>
                <strong>Copyright</strong> Associação Cultural &copy;
            </div>
        </div>
        
    </div>
    
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    
    
     <!-- Switchery -->
   <script src="<?php echo asset('js/plugins/switchery/switchery.js')?>"></script>
    
    <script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>

    <!-- data table -->
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
    
    <!-- Jquery Validate -->
    <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
    <script src="<?php echo asset('js/pages/validator.js')?>"></script>
    
    <!-- Custom and plugin javascript -->
    <script src="<?php echo asset('js/inspinia.js')?>"></script>
    <script src="<?php echo asset('js/plugins/pace/pace.min.js')?>"></script>
    
    <script>
        $(document).ready(function(){
            $('#modalidades_cadastro').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Clientes Excel'},
                    {extend: 'pdf', title: 'Clientes PDF'},
                    {extend: 'print',
                         customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                        }
                    }
                ],
                searching: true,
                ordering: true,
                info: false,
                pageLength: 20,
                lengthChange: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
                },
                columnDefs: [{
                    targets: [2],
                    render: function (data, type, row) {
                        return type === 'display' && data.length > 100 ?
                            data.substr(0, 100) + '…' :
                            data;
                    },
                }],
            });


            $('#adicionar_modalidade').on("click", function(){
                $('#inserirModalidade').removeClass('hidden');
                $('#modalidade_criar').focus();
            });

            $('#cancelar_modalidade').on("click", function(){
               $('#inserirModalidade').addClass('hidden');
            })
        });
        
    </script>
    
</body>
</html>
    