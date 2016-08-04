<html>
<head>
<?php


//_____________________________________________________bibliotecas int main_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "static void Main";   // Palavra que sera substituida
$colocar1 = "<html>
<head>
<title>Ramon Moratori</title>
</head>
<body>
<?php//delete tudo que tiver antes de <html>..........
//ATENCAO: TODA VEZ QUE UMA VARIAVEL APARECER,COLOQUE UM \$(SIFRAO) ANTES DO NOME => \$VARIAVEL.........
/*ATENCAO: PONHA NO FINAL DO AQUIVO O FECHAMENTO DO PHP:
?>
</body>
</html>*/  //                    ";   // Palavra que ficara no lugar

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

//_____________________________________________________variavel string_______________________________________________________
//Defina aqui as configuraçoes
$arquivo51 = "exemplo.txt";   // Arquivo para abrir
$procurar51 = "string ";   // Palavra que sera substituida
$colocar51 = "\$";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter51 = file_get_contents($arquivo51);
$novo51 = str_replace($procurar51, $colocar51, $obter51);


//Grava o novo texto (modificado) no arquivo
$gravar51 = fopen($arquivo51, "w");
fwrite($gravar51, $novo51);
fclose($gravar51);


//_____________________________________________________printf_______________________________________________________
//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "Console.WriteLine";   // Palavra que sera substituida
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
$procurar7 = "int.Parse(Console.ReadLine());";   // Palavra que sera substituida
$colocar7 = "    /*delete a variavel ali atras <=*/\$variavel = readline(\" \");//substitua o nome variavel ali atras <= pelo nome da sua variavel <=........";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);


//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);



//_____________________________________________________scanf %c_______________________________________________________
//Defina aqui as configuraçoes
$arquivo73 = "exemplo.txt";   // Arquivo para abrir
$procurar73 = "Console.ReadLine();";   // Palavra que sera substituida
$colocar73 = "    /*delete a variavel ali atras <=*/\$variavel = readline(\" \");//substitua o nome variavel ali atras <= pelo nome da sua variavel <=........";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter73 = file_get_contents($arquivo73);
$novo73 = str_replace($procurar73, $colocar73, $obter73);


//Grava o novo texto (modificado) no arquivo
$gravar73 = fopen($arquivo73, "w");
fwrite($gravar73, $novo73);
fclose($gravar73);

//_____________________________________________________scanf %d_______________________________________________________
//Defina aqui as configuraçoes
$arquivo74 = "exemplo.txt";   // Arquivo para abrir
$procurar74 = "double.Parse(Console.ReadLine());";   // Palavra que sera substituida
$colocar74 = "    /*delete a variavel ali atras <=*/\$variavel = readline(\" \");//substitua o nome variavel ali atras <= pelo nome da sua variavel <=........";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter74 = file_get_contents($arquivo74);
$novo74 = str_replace($procurar74, $colocar74, $obter74);


//Grava o novo texto (modificado) no arquivo
$gravar74 = fopen($arquivo74, "w");
fwrite($gravar74, $novo74);
fclose($gravar74);

//_____________________________________________________scanf %f_______________________________________________________
//Defina aqui as configuraçoes
$arquivo75 = "exemplo.txt";   // Arquivo para abrir
$procurar75 = "double.Parse(Console.ReadLine());";   // Palavra que sera substituida
$colocar75 = "    /*delete a variavel ali atras <=*/\$variavel = readline(\" \");//substitua o nome variavel ali atras <= pelo nome da sua variavel <=........";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter75 = file_get_contents($arquivo75);
$novo75 = str_replace($procurar75, $colocar75, $obter75);


//Grava o novo texto (modificado) no arquivo
$gravar75 = fopen($arquivo75, "w");
fwrite($gravar75, $novo75);
fclose($gravar75);

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

//_____________________________________________________%_______________________________________________________
//Defina aqui as configuraçoes
$arquivo9 = "exemplo.txt";   // Arquivo para abrir
$procurar9 = "\" +";   // Palavra que sera substituida
$colocar9 = "{\$VARIAVEL}/*ponha o nome da sua variavel e delete o nome dela aqui na frente =>*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter9 = file_get_contents($arquivo9);
$novo9 = str_replace($procurar9, $colocar9, $obter9);


//Grava o novo texto (modificado) no arquivo
$gravar9 = fopen($arquivo9, "w");
fwrite($gravar9, $novo9);
fclose($gravar9);


//_____________________________________________________%_______________________________________________________
//Defina aqui as configuraçoes
$arquivo91 = "exemplo.txt";   // Arquivo para abrir
$procurar91 = "\"+";   // Palavra que sera substituida
$colocar91 = "{\$VARIAVEL}/*ponha o nome da sua variavel e delete o nome dela aqui na frente =>*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter91 = file_get_contents($arquivo91);
$novo91 = str_replace($procurar91, $colocar91, $obter91);


//Grava o novo texto (modificado) no arquivo
$gravar91 = fopen($arquivo91, "w");
fwrite($gravar91, $novo91);
fclose($gravar91);




//_____________________________________________________system("PAUSE");_______________________________________________________
//Defina aqui as configuraçoes
$arquivo10 = "exemplo.txt";   // Arquivo para abrir
$procurar10 = "Console.ReadLine();";   // Palavra que sera substituida
$colocar10 = "";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter10 = file_get_contents($arquivo10);
$novo10 = str_replace($procurar10, $colocar10, $obter10);


//Grava o novo texto (modificado) no arquivo
$gravar10 = fopen($arquivo10, "w");
fwrite($gravar10, $novo10);
fclose($gravar10);



?>














</head>
<body bgcolor = "whitegraw">
</body>
</html>