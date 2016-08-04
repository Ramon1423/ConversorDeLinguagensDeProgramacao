<html>
<head>
<?php


//_____________________________________________________printf(1)_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "System.out.printf";   // Palavra que sera substituida
$colocar1 = "Console.WriteLine";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para C#... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);

//_________________________________________________print______________________________________________________

//Defina aqui as configuraçoes
$arquivo61 = "exemplo.txt";   // Arquivo para abrir
$procurar61 = "System.out.print";   // Palavra que sera substituida
$colocar61 = "Console.WriteLine";

//Obtem o conteudo do arquivo
$obter61 = file_get_contents($arquivo61);
$novo61 = str_replace($procurar61, $colocar61, $obter61);



//Grava o novo texto (modificado) no arquivo
$gravar61 = fopen($arquivo61, "w");
fwrite($gravar61, $novo61);
fclose($gravar61);

//_________________________________________________println______________________________________________________

//Defina aqui as configuraçoes
$arquivo62 = "exemplo.txt";   // Arquivo para abrir
$procurar62 = "System.out.println";   // Palavra que sera substituida
$colocar62 = "Console.WriteLine";

//Obtem o conteudo do arquivo
$obter62 = file_get_contents($arquivo62);
$novo62 = str_replace($procurar62, $colocar62, $obter62);



//Grava o novo texto (modificado) no arquivo
$gravar62 = fopen($arquivo62, "w");
fwrite($gravar62, $novo62);
fclose($gravar62);


//_____________________________________________________scanf%i_________________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = ".nextInt(";   // Palavra que sera substituida
$colocar2 = "Console.ReadLine();//delete a variavel que ficou antes de CONSOLE, e tambem, antes de console ponha (sua variavel) = console... e delete o que sobrou aqui na frente >>>>>>> ";
//Obtem o conteudo do arquivo
$obter2 = file_get_contents($arquivo2);
$novo2 = str_replace($procurar2, $colocar2, $obter2);



//Grava o novo texto (modificado) no arquivo
$gravar2 = fopen($arquivo2, "w");
fwrite($gravar2, $novo2);
fclose($gravar2);

//_____________________________________________________scanf%d_________________________________________________________

//Defina aqui as configuraçoes
$arquivo222 = "exemplo.txt";   // Arquivo para abrir
$procurar222 = ".nextDouble(";   // Palavra que sera substituida
$colocar222 = "Console.ReadLine();//delete a variavel que ficou antes de CONSOLE, e tambem, antes de console ponha (sua variavel) = console... e delete o que sobrou aqui na frente >>>>>>> ";
//Obtem o conteudo do arquivo
$obter222 = file_get_contents($arquivo222);
$novo222 = str_replace($procurar222, $colocar222, $obter222);



//Grava o novo texto (modificado) no arquivo
$gravar222 = fopen($arquivo222, "w");
fwrite($gravar222, $novo222);
fclose($gravar222);

//_____________________________________________________#include<stdio.h>________________________________________________

//Defina aqui as configuraçoes
$arquivo3 = "exemplo.txt";   // Arquivo para abrir
$procurar3 = "importJava.util.Scanner";   // Palavra que sera substituida

$colocar3 = "using System;
using System.Collections.Generic;
using System.Text;";





//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);



//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);



//___________________________________________________return 0;____________________________________________________

//Defina aqui as configuraçoes
$arquivo4 = "exemplo.txt";   // Arquivo para abrir
$procurar4 = "System.exit(0);";   // Palavra que sera substituida
$colocar4 = "";
//Obtem o conteudo do arquivo
$obter4 = file_get_contents($arquivo4);
$novo4 = str_replace($procurar4, $colocar4, $obter4);



//Grava o novo texto (modificado) no arquivo
$gravar4 = fopen($arquivo4, "w");
fwrite($gravar4, $novo4);
fclose($gravar4);




//___________________________________________________%____________________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "\"+";   // Palavra que sera substituida
$colocar6 = "\"+";
//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);


//___________________________________________________%____________________________________________________________

//Defina aqui as configuraçoes
$arquivo7 = "exemplo.txt";   // Arquivo para abrir
$procurar7 = "+\"";   // Palavra que sera substituida
$colocar7 = ",\"";
//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);



//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);






//______________________________________________________scanf%s_______________________________________________________

//Defina aqui as configuraçoes
$arquivo10 = "exemplo.txt";   // Arquivo para abrir
$procurar10 = ".nextLine(";   // Palavra que sera substituida
$colocar10 = "Console.ReadLine();//delete a variavel que ficou antes de CONSOLE, e tambem, antes de console ponha (sua variavel) = console... e delete o que sobrou aqui na frente >>>>>>> ";
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
$procurar22 = ".nextFloat(";   // Palavra que sera substituida
$colocar22 = "Console.ReadLine();//delete a variavel que ficou antes de CONSOLE, e tambem, antes de console ponha (sua variavel) = console... e delete o que sobrou aqui na frente >>>>>>> ";
//Obtem o conteudo do arquivo
$obter22 = file_get_contents($arquivo22);
$novo22 = str_replace($procurar22, $colocar22, $obter22);



//Grava o novo texto (modificado) no arquivo
$gravar22 = fopen($arquivo22, "w");
fwrite($gravar22, $novo22);
fclose($gravar22);



//_____________________________________________________nome do arquivo____________________________________________________

//Defina aqui as configuraçoes
$arquivo12 = "exemplo.txt";   // Arquivo para abrir
$procurar12 = "public class";   // Palavra que sera substituida
$colocar12 = "namespace";
//Obtem o conteudo do arquivo
$obter12 = file_get_contents($arquivo12);
$novo12 = str_replace($procurar12, $colocar12, $obter12);



//Grava o novo texto (modificado) no arquivo
$gravar12 = fopen($arquivo12, "w");
fwrite($gravar12, $novo12);
fclose($gravar12);

//_____________________________________________________int main()____________________________________________________

//Defina aqui as configuraçoes
$arquivo13 = "exemplo.txt";   // Arquivo para abrir
$procurar13 = "public static void main(String[] args)";   // Palavra que sera substituida
$colocar13 = "class Program{
                    static void Main(string[]args)";
//Obtem o conteudo do arquivo
$obter13 = file_get_contents($arquivo13);
$novo13 = str_replace($procurar13, $colocar13, $obter13);



//Grava o novo texto (modificado) no arquivo
$gravar13 = fopen($arquivo13, "w");
fwrite($gravar13, $novo13);
fclose($gravar13);


//_________________________________________________Scanner____________________________________________________

//Defina aqui as configuraçoes
$arquivo14 = "exemplo.txt";   // Arquivo para abrir
$procurar14 = "Scanner";   // Palavra que sera substituida
$colocar14 = "//Apague o que sobrou dessa linha";

//Obtem o conteudo do arquivo
$obter14 = file_get_contents($arquivo14);
$novo14 = str_replace($procurar14, $colocar14, $obter14);



//Grava o novo texto (modificado) no arquivo
$gravar14 = fopen($arquivo14, "w");
fwrite($gravar14, $novo14);
fclose($gravar14);


//_________________________________________________system(PAUSE);____________________________________________________

//Defina aqui as configuraçoes
$arquivo145 = "exemplo.txt";   // Arquivo para abrir
$procurar145 = "System.in.read();";   // Palavra que sera substituida
$colocar145 = "Console.ReadLine();";

//Obtem o conteudo do arquivo
$obter145 = file_get_contents($arquivo145);
$novo145 = str_replace($procurar145, $colocar145, $obter145);



//Grava o novo texto (modificado) no arquivo
$gravar145 = fopen($arquivo145, "w");
fwrite($gravar145, $novo145);
fclose($gravar145);

?>














</head>
<body bgcolor = "whitegraw">
</body>
</html>