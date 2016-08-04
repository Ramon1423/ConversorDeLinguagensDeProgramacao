<html>
<head>
<?php


//_____________________________________________________bibliotecas int main_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "int main(";   // Palavra que sera substituida
$colocar1 = "<html>
<head>
<title>Ramon Moratori</title>
</head>
<body>
<?php//delete as bibliotecas #include que ficaram..........
//ATENCAO: TODA VEZ QUE UMA VARIAVEL APARECER,COLOQUE UM \$(SIFRAO) ANTES DO NOME => \$VARIAVEL.........";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para PHP... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);

//_____________________________________________________variavel char_______________________________________________________
//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "char ";   // Palavra que sera substituida
$colocar2 = "\$";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter2 = file_get_contents($arquivo2);
$novo2 = str_replace($procurar2, $colocar2, $obter2);


//Grava o novo texto (modificado) no arquivo
$gravar2 = fopen($arquivo2, "w");
fwrite($gravar2, $novo2);
fclose($gravar2);

//_____________________________________________________variavel int_______________________________________________________
//Defina aqui as configuraçoes
$arquivo3 = "exemplo.txt";   // Arquivo para abrir
$procurar3 = "int ";   // Palavra que sera substituida
$colocar3 = "\$";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);


//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);

//_____________________________________________________variavel float_______________________________________________________
//Defina aqui as configuraçoes
$arquivo4 = "exemplo.txt";   // Arquivo para abrir
$procurar4 = "float ";   // Palavra que sera substituida
$colocar4 = "\$";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter4 = file_get_contents($arquivo4);
$novo4 = str_replace($procurar4, $colocar4, $obter4);


//Grava o novo texto (modificado) no arquivo
$gravar4 = fopen($arquivo4, "w");
fwrite($gravar4, $novo4);
fclose($gravar4);

//_____________________________________________________variavel string_______________________________________________________
//Defina aqui as configuraçoes
$arquivo5 = "exemplo.txt";   // Arquivo para abrir
$procurar5 = "[";   // Palavra que sera substituida
$colocar5 = ";//delete daqui pra la =>";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter5 = file_get_contents($arquivo5);
$novo5 = str_replace($procurar5, $colocar5, $obter5);


//Grava o novo texto (modificado) no arquivo
$gravar5 = fopen($arquivo5, "w");
fwrite($gravar5, $novo5);
fclose($gravar5);

//_____________________________________________________printf_______________________________________________________
//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "cout <<";   // Palavra que sera substituida
$colocar6 = "echo/*delete os parenteses*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);


//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);

//_____________________________________________________scanf %i_______________________________________________________
//Defina aqui as configuraçoes
$arquivo7 = "exemplo.txt";   // Arquivo para abrir
$procurar7 = "cin >>";   // Palavra que sera substituida
$colocar7 = "\$variavel = readline(\" \");//ponha o nome da sua variavel ali atras <=........";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);


//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);



//_____________________________________________________\n_______________________________________________________
//Defina aqui as configuraçoes
$arquivo8 = "exemplo.txt";   // Arquivo para abrir
$procurar8 = "\n";   // Palavra que sera substituida
$colocar8 = "\n";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter8 = file_get_contents($arquivo8);
$novo8 = str_replace($procurar8, $colocar8, $obter8);


//Grava o novo texto (modificado) no arquivo
$gravar8 = fopen($arquivo8, "w");
fwrite($gravar8, $novo8);
fclose($gravar8);

//_____________________________________________________%i_______________________________________________________
//Defina aqui as configuraçoes
$arquivo9 = "exemplo.txt";   // Arquivo para abrir
$procurar9 = "%i";   // Palavra que sera substituida
$colocar9 = "{\$VARIAVEL}/*ponha o nome da sua variavel e delete o que sobrar depois das aspas =>*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter9 = file_get_contents($arquivo9);
$novo9 = str_replace($procurar9, $colocar9, $obter9);


//Grava o novo texto (modificado) no arquivo
$gravar9 = fopen($arquivo9, "w");
fwrite($gravar9, $novo9);
fclose($gravar9);

//_____________________________________________________%c_______________________________________________________
//Defina aqui as configuraçoes
$arquivo91 = "exemplo.txt";   // Arquivo para abrir
$procurar91 = "%c";   // Palavra que sera substituida
$colocar91 = "{\$VARIAVEL}/*ponha o nome da sua variavel e delete o que sobrar depois das aspas =>*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter91 = file_get_contents($arquivo91);
$novo91 = str_replace($procurar91, $colocar91, $obter91);


//Grava o novo texto (modificado) no arquivo
$gravar91 = fopen($arquivo91, "w");
fwrite($gravar91, $novo91);
fclose($gravar91);

//_____________________________________________________%s_______________________________________________________
//Defina aqui as configuraçoes
$arquivo92 = "exemplo.txt";   // Arquivo para abrir
$procurar92 = "%s";   // Palavra que sera substituida
$colocar92 = "{\$VARIAVEL}/*ponha o nome da sua variavel e delete o que sobrar depois das aspas =>*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter92 = file_get_contents($arquivo92);
$novo92 = str_replace($procurar92, $colocar92, $obter92);


//Grava o novo texto (modificado) no arquivo
$gravar92 = fopen($arquivo92, "w");
fwrite($gravar92, $novo92);
fclose($gravar92);

//_____________________________________________________%d_______________________________________________________
//Defina aqui as configuraçoes
$arquivo922 = "exemplo.txt";   // Arquivo para abrir
$procurar922 = "%d";   // Palavra que sera substituida
$colocar922 = "{\$VARIAVEL}/*ponha o nome da sua variavel e delete o que sobrar depois das aspas =>*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter922 = file_get_contents($arquivo922);
$novo922 = str_replace($procurar922, $colocar922, $obter922);


//Grava o novo texto (modificado) no arquivo
$gravar922 = fopen($arquivo922, "w");
fwrite($gravar922, $novo922);
fclose($gravar922);

//_____________________________________________________%f_______________________________________________________
//Defina aqui as configuraçoes
$arquivo93 = "exemplo.txt";   // Arquivo para abrir
$procurar93 = "%f";   // Palavra que sera substituida
$colocar93 = "{\$VARIAVEL}/*ponha o nome da sua variavel e delete o que sobrar depois das aspas =>*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter93 = file_get_contents($arquivo93);
$novo93 = str_replace($procurar93, $colocar93, $obter93);


//Grava o novo texto (modificado) no arquivo
$gravar93 = fopen($arquivo93, "w");
fwrite($gravar93, $novo93);
fclose($gravar93);


//_____________________________________________________system("PAUSE");_______________________________________________________
//Defina aqui as configuraçoes
$arquivo10 = "exemplo.txt";   // Arquivo para abrir
$procurar10 = "system(\"PAUSE\");";   // Palavra que sera substituida
$colocar10 = "";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter10 = file_get_contents($arquivo10);
$novo10 = str_replace($procurar10, $colocar10, $obter10);


//Grava o novo texto (modificado) no arquivo
$gravar10 = fopen($arquivo10, "w");
fwrite($gravar10, $novo10);
fclose($gravar10);

//_____________________________________________________return 0;_______________________________________________________
//Defina aqui as configuraçoes
$arquivo101 = "exemplo.txt";   // Arquivo para abrir
$procurar101 = "return 0;";   // Palavra que sera substituida
$colocar101 = "?>
</body>
</html>//DELETE O QUE FICOU DAQUI PARA BAIXO";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter101 = file_get_contents($arquivo101);
$novo101 = str_replace($procurar101, $colocar101, $obter101);


//Grava o novo texto (modificado) no arquivo
$gravar101 = fopen($arquivo101, "w");
fwrite($gravar101, $novo101);
fclose($gravar101);


//_____________________________________________________return 0;_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1012 = "exemplo.txt";   // Arquivo para abrir
$procurar1012 = "system(\"cls\");";   // Palavra que sera substituida
$colocar1012 = "";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1012 = file_get_contents($arquivo1012);
$novo1012 = str_replace($procurar1012, $colocar1012, $obter1012);


//Grava o novo texto (modificado) no arquivo
$gravar1012 = fopen($arquivo1012, "w");
fwrite($gravar1012, $novo1012);
fclose($gravar1012);


//_____________________________________________________namespace________________________________________________

//Defina aqui as configuraçoes
$arquivo322 = "exemplo.txt";   // Arquivo para abrir
$procurar322 = "using namespace";   // Palavra que sera substituida

$colocar322 = "//Delete essa linha";





//Obtem o conteudo do arquivo
$obter322 = file_get_contents($arquivo322);
$novo322 = str_replace($procurar322, $colocar322, $obter322);



//Grava o novo texto (modificado) no arquivo
$gravar322 = fopen($arquivo322, "w");
fwrite($gravar322, $novo322);
fclose($gravar322);

//_____________________________________________________para deletar________________________________________________

//Defina aqui as configuraçoes
$arquivo33 = "exemplo.txt";   // Arquivo para abrir
$procurar33 = "#ifdef WIN32";   // Palavra que sera substituida

$colocar33 = "";





//Obtem o conteudo do arquivo
$obter33 = file_get_contents($arquivo33);
$novo33 = str_replace($procurar33, $colocar33, $obter33);



//Grava o novo texto (modificado) no arquivo
$gravar33 = fopen($arquivo33, "w");
fwrite($gravar33, $novo33);
fclose($gravar33);


//_____________________________________________________para deletar________________________________________________

//Defina aqui as configuraçoes
$arquivo3322 = "exemplo.txt";   // Arquivo para abrir
$procurar3322 = "#endif";   // Palavra que sera substituida

$colocar3322 = "";





//Obtem o conteudo do arquivo
$obter3322 = file_get_contents($arquivo3322);
$novo3322 = str_replace($procurar3322, $colocar3322, $obter3322);



//Grava o novo texto (modificado) no arquivo
$gravar3322 = fopen($arquivo3322, "w");
fwrite($gravar3322, $novo3322);
fclose($gravar3322);


//_____________________________________________________printf(1)_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1222 = "exemplo.txt";   // Arquivo para abrir
$procurar1222 = ">>";   // Palavra que sera substituida
$colocar1222 = ",";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1222 = file_get_contents($arquivo1222);
$novo1222 = str_replace($procurar1222, $colocar1222, $obter1222);

//Exibe o novo texto (modificado)


//Grava o novo texto (modificado) no arquivo
$gravar1222 = fopen($arquivo1, "w");
fwrite($gravar1222, $novo1222);
fclose($gravar1222);



?>














</head>
<body bgcolor = "whitegraw">
</body>
</html>