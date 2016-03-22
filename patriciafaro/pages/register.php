<?php
include 'designer.php';
require_once(dirname(__FILE__) . '/database/config.php');

$nav = new Designer();
$nav->header();
$nav->navbar();

?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastrar Alunos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Insira os dados abaixo
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="userReg" action="database/process.php" method="post">
                                        <input type="hidden" name="formID" value="user" />
                                        <input type="hidden" name="redirect_to" value="" />

                                        <div class="form-group">
                                            <label>Nome Completo</label>
                                            <input class="form-control" name="name" placeholder="Nome e Sobrenome">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="exemplo@dominio.com.br">
                                        </div>
                                        <div class="form-group">
                                            <label>País</label>
                                            <input class="form-control" name="country" placeholder="Onde esse aluno está localizado?">
                                        </div>
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input class="form-control" name="city" placeholder="Onde esse aluno está localizado?">
                                        </div>
                                        <div class="form-group">
                                            <label>Gênero</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios1" value="Masculino" checked>Masculino
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios2" value="Feminino">Feminino
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Cursos de Interesse - presenciais na cidade de Campinas - SP</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_1" value="0"></input>
                                                    <input type="checkbox" name="course_1" value="1">Fono estética módulo I. Ministrante fga. Patrícia Faro</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_2" value="0"></input>
                                                    <input type="checkbox" name="course_2" value="1">Fono estética módulo II. Ministrante fga. Patrícia Faro</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_3" value="0"></input>
                                                    <input type="checkbox" name="course_3" value="1">Workshop de exercícios miofuncionais. Ministrante fga. Patrícia Faro</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_4" value="0"></input>
                                                    <input type="checkbox" name="course_4" value="1">Therapy Taping aplicado a fonoaudiologia. Ministrante fga. Andréa Pereira</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_5" value="0"></input>
                                                    <input type="checkbox" name="course_5" value="1">Eletroestimulação direcionado à fonoaudiologia. Ministrante fgo. Bruno Guimarães.</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_6" value="0"></input>
                                                    <input type="checkbox" name="course_6" value="1">Curso teórico/prático - Interação entre Fonoaudiologia e Odontologia com enfoque em casos ortodônticos e ortopédicos. Ministrante: fga. Renata Santos</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_7" value="0"></input>
                                                    <input type="checkbox" name="course_7" value="1">Oficina de linguagem. Ministrante: fga. Miriam Bueno</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_8" value="0"></input>
                                                    <input type="checkbox" name="course_8" value="1">Compreendendo a patofisiologia da Roncopatia, AOS e SAOS. Ministrante: fga. Aline Braga</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_9" value="0"></input>
                                                    <input type="checkbox" name="course_9" value="1">Marketing para fonoaudiólogos. Ministrante: fga. Rejane David</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_10" value="0"></input>
                                                    <input type="checkbox" name="course_10" value="1">Alterações de linguagem infantil: estratégias utilizadas na terapia fonoaudiológica. Ministrante: fga. Rejane David</input>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Cursos de Interesse - online - Todos ministrados por mim, fga. Patrícia Faro</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_11" value="0"></input>
                                                    <input type="checkbox" name="course_11" value="1">Prática de diagnósticos</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_12" value="0"></input>
                                                    <input type="checkbox" name="course_12" value="1">Reciclagem em fono estética</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_13" value="0"></input>
                                                    <input type="checkbox" name="course_13" value="1">ATMs e suas DTMs</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_14" value="0"></input>
                                                    <input type="checkbox" name="course_14" value="1">Compreendendo músculos, anatomia e noções de fisiologia. (Mímica facial, mastigatórios, língua e cervical)</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_15" value="0"></input>
                                                    <input type="checkbox" name="course_15" value="1">Músculos agonistas e antagonistas</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="hidden" name="course_16" value="0"></input>
                                                    <input type="checkbox" name="course_16" value="1">Como trabalhar as funções do Sistema Estomatoglossognático</input>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="hidden" name="course_17" value="0"></input>
                                                    <input type="checkbox" name="course_17" value="1">Como trabalhar o ceceio frontal e o ceceio lateral</input>
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" form="userReg" value="Submit" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>
                                        <button type="button" onClick="history.go(0)" value="Refresh" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
