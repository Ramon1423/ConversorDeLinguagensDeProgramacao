<html>
<head>
<?php


//_____________________________________________________printf(1)_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "echo ";   // Palavra que sera substituida
$colocar1 = "/*feche o parenteses e em vez de aspas simples(caso tenha), ponha aspas duplas*/Console.WriteLine(";   // Palavra que ficara no lugar

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
$procurar2 = "readline(\"";   // Palavra que sera substituida
$colocar2 = "Console.ReadLine();//delete o que ficar => ";
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
$procurar3 = "<?php";   // Palavra que sera substituida

$colocar3 = "using System;
using System.Collections.Generic;
using System.Text;

// DELETE O QUE FICOU ANTES DE using System;
//ATENCAO: NAS VARIAVEIS QUE ESTIVEREM SOLTAS [VARIAVEL;], PONHA char[letras], int[numeros], float[decimal] antes do nome para declara-las!
 
namespace RamonMoratori
{
    class Program
    {
        static void Main(string[] args)
        {";





//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);



//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);




//___________________________________________________%____________________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "\",";   // Palavra que sera substituida
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
$procurar7 = "\" ,";   // Palavra que sera substituida
$colocar7 = "\"+";
//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);



//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);

//___________________________________________________%____________________________________________________________

//Defina aqui as configuraçoes
$arquivo8 = "exemplo.txt";   // Arquivo para abrir
$procurar8 = "\".";   // Palavra que sera substituida
$colocar8 = "\"+";
//Obtem o conteudo do arquivo
$obter8 = file_get_contents($arquivo8);
$novo8 = str_replace($procurar8, $colocar8, $obter8);



//Grava o novo texto (modificado) no arquivo
$gravar8 = fopen($arquivo8, "w");
fwrite($gravar8, $novo8);
fclose($gravar8);

//___________________________________________________%____________________________________________________________

//Defina aqui as configuraçoes
$arquivo9 = "exemplo.txt";   // Arquivo para abrir
$procurar9 = "\" .";   // Palavra que sera substituida
$colocar9 = "\"+";
//Obtem o conteudo do arquivo
$obter9 = file_get_contents($arquivo9);
$novo9 = str_replace($procurar9, $colocar9, $obter9);



//Grava o novo texto (modificado) no arquivo
$gravar9 = fopen($arquivo9, "w");
fwrite($gravar9, $novo9);
fclose($gravar9);

//___________________________________________________%1____________________________________________________________

//Defina aqui as configuraçoes
$arquivo91 = "exemplo.txt";   // Arquivo para abrir
$procurar91 = ",\"";   // Palavra que sera substituida
$colocar91 = "+\"";
//Obtem o conteudo do arquivo
$obter91 = file_get_contents($arquivo91);
$novo91 = str_replace($procurar91, $colocar91, $obter91);



//Grava o novo texto (modificado) no arquivo
$gravar91 = fopen($arquivo91, "w");
fwrite($gravar91, $novo91);
fclose($gravar91);

//___________________________________________________%2____________________________________________________________

//Defina aqui as configuraçoes
$arquivo912 = "exemplo.txt";   // Arquivo para abrir
$procurar912 = ", \"";   // Palavra que sera substituida
$colocar912 = "+\"";
//Obtem o conteudo do arquivo
$obter912 = file_get_contents($arquivo912);
$novo912 = str_replace($procurar912, $colocar912, $obter912);



//Grava o novo texto (modificado) no arquivo
$gravar912 = fopen($arquivo912, "w");
fwrite($gravar912, $novo912);
fclose($gravar912);

//___________________________________________________%3____________________________________________________________

//Defina aqui as configuraçoes
$arquivo913 = "exemplo.txt";   // Arquivo para abrir
$procurar913 = ".\"";   // Palavra que sera substituida
$colocar913 = "+\"";
//Obtem o conteudo do arquivo
$obter913 = file_get_contents($arquivo913);
$novo913 = str_replace($procurar913, $colocar913, $obter913);



//Grava o novo texto (modificado) no arquivo
$gravar913 = fopen($arquivo913, "w");
fwrite($gravar913, $novo913);
fclose($gravar913);

//___________________________________________________%4____________________________________________________________

//Defina aqui as configuraçoes
$arquivo914 = "exemplo.txt";   // Arquivo para abrir
$procurar914 = ". \"";   // Palavra que sera substituida
$colocar914 = "+\"";
//Obtem o conteudo do arquivo
$obter914 = file_get_contents($arquivo914);
$novo914 = str_replace($procurar914, $colocar914, $obter914);



//Grava o novo texto (modificado) no arquivo
$gravar914 = fopen($arquivo914, "w");
fwrite($gravar914, $novo914);
fclose($gravar914);


//________________________________________________return0;________________________________________________

//Defina aqui as configuraçoes
$arquivo833 = "exemplo.txt";   // Arquivo para abrir
$procurar833 = "?>";   // Palavra que sera substituida
$colocar833 = "

Console.ReadKey();

}

}

}// DELETE O QUE SOUBROU DAQUI PRA BAIXO";



//Obtem o conteudo do arquivo
$obter833 = file_get_contents($arquivo833);
$novo833 = str_replace($procurar833, $colocar833, $obter833);



//Grava o novo texto (modificado) no arquivo
$gravar833 = fopen($arquivo833, "w");
fwrite($gravar833, $novo833);
fclose($gravar833);

//___________________________________________________\$_________________________________________________

//Defina aqui as configuraçoes
$arquivo222 = "exemplo.txt";   // Arquivo para abrir
$procurar222 = "\$";   // Palavra que sera substituida
$colocar222 = "";
//Obtem o conteudo do arquivo
$obter222 = file_get_contents($arquivo222);
$novo222 = str_replace($procurar222, $colocar222, $obter222);



//Grava o novo texto (modificado) no arquivo
$gravar222 = fopen($arquivo222, "w");
fwrite($gravar222, $novo222);
fclose($gravar222);


?>














</head>
<body bgcolor = "whitegraw">
</body>
</html>
