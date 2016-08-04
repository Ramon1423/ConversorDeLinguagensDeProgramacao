<html>
<head>
<?php

//RAMON LINDÃO!!!MESTRE SUPREMO!!

//_____________________________________________________#include <stdio.h>_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "using System;";   // Palavra que sera substituida
$colocar1 = "import java.util.Scanner/* *///Delete todas as bibliotecas que ficaram";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para JAVA... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);


//___________________________________________________int main()_________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "class Program";   // Palavra que sera substituida
$colocar2 = "public static void main(String[]args){ 
              Scanner entrada = newScanner(System.in); /* *///delete todas as linhas que abrem chaves de inicio(e feche a quantidade que abriu).";
//Obtem o conteudo do arquivo
$obter2 = file_get_contents($arquivo2);
$novo2 = str_replace($procurar2, $colocar2, $obter2);



//Grava o novo texto (modificado) no arquivo
$gravar2 = fopen($arquivo2, "w");
fwrite($gravar2, $novo2);
fclose($gravar2);

//___________________________________________________nome do arquivo_________________________________________________

//Defina aqui as configuraçoes
$arquivo22 = "exemplo.txt";   // Arquivo para abrir
$procurar22 = "namespace";   // Palavra que sera substituida
$colocar22 = "public class";
//Obtem o conteudo do arquivo
$obter22 = file_get_contents($arquivo22);
$novo22 = str_replace($procurar22, $colocar22, $obter22);



//Grava o novo texto (modificado) no arquivo
$gravar22 = fopen($arquivo22, "w");
fwrite($gravar22, $novo22);
fclose($gravar22);


//__________________________________________________scanf("%i",__________________________________________________

//Defina aqui as configuraçoes
$arquivo3 = "exemplo.txt";   // Arquivo para abrir
$procurar3 = "Console.ReadLine();";   // Palavra que sera substituida
$colocar3 = "entrada.nextInt();//delete o que sobrou antes.";

//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);



//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);

//________________________________________________scanf("%f",____________________________________________________

//Defina aqui as configuraçoes
$arquivo4 = "exemplo.txt";   // Arquivo para abrir
$procurar4 = "Console.ReadLine();";   // Palavra que sera substituida
$colocar4 = "entrada.nextFloat();//delete o que sobrou antes.";

//Obtem o conteudo do arquivo
$obter4 = file_get_contents($arquivo4);
$novo4 = str_replace($procurar4, $colocar4, $obter4);



//Grava o novo texto (modificado) no arquivo
$gravar4 = fopen($arquivo4, "w");
fwrite($gravar4, $novo4);
fclose($gravar4);

//________________________________________________scanf("%s",____________________________________________________

//Defina aqui as configuraçoes
$arquivo5 = "exemplo.txt";   // Arquivo para abrir
$procurar5 = "Console.ReadLine();";   // Palavra que sera substituida
$colocar5 = "entrada.nextLine();//delete o que sobrou antes.";

//Obtem o conteudo do arquivo
$obter5 = file_get_contents($arquivo5);
$novo5 = str_replace($procurar5, $colocar5, $obter5);



//Grava o novo texto (modificado) no arquivo
$gravar5 = fopen($arquivo5, "w");
fwrite($gravar5, $novo5);
fclose($gravar5);

//________________________________________________double.Parse____________________________________________________

//Defina aqui as configuraçoes
$arquivo54 = "exemplo.txt";   // Arquivo para abrir
$procurar54 = "double.Parse(Console.ReadLine());";   // Palavra que sera substituida
$colocar54 = "entrada.next();//delete o que sobrou antes e ponha o tipo da sua variavel depois de next.";

//Obtem o conteudo do arquivo
$obter54 = file_get_contents($arquivo54);
$novo54 = str_replace($procurar54, $colocar54, $obter54);



//Grava o novo texto (modificado) no arquivo
$gravar54 = fopen($arquivo54, "w");
fwrite($gravar54, $novo54);
fclose($gravar54);

//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "Console.WriteLine";   // Palavra que sera substituida
$colocar6 = "System.out.printf";

//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);

//________________________________________________%______________________________________________________________

//Defina aqui as configuraçoes
$arquivo7 = "exemplo.txt";   // Arquivo para abrir
$procurar7 = "\"+";   // Palavra que sera substituida
$colocar7 = "\"+";
//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);



//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);

//_______________________________________________System(PAUSE)__________________________________________________

//Defina aqui as configuraçoes
$arquivo8 = "exemplo.txt";   // Arquivo para abrir
$procurar8 = "Console.ReadKey();";   // Palavra que sera substituida
$colocar8 = "System.out.println(\"Press Enter to continue...\");
             System.in.read();";
//Obtem o conteudo do arquivo
$obter8 = file_get_contents($arquivo8);
$novo8 = str_replace($procurar8, $colocar8, $obter8);



//Grava o novo texto (modificado) no arquivo
$gravar8 = fopen($arquivo8, "w");
fwrite($gravar8, $novo8);
fclose($gravar8);


?>














</head>
<body bgcolor = "whitegraw">
</body>
</html>