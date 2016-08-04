<html>
<head>
<?php


//_____________________________________________________variavel_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "= int(";   // Palavra que sera substituida
$colocar1 = "/*delete o que sobrou aqui atras <<===, delete o parenteses => e termine com ponto e virgula*/int ";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para C#... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);


//_____________________________________________________variavel_______________________________________________________
//Defina aqui as configuraçoes
$arquivo123 = "exemplo.txt";   // Arquivo para abrir
$procurar123 = "= char(";   // Palavra que sera substituida
$colocar123 = "/*delete o que sobrou aqui atras <<===, delete o parenteses => e termine com ponto e virgula*/char ";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter123 = file_get_contents($arquivo123);
$novo123 = str_replace($procurar123, $colocar123, $obter123);

//Exibe o novo texto (modificado)

//Grava o novo texto (modificado) no arquivo
$gravar123 = fopen($arquivo123, "w");
fwrite($gravar123, $novo123);
fclose($gravar123);



//_____________________________________________________variavel_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1232 = "exemplo.txt";   // Arquivo para abrir
$procurar1232 = "= float(";   // Palavra que sera substituida
$colocar1232 = "/*delete o que sobrou aqui atras <<===, delete o parenteses => e termine com ponto e virgula*/float ";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1232 = file_get_contents($arquivo1232);
$novo1232 = str_replace($procurar1232, $colocar1232, $obter1232);

//Exibe o novo texto (modificado)

//Grava o novo texto (modificado) no arquivo
$gravar1232 = fopen($arquivo1232, "w");
fwrite($gravar1232, $novo1232);
fclose($gravar1232);


//__________________________________________________scanf("%i",__________________________________________________

//Defina aqui as configuraçoes
$arquivo3 = "exemplo.txt";   // Arquivo para abrir
$procurar3 = "input(\"";   // Palavra que sera substituida
$colocar3 = "Console.ReadLine();//";

//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);



//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);


//__________________________________________________scanf("%i",__________________________________________________

//Defina aqui as configuraçoes
$arquivo34 = "exemplo.txt";   // Arquivo para abrir
$procurar34 = "str(";   // Palavra que sera substituida
$colocar34 = "/*delete o parenteses a mais que ficou ali na frente =>*/";

//Obtem o conteudo do arquivo
$obter34 = file_get_contents($arquivo34);
$novo34 = str_replace($procurar34, $colocar34, $obter34);



//Grava o novo texto (modificado) no arquivo
$gravar34 = fopen($arquivo34, "w");
fwrite($gravar34, $novo34);
fclose($gravar34);

//________________________________________________scanf("%f",____________________________________________________

//Defina aqui as configuraçoes
$arquivo4 = "exemplo.txt";   // Arquivo para abrir
$procurar4 = "int(";   // Palavra que sera substituida
$colocar4 = "/*delete o parenteses a mais que ficou ali na frente =>*/";

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
$procurar5 = "float(";   // Palavra que sera substituida
$colocar5 = "/*delete o parenteses a mais que ficou ali na frente =>*/";

//Obtem o conteudo do arquivo
$obter5 = file_get_contents($arquivo5);
$novo5 = str_replace($procurar5, $colocar5, $obter5);



//Grava o novo texto (modificado) no arquivo
$gravar5 = fopen($arquivo5, "w");
fwrite($gravar5, $novo5);
fclose($gravar5);

//________________________________________________if____________________________________________________

//Defina aqui as configuraçoes
$arquivo522 = "exemplo.txt";   // Arquivo para abrir
$procurar522 = " if";   // Palavra que sera substituida
$colocar522 = "



/*

   OBSERVACOES: NO INICIO DO SEU CODIGO PONHA:

using System;
using System.Collections.Generic;
using System.Text;
 
namespace RamonMoratori
{
    class Program
    {
        static void Main(string[] args)
        {



}
}
}FECHE ESSAS TRES CHAVES NO FINAL DO SEU CODIGO


SE VOCE TEM ALGUMA VARIAVEL QUE FOI DECLARADA APENAS COM = \"VALOR\" DEFINA ELA ANTES COM O TIPO DE VARIAVEL:
EXEMPLO: char variavel;     int variavel;   float variavel;


A CONVERSAO DO IF TÁ ALI EM EMBAIXO Ó 
...
...

*/ 







/*Em vez de dois ponto ali na frente => \":\" substitua por \"{\" e depois feche no fim da função com \"}\"*/if";

//Obtem o conteudo do arquivo
$obter522 = file_get_contents($arquivo522);
$novo522 = str_replace($procurar522, $colocar522, $obter522);



//Grava o novo texto (modificado) no arquivo
$gravar522 = fopen($arquivo522, "w");
fwrite($gravar522, $novo522);
fclose($gravar522);

//________________________________________________switch____________________________________________________

//Defina aqui as configuraçoes
$arquivo5222 = "exemplo.txt";   // Arquivo para abrir
$procurar5222 = " switch";   // Palavra que sera substituida
$colocar5222 = "/*Em vez de dois ponto ali na frente => \":\" substitua por \"{\" e depois feche no fim da função com \"}\"*/switch";

//Obtem o conteudo do arquivo
$obter5222 = file_get_contents($arquivo5222);
$novo5222 = str_replace($procurar5222, $colocar5222, $obter5222);



//Grava o novo texto (modificado) no arquivo
$gravar5222 = fopen($arquivo5222, "w");
fwrite($gravar5222, $novo5222);
fclose($gravar5222);

//________________________________________________else____________________________________________________

//Defina aqui as configuraçoes
$arquivo52222 = "exemplo.txt";   // Arquivo para abrir
$procurar52222 = " else";   // Palavra que sera substituida
$colocar52222 = "/*Em vez de dois ponto ali na frente => \":\" substitua por \"{\" e depois feche no fim da função com \"}\"*/else";

//Obtem o conteudo do arquivo
$obter52222 = file_get_contents($arquivo52222);
$novo52222 = str_replace($procurar52222, $colocar52222, $obter52222);



//Grava o novo texto (modificado) no arquivo
$gravar52222 = fopen($arquivo52222, "w");
fwrite($gravar52222, $novo52222);
fclose($gravar52222);


//________________________________________________else if____________________________________________________

//Defina aqui as configuraçoes
$arquivo522222 = "exemplo.txt";   // Arquivo para abrir
$procurar522222 = " elif";   // Palavra que sera substituida
$colocar522222 = "/*Em vez de dois ponto ali na frente => \":\" substitua por \"{\" e depois feche no fim da função com \"}\"*/else if";

//Obtem o conteudo do arquivo
$obter522222 = file_get_contents($arquivo522222);
$novo522222 = str_replace($procurar522222, $colocar522222, $obter522222);



//Grava o novo texto (modificado) no arquivo
$gravar522222 = fopen($arquivo522222, "w");
fwrite($gravar522222, $novo522222);
fclose($gravar522222);


//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "print";   // Palavra que sera substituida
$colocar6 = "/*ponha o ponto e virgula no final desse printf*/Console.WriteLine";

//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);




//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo8334 = "exemplo.txt";   // Arquivo para abrir
$procurar8334 = "\" %";   // Palavra que sera substituida
$colocar8334 = "/* EM VEZ DE USAR PORCENTAGEM, NA LINGUAGEM C SHARP FAZEMOS ASSIM: \"TEXTO:\" + VARIAVEL +\"CONTINUACAO DO TEXTO\".... DELETE O PARENTESES ALI DA FRENTE E MONTE CORRETAMENTE SUAS VARIAVEIS=>*/ +";

//Obtem o conteudo do arquivo
$obter8334 = file_get_contents($arquivo8334);
$novo8334 = str_replace($procurar8334, $colocar8334, $obter8334);



//Grava o novo texto (modificado) no arquivo
$gravar8334 = fopen($arquivo8334, "w");
fwrite($gravar8334, $novo8334);
fclose($gravar8334);




//________________________________________________//________________________________________________

//Defina aqui as configuraçoes
$arquivo8334223 = "exemplo.txt";   // Arquivo para abrir
$procurar8334223 = "#";   // Palavra que sera substituida
$colocar8334223 = "//";

//Obtem o conteudo do arquivo
$obter8334223 = file_get_contents($arquivo8334223);
$novo8334223 = str_replace($procurar8334223, $colocar8334223, $obter8334223);



//Grava o novo texto (modificado) no arquivo
$gravar8334223 = fopen($arquivo8334223, "w");
fwrite($gravar8334223, $novo8334223);
fclose($gravar8334223);


//________________________________________________/* */________________________________________________

//Defina aqui as configuraçoes
$arquivo8334223 = "exemplo.txt";   // Arquivo para abrir
$procurar8334223 = "\"\"\"";   // Palavra que sera substituida
$colocar8334223 = "/* |ESSE SINAL FECHA O COMENTARIO|==> */ <==  |ESSE ABRE|==> /* <====  */";

//Obtem o conteudo do arquivo
$obter8334223 = file_get_contents($arquivo8334223);
$novo8334223 = str_replace($procurar8334223, $colocar8334223, $obter8334223);



//Grava o novo texto (modificado) no arquivo
$gravar8334223 = fopen($arquivo8334223, "w");
fwrite($gravar8334223, $novo8334223);
fclose($gravar8334223);



?>






</head>
<body bgcolor = "whitegraw">
</body>
</html>