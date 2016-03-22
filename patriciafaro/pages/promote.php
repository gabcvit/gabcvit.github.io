<?php
include 'designer.php';

$nav = new Designer();
$nav->header();
$nav->navbar();

?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Promover Curso</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Escolha o curso que será anunciado
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <form id="userReg" action="database/process.php" method="post">
                                <div class="form-group">
                                    <label>Cursos de Interesse - presenciais na cidade de Campinas - SP</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_1" name="course">Fono estética módulo I. Ministrante fga. Patrícia Faro</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_2" name="course">Fono estética módulo II. Ministrante fga. Patrícia Faro</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_3" name="course">Workshop de exercícios miofuncionais. Ministrante fga. Patrícia Faro</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_4" name="course">Therapy Taping aplicado a fonoaudiologia. Ministrante fga. Andréa Pereira</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_5" name="course">Eletroestimulação direcionado à fonoaudiologia. Ministrante fgo. Bruno Guimarães.</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_6" name="course">Curso teórico/prático - Interação entre Fonoaudiologia e Odontologia com enfoque em casos ortodônticos e ortopédicos. Ministrante: fga. Renata Santos</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_7" name="course">Oficina de linguagem. Ministrante: fga. Miriam Bueno</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_8" name="course">Compreendendo a patofisiologia da Roncopatia, AOS e SAOS. Ministrante: fga. Aline Braga</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_9" name="course">Marketing para fonoaudiólogos. Ministrante: fga. Rejane David</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_10" name="course">Alterações de linguagem infantil: estratégias utilizadas na terapia fonoaudiológica. Ministrante: fga. Rejane David</input>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Cursos de Interesse - online - Todos ministrados por mim, fga. Patrícia Faro</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_11" name="course">Prática de diagnósticos</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_12" name="course">Reciclagem em fono estética</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_13" name="course">ATMs e suas DTMs</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_14" name="course">Compreendendo músculos, anatomia e noções de fisiologia. (Mímica facial, mastigatórios, língua e cervical)</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_15" name="course">Músculos agonistas e antagonistas</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_16" name="course">Como trabalhar as funções do Sistema Estomatoglossognático</input>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="course_17" name="course">Como trabalhar o ceceio frontal e o ceceio lateral</input>
                                        </label>
                                    </div>
                                </div>

                                <!--<button class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>
                                <button class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>-->
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



<?php
$nav->footer();
?>