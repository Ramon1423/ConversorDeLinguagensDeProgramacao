<html>
<head>
<?php


//_____________________________________________________printf(1)_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "printf";   // Palavra que sera substituida
$colocar1 = "/*Delete somente os parenteses => => =>*/cout << ";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para C++... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);


//_____________________________________________________scanf%i(2)_________________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "scanf(\"%i\", &";   // Palavra que sera substituida
$colocar2 = "/*delete o parenteses que ficou => => =>*/cin >> ";
//Obtem o conteudo do arquivo
$obter2 = file_get_contents($arquivo2);
$novo2 = str_replace($procurar2, $colocar2, $obter2);



//Grava o novo texto (modificado) no arquivo
$gravar2 = fopen($arquivo2, "w");
fwrite($gravar2, $novo2);
fclose($gravar2);





//_____________________________________________________scanf%d(2)_________________________________________________________

//Defina aqui as configuraçoes
$arquivo223 = "exemplo.txt";   // Arquivo para abrir
$procurar223 = "scanf(\"%d\", &";   // Palavra que sera substituida
$colocar223 = "/*delete o parenteses que ficou => => =>*/cin >> ";
//Obtem o conteudo do arquivo
$obter223 = file_get_contents($arquivo223);
$novo223 = str_replace($procurar223, $colocar223, $obter223);



//Grava o novo texto (modificado) no arquivo
$gravar223 = fopen($arquivo223, "w");
fwrite($gravar223, $novo223);
fclose($gravar223);

//_____________________________________________________#include<stdio.h>________________________________________________

//Defina aqui as configuraçoes
$arquivo3 = "exemplo.txt";   // Arquivo para abrir
$procurar3 = "#include <stdio.h>";   // Palavra que sera substituida

$colocar3 = "#include <stdio.h>
#include <string>
#include <iostream>

using namespace std;";





//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);



//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);





//______________________________________________________scanf%s_______________________________________________________

//Defina aqui as configuraçoes
$arquivo10 = "exemplo.txt";   // Arquivo para abrir
$procurar10 = "scanf(\"%s\", &";   // Palavra que sera substituida
$colocar10 = "/*delete o parenteses que ficou => => =>*/cin >> ";
//Obtem o conteudo do arquivo
$obter10 = file_get_contents($arquivo10);
$novo10 = str_replace($procurar10, $colocar10, $obter10);



//Grava o novo texto (modificado) no arquivo
$gravar10 = fopen($arquivo10, "w");
fwrite($gravar10, $novo10);
fclose($gravar10);

//______________________________________________________scanf%f______________________________________________________

//Defina aqui as configuraçoes
$arquivo22 = "exemplo.txt";   // Arquivo para abrir
$procurar22 = "scanf(\"%f\", &";   // Palavra que sera substituida
$colocar22 = "/*delete o parenteses que ficou => => =>*/cin >> ";
//Obtem o conteudo do arquivo
$obter22 = file_get_contents($arquivo22);
$novo22 = str_replace($procurar22, $colocar22, $obter22);



//Grava o novo texto (modificado) no arquivo
$gravar22 = fopen($arquivo22, "w");
fwrite($gravar22, $novo22);
fclose($gravar22);

//______________________________________________________scanf%c_______________________________________________________

//Defina aqui as configuraçoes
$arquivo11 = "exemplo.txt";   // Arquivo para abrir
$procurar11 = "scanf(\"%s\", &";   // Palavra que sera substituida
$colocar11 = "/*delete o parenteses que ficou => => =>*/cin >> ";
//Obtem o conteudo do arquivo
$obter11 = file_get_contents($arquivo11);
$novo11 = str_replace($procurar11, $colocar11, $obter11);



//Grava o novo texto (modificado) no arquivo
$gravar11 = fopen($arquivo11, "w");
fwrite($gravar11, $novo11);
fclose($gravar11);


?>














</head>
<body bgcolor = "whitegraw">
</body>
</html>
