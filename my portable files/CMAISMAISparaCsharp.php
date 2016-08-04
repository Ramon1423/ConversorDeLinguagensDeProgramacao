<html>
<head>
<?php


//_____________________________________________________printf(1)_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "cout <<";   // Palavra que sera substituida
$colocar1 = "/*Feche o parenteses antes do ponto e virgula*/Console.WriteLine";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para C#... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);




//_____________________________________________________scanf%i(2)_________________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "cin >>";   // Palavra que sera substituida
$colocar2 = "SUAVARIAVEL = Console.ReadLine();//Substitual o \"SUAVARIAVEL\" pelo nome da sua variavel <= <= <=";
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

$colocar3 = "using System;
using System.Collections.Generic;
using System.Text;
 
namespace RamonMoratori
{
    class Program
    {
        static void Main(string[] args)
        {/* *** */  //apague todas as bibliotecas que sobraram e a linha -| int main(){ |- e não se esqueça de fechar mais (3) chaves no final do codigo, não se esqueça também de apagar a chave da função int main()";





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


//___________________________________________________return 0;____________________________________________________

//Defina aqui as configuraçoes
$arquivo4 = "exemplo.txt";   // Arquivo para abrir
$procurar4 = "return 0;";   // Palavra que sera substituida
$colocar4 = "";
//Obtem o conteudo do arquivo
$obter4 = file_get_contents($arquivo4);
$novo4 = str_replace($procurar4, $colocar4, $obter4);



//Grava o novo texto (modificado) no arquivo
$gravar4 = fopen($arquivo4, "w");
fwrite($gravar4, $novo4);
fclose($gravar4);

//___________________________________________________system("PAUSE");_____________________________________________

//Defina aqui as configuraçoes
$arquivo5 = "exemplo.txt";   // Arquivo para abrir
$procurar5 = "system(\"PAUSE\");";   // Palavra que sera substituida
$colocar5 = "Console.ReadKey();";
//Obtem o conteudo do arquivo
$obter5 = file_get_contents($arquivo5);
$novo5 = str_replace($procurar5, $colocar5, $obter5);



//Grava o novo texto (modificado) no arquivo
$gravar5 = fopen($arquivo5, "w");
fwrite($gravar5, $novo5);
fclose($gravar5);


//___________________________________________________%i____________________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "%i";   // Palavra que sera substituida
$colocar6 = "\"/* *** substitua a palavra variavel pelo nome da variavel que você fez,delete o nome da variavel no final da linha e delete a última virgula tambem*/ +variavel+\"";
//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);


//___________________________________________________%s____________________________________________________________

//Defina aqui as configuraçoes
$arquivo7 = "exemplo.txt";   // Arquivo para abrir
$procurar7 = "%s";   // Palavra que sera substituida
$colocar7 = "\"/* *** substitua a palavra variavel pelo nome da variavel que você fez,delete o nome da variavel no final da linha e delete a última virgula tambem*/ +variavel+\"";
//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);



//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);

//___________________________________________________%c____________________________________________________________

//Defina aqui as configuraçoes
$arquivo8 = "exemplo.txt";   // Arquivo para abrir
$procurar8 = "%c";   // Palavra que sera substituida
$colocar8 = "\"/* *** substitua a palavra variavel pelo nome da variavel que você fez,delete o nome da variavel no final da linha e delete a última virgula tambem*/ +variavel+\"";
//Obtem o conteudo do arquivo
$obter8 = file_get_contents($arquivo8);
$novo8 = str_replace($procurar8, $colocar8, $obter8);



//Grava o novo texto (modificado) no arquivo
$gravar8 = fopen($arquivo8, "w");
fwrite($gravar8, $novo8);
fclose($gravar8);

//___________________________________________________%d____________________________________________________________

//Defina aqui as configuraçoes
$arquivo9 = "exemplo.txt";   // Arquivo para abrir
$procurar9 = "%d";   // Palavra que sera substituida
$colocar9 = "\"/* *** substitua a palavra variavel pelo nome da variavel que você fez,delete o nome da variavel no final da linha e delete a última virgula tambem*/ +variavel+\"";
//Obtem o conteudo do arquivo
$obter9 = file_get_contents($arquivo9);
$novo9 = str_replace($procurar9, $colocar9, $obter9);



//Grava o novo texto (modificado) no arquivo
$gravar9 = fopen($arquivo9, "w");
fwrite($gravar9, $novo9);
fclose($gravar9);

//___________________________________________________%f____________________________________________________________

//Defina aqui as configuraçoes
$arquivo91 = "exemplo.txt";   // Arquivo para abrir
$procurar91 = "%f";   // Palavra que sera substituida
$colocar91 = "\"/* *** substitua a palavra variavel pelo nome da variavel que você fez,delete o nome da variavel no final da linha e delete a última virgula tambem*/ +variavel+\"";
//Obtem o conteudo do arquivo
$obter91 = file_get_contents($arquivo91);
$novo91 = str_replace($procurar91, $colocar91, $obter91);



//Grava o novo texto (modificado) no arquivo
$gravar91 = fopen($arquivo91, "w");
fwrite($gravar91, $novo91);
fclose($gravar91);



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