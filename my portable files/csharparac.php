<html>
<head>
<?php


//_____________________________________________________printf(1)_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "Console.WriteLine(\"";   // Palavra que sera substituida
$colocar1 = "printf(\"\\n";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para C... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);


//_____________________________________________________scanf(2)_________________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "= Console.ReadLine();";   // Palavra que sera substituida
$colocar2 = "/* *** */=>scanf(\"(%i,%s,%c,%d ou %f)\", &(nome da variavel)); //se for número(%i), se for string(%s), se for caracter(%c) e se for decimal(%d) ou (%f).";
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


$procurar3 = "using System;";



$colocar3 = "#include <stdio.h>
#include <stdlib.h>
#include <windows.h>

//Ramon Moratori... Mestre supremo!
int main(){// /* *** */apague o cabeçalho que sobrou de C# como por exemplo: using, namespace, class program ou qualquer coisa do tipo.Apague as chaves tanto do cabeçalho, quanto do final do programa que não são necessárias.";


//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);



//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);




//___________________________________________________system("PAUSE");_____________________________________________

//Defina aqui as configuraçoes
$arquivo5 = "exemplo.txt";   // Arquivo para abrir
$procurar5 = "Console.ReadKey();";   // Palavra que sera substituida
$colocar5 = "system(\"PAUSE\");";
//Obtem o conteudo do arquivo
$obter5 = file_get_contents($arquivo5);
$novo5 = str_replace($procurar5, $colocar5, $obter5);



//Grava o novo texto (modificado) no arquivo
$gravar5 = fopen($arquivo5, "w");
fwrite($gravar5, $novo5);
fclose($gravar5);


//___________________________________________________%____________________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "\"+";   // Palavra que sera substituida
$colocar6 = "%(i,s,c, f ou d)\",";
//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);

//_________________________________________________% {0}______________________________________________________

//Defina aqui as configuraçoes
$arquivo7 = "exemplo.txt";   // Arquivo para abrir
$procurar7 = "{0}";   // Palavra que sera substituida
$colocar7 = "%(i,s,c, f ou d)\",";
//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);



//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);

//_________________________________________________% ______________________________________________________

//Defina aqui as configuraçoes
$arquivo77 = "exemplo.txt";   // Arquivo para abrir
$procurar77 = ",\"";   // Palavra que sera substituida
$colocar77 = ",\"";
//Obtem o conteudo do arquivo
$obter77 = file_get_contents($arquivo77);
$novo77 = str_replace($procurar77, $colocar77, $obter77);



//Grava o novo texto (modificado) no arquivo
$gravar77 = fopen($arquivo77, "w");
fwrite($gravar77, $novo77);
fclose($gravar77);

//_________________________________________________scanf %i_______________________________________________________

//Defina aqui as configuraçoes
$arquivo8 = "exemplo.txt";   // Arquivo para abrir
$procurar8 = "= int.Parse(Console.ReadLine());";   // Palavra que sera substituida
$colocar8 = "/* *** */ /*=>scanf(\"(%i,%s,%c,%d)\", &(nome da variavel)); //se for número(%i), se for string(%s), se for caracter(%c) e se for decimal(%d) ou (%f).*/";
//Obtem o conteudo do arquivo
$obter8 = file_get_contents($arquivo8);
$novo8 = str_replace($procurar8, $colocar8, $obter8);



//Grava o novo texto (modificado) no arquivo
$gravar8 = fopen($arquivo8, "w");
fwrite($gravar8, $novo8);
fclose($gravar8);


//________________________________________________system("PAUSE"); 2_____________________________________________

//Defina aqui as configuraçoes
$arquivo9 = "exemplo.txt";   // Arquivo para abrir
$procurar9 = "Console.ReadLine();";   // Palavra que sera substituida
$colocar9 = "system(\"PAUSE\");";
//Obtem o conteudo do arquivo
$obter9 = file_get_contents($arquivo9);
$novo9 = str_replace($procurar9, $colocar9, $obter9);



//Grava o novo texto (modificado) no arquivo
$gravar9 = fopen($arquivo9, "w");
fwrite($gravar9, $novo9);
fclose($gravar9);

//_______________________________________________system("cls");_______________________________________________

//Defina aqui as configuraçoes
$arquivo10 = "exemplo.txt";   // Arquivo para abrir
$procurar10 = "Console.Clear();";   // Palavra que sera substituida
$colocar10 = "system(\"cls\");";
//Obtem o conteudo do arquivo
$obter10 = file_get_contents($arquivo10);
$novo10 = str_replace($procurar10, $colocar10, $obter10);



//Grava o novo texto (modificado) no arquivo
$gravar10 = fopen($arquivo10, "w");
fwrite($gravar10, $novo10);
fclose($gravar10);

//_______________________________________________scanf double_______________________________________________

//Defina aqui as configuraçoes
$arquivo11 = "exemplo.txt";   // Arquivo para abrir
$procurar11 = "= double.Parse(Console.ReadLine());";   // Palavra que sera substituida
$colocar11 = "/* *** */=>scanf(\"(%i,%s,%c,%d)\", &(nome da variavel)); //se for número(%i), se for string(%s), se for caracter(%c) e se for decimal(%d) ou (%f).";
//Obtem o conteudo do arquivo
$obter11 = file_get_contents($arquivo11);
$novo11 = str_replace($procurar11, $colocar11, $obter11);



//Grava o novo texto (modificado) no arquivo
$gravar11 = fopen($arquivo11, "w");
fwrite($gravar11, $novo11);
fclose($gravar11);

//______________________________________________variavel double para int____________________________________


//Defina aqui as configuraçoes
$arquivo12 = "exemplo.txt";   // Arquivo para abrir
$procurar12 = "= double.Parse(Console.ReadLine());";   // Palavra que sera substituida
$colocar12 = "/* *** */=>scanf(\"(%i,%s,%c,%d)\", &(nome da variavel)); //se for número(%i), se for string(%s), se for caracter(%c) e se for decimal(%d) ou (%f).";
//Obtem o conteudo do arquivo
$obter12 = file_get_contents($arquivo12);
$novo12 = str_replace($procurar12, $colocar12, $obter12);



//Grava o novo texto (modificado) no arquivo
$gravar12 = fopen($arquivo12, "w");
fwrite($gravar12, $novo12);
fclose($gravar12);





?>













</head>
<body bgcolor = "whitegraw">
</body>
</html>
