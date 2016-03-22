<?php
class Designer
{
	function header()
    {
    	echo "<!DOCTYPE html>\n"; 
		echo "<html lang=\"en\">\n"; 
		echo "\n"; 
		echo "<head>\n"; 
		echo "\n"; 
		echo "    <meta charset=\"utf-8\">\n"; 
		echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"; 
		echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n"; 
		echo "    <meta name=\"description\" content=\"\">\n"; 
		echo "    <meta name=\"author\" content=\"\">\n"; 
		echo "\n"; 
		echo "    <title>Sistema Patricia Faro</title>\n"; 
		echo "\n"; 
		echo "    <!-- Bootstrap Core CSS -->\n"; 
		echo "    <link href=\"../bower_components/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">\n"; 
		echo "\n"; 
		echo "    <!-- MetisMenu CSS -->\n"; 
		echo "    <link href=\"../bower_components/metisMenu/dist/metisMenu.min.css\" rel=\"stylesheet\">\n"; 
		echo "\n"; 
		echo "    <!-- Timeline CSS -->\n"; 
		echo "    <link href=\"../dist/css/timeline.css\" rel=\"stylesheet\">\n"; 
		echo "\n"; 
		echo "    <!-- Custom CSS -->\n"; 
		echo "    <link href=\"../dist/css/sb-admin-2.css\" rel=\"stylesheet\">\n"; 
		echo "\n"; 
		echo "    <!-- Morris Charts CSS -->\n"; 
		echo "    <link href=\"../bower_components/morrisjs/morris.css\" rel=\"stylesheet\">\n"; 
		echo "\n"; 
		echo "    <!-- Custom Fonts -->\n"; 
		echo "    <link href=\"../bower_components/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
		echo "\n"; 
		echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->\n"; 
		echo "    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->\n"; 
		echo "    <!--[if lt IE 9]>\n"; 
		echo "        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>\n"; 
		echo "        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>\n"; 
		echo "    <![endif]-->\n"; 
		echo "\n"; 
		echo "</head>\n"; 
		echo "\n"; 
		echo "<body>\n"; 
		echo "\n"; 
		echo "    <div id=\"wrapper\">\n"; 
		echo "\n"; 
    }

    function navbar()
    {
        echo "        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">\n"; 
		echo "            <div class=\"navbar-header\">\n"; 
		echo "                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">\n"; 
		echo "                    <span class=\"sr-only\">Toggle navigation</span>\n"; 
		echo "                    <span class=\"icon-bar\"></span>\n"; 
		echo "                    <span class=\"icon-bar\"></span>\n"; 
		echo "                    <span class=\"icon-bar\"></span>\n"; 
		echo "                </button>\n"; 
		echo "                <a class=\"navbar-brand\" href=\"main.php\">Sistema Patricia Faro</a>\n"; 
		echo "            </div>\n"; 
		echo "            <!-- /.navbar-header -->\n"; 
		echo "\n"; 
		echo "            <div class=\"navbar-default sidebar\" role=\"navigation\">\n"; 
		echo "                <div class=\"sidebar-nav navbar-collapse\">\n"; 
		echo "                    <ul class=\"nav\" id=\"side-menu\">\n"; 
		echo "                        <li>\n"; 
		echo "                            <a href=\"main.php\"><i class=\"fa fa-dashboard fa-fw\"></i> Inicio</a>\n"; 
		echo "                        </li>\n"; 
		echo "                        <li>\n"; 
		echo "                            <a href=\"graphs.php\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Gráficos</a>\n"; 
		echo "                        </li>\n"; 
		echo "                        <li>\n"; 
		echo "                            <a href=\"#\"><i class=\"fa fa-user\"></i> Administrar Alunos<span class=\"fa arrow\"></span></a>\n"; 
		echo "                            <ul class=\"nav nav-second-level\">\n"; 
		echo "                                <li>\n"; 
		echo "                                    <a href=\"register.php\"><i class=\"fa fa-edit fa-fw\"></i> Cadastrar Aluno</a>\n"; 
		echo "                                </li>\n"; 
		echo "                                <li>\n"; 
		echo "                                    <a href=\"search.php\"><i class=\"fa fa-search\"></i> Procurar Alunos</a>\n"; 
		echo "                                </li>\n"; 
		echo "                            </ul>\n"; 
		echo "                        </li>\n"; 
		echo "                        \n"; 
		echo "                        <li>\n"; 
		echo "                            <a href=\"call.php\"><i class=\"fa fa-book\"></i> Fazer Chamada</a>\n"; 
		echo "                        </li>\n"; 
		echo "                        <li>\n"; 
		echo "                            <a href=\"promote.php\"><i class=\"fa fa-envelope-o\"></i> Promover Aula</a>\n"; 
		echo "                        </li>\n"; 
		echo "                    </ul>\n"; 
		echo "                </div>\n"; 
		echo "                <!-- /.sidebar-collapse -->\n"; 
		echo "            </div>\n"; 
		echo "            <!-- /.navbar-static-side -->\n"; 
		echo "        </nav>\n"; 
		echo "\n"; 
    }

    function footer()
    {
		echo "    </div>\n"; 
		echo "    <!-- /#wrapper -->\n"; 
		echo "\n"; 
		echo "    <!-- jQuery -->\n"; 
		echo "    <script src=\"../bower_components/jquery/dist/jquery.min.js\"></script>\n"; 
		echo "\n"; 
		echo "    <!-- Bootstrap Core JavaScript -->\n"; 
		echo "    <script src=\"../bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>\n"; 
		echo "\n"; 
		echo "    <!-- Metis Menu Plugin JavaScript -->\n"; 
		echo "    <script src=\"../bower_components/metisMenu/dist/metisMenu.min.js\"></script>\n"; 
		echo "\n"; 
		echo "    <!-- Morris Charts JavaScript -->\n"; 
		echo "    <script src=\"../bower_components/raphael/raphael-min.js\"></script>\n"; 
		echo "    <script src=\"../bower_components/morrisjs/morris.min.js\"></script>\n"; 
		echo "    <script src=\"../js/morris-data.js\"></script>\n"; 
		echo "\n"; 
		echo "    <!-- Custom Theme JavaScript -->\n"; 
		echo "    <script src=\"../dist/js/sb-admin-2.js\"></script>\n"; 
		echo "\n"; 
		echo "</body>\n"; 
		echo "\n"; 
		echo "</html>\n"; 
		echo "\n";
    }


}