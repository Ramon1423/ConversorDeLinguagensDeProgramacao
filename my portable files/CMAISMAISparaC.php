<html>
<head>
<?php


//_____________________________________________________printf(1)_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "cout <<";   // Palavra que sera substituida
$colocar1 = "/*Feche o parenteses antes do ponto e virgula*/printf(";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para C... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);




//_____________________________________________________scanf%i(2)_________________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "cin >>";   // Palavra que sera substituida
$colocar2 = "/*Ponha a letra da sua perspectiva classe('c' e 's' = char/ 'i','d' e 'f' = int) e ponha o nome da sua variavel ali na frente => => =>*/scanf(\"%[i,c,d,s,f]\", &SUAVARIAVEL); //............";
//Obtem o conteudo do arquivo
$obter2 = file_get_contents($arquivo2);
$novo2 = str_replace($procurar2, $colocar2, $obter2);



//Grava o novo texto (modificado) no arquivo
$gravar2 = fopen($arquivo2, "w");
fwrite($gravar2, $novo2);
fclose($gravar2);






//_____________________________________________________#include<stdio.h>________________________________________________

//Defina aqui as configuraçoes
$arquivo3 = "exemplo.txt";   // Arquivo para abrir
$procurar3 = "#include <stdio.h>";   // Palavra que sera substituida

$colocar3 = "#include <stdio.h>
#include <stdlib.h>
#include <windows.h>";





//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);



//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);


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
