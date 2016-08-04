<html>
<head>
<?php


//_____________________________________________________#include <stdio.h>_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "<?php";   // Palavra que sera substituida
$colocar1 = "#include <stdio.h>
#include <stdlib.h>
#include <windows.h>
#include <string>
#include <iostream>

using namespace std;// DELETE O QUE FICOU ANTES DAS BIBLIOTECAS
//ATENCAO: NAS VARIAVEIS QUE ESTIVEREM SOLTAS [VARIAVEL;], PONHA char[letras, %c ou %s], int[numeros, %i], float[decimal, %f ou %d] antes do nome para declara-las!
//PS: O %i,%f,%d,%s,%c são para você usar no scanf em relacao ao seu tipo de variavel

 int main(){";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para C++... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);


//___________________________________________________int main()_________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "\$";   // Palavra que sera substituida
$colocar2 = "";
//Obtem o conteudo do arquivo
$obter2 = file_get_contents($arquivo2);
$novo2 = str_replace($procurar2, $colocar2, $obter2);



//Grava o novo texto (modificado) no arquivo
$gravar2 = fopen($arquivo2, "w");
fwrite($gravar2, $novo2);
fclose($gravar2);

//__________________________________________________scanf("%i",__________________________________________________

//Defina aqui as configuraçoes
$arquivo3 = "exemplo.txt";   // Arquivo para abrir
$procurar3 = "readline(";   // Palavra que sera substituida
$colocar3 = "/*Apague o que ficou aqui atras <= <= <= ,delete o parenteses que ficou e ponha sua variavel depois de \">>\"(não se esqueca do ponto e virgula depois da sua variavel => => =>*/cin >> ";

//Obtem o conteudo do arquivo
$obter3 = file_get_contents($arquivo3);
$novo3 = str_replace($procurar3, $colocar3, $obter3);



//Grava o novo texto (modificado) no arquivo
$gravar3 = fopen($arquivo3, "w");
fwrite($gravar3, $novo3);
fclose($gravar3);



//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "echo ";   // Palavra que sera substituida
$colocar6 = "cout << ";

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
$procurar8334 = "\".";   // Palavra que sera substituida
$colocar8334 = "/*ponha %s,%c,%i,%d ou %f no lugar desse comentario(s,c=> frase ou caracter i,f,d => numeros ou decimais)*/\",";

//Obtem o conteudo do arquivo
$obter8334 = file_get_contents($arquivo8334);
$novo8334 = str_replace($procurar8334, $colocar8334, $obter8334);



//Grava o novo texto (modificado) no arquivo
$gravar8334 = fopen($arquivo8334, "w");
fwrite($gravar8334, $novo8334);
fclose($gravar8334);

//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo83345 = "exemplo.txt";   // Arquivo para abrir
$procurar83345 = ".\"";   // Palavra que sera substituida
$colocar83345 = ",\"";

//Obtem o conteudo do arquivo
$obter83345 = file_get_contents($arquivo83345);
$novo83345 = str_replace($procurar83345, $colocar83345, $obter83345);



//Grava o novo texto (modificado) no arquivo
$gravar83345 = fopen($arquivo83345, "w");
fwrite($gravar83345, $novo83345);
fclose($gravar83345);

//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo83343 = "exemplo.txt";   // Arquivo para abrir
$procurar83343 = "'.";   // Palavra que sera substituida
$colocar83343 = "/*ponha %s,%c,%i,%d ou %f no lugar desse comentario(s,c=> frase ou caracter i,f,d => numeros ou decimais)*/\",";

//Obtem o conteudo do arquivo
$obter83343 = file_get_contents($arquivo83343);
$novo83343 = str_replace($procurar83343, $colocar83343, $obter83343);



//Grava o novo texto (modificado) no arquivo
$gravar83343 = fopen($arquivo83343, "w");
fwrite($gravar83343, $novo83343);
fclose($gravar83343);

//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo833456 = "exemplo.txt";   // Arquivo para abrir
$procurar833456 = ".'";   // Palavra que sera substituida
$colocar833456 = ",\"";

//Obtem o conteudo do arquivo
$obter833456 = file_get_contents($arquivo833456);
$novo833456 = str_replace($procurar833456, $colocar833456, $obter833456);



//Grava o novo texto (modificado) no arquivo
$gravar833456 = fopen($arquivo833456, "w");
fwrite($gravar833456, $novo833456);
fclose($gravar833456);



//________________________________________________return0;________________________________________________

//Defina aqui as configuraçoes
$arquivo833 = "exemplo.txt";   // Arquivo para abrir
$procurar833 = "?>";   // Palavra que sera substituida
$colocar833 = "

system(\"PAUSE\");
return 0;
}// DELETE O QUE SOUBROU DAQUI PRA BAIXO";



//Obtem o conteudo do arquivo
$obter833 = file_get_contents($arquivo833);
$novo833 = str_replace($procurar833, $colocar833, $obter833);



//Grava o novo texto (modificado) no arquivo
$gravar833 = fopen($arquivo833, "w");
fwrite($gravar833, $novo833);
fclose($gravar833);


//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo833455 = "exemplo.txt";   // Arquivo para abrir
$procurar833455 = "\",";   // Palavra que sera substituida
$colocar833455 = "/*ponha %s,%c,%i,%d ou %f no lugar desse comentario(s,c=> frase ou caracter i,f,d => numeros ou decimais)*/\",";

//Obtem o conteudo do arquivo
$obter833455 = file_get_contents($arquivo833455);
$novo833455 = str_replace($procurar833455, $colocar833455, $obter833455);



//Grava o novo texto (modificado) no arquivo
$gravar833455 = fopen($arquivo833455, "w");
fwrite($gravar833455, $novo833455);
fclose($gravar833455);

//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo8334555 = "exemplo.txt";   // Arquivo para abrir
$procurar8334555 = ",\"";   // Palavra que sera substituida
$colocar8334555 = ",\"";

//Obtem o conteudo do arquivo
$obter8334555 = file_get_contents($arquivo8334555);
$novo8334555 = str_replace($procurar8334555, $colocar8334555, $obter8334555);



//Grava o novo texto (modificado) no arquivo
$gravar8334555 = fopen($arquivo8334555, "w");
fwrite($gravar8334555, $novo8334555);
fclose($gravar8334555);

//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo83343555 = "exemplo.txt";   // Arquivo para abrir
$procurar83343555 = "',";   // Palavra que sera substituida
$colocar83343555 = "/*ponha %s,%c,%i,%d ou %f no lugar desse comentario(s,c=> frase ou caracter i,f,d => numeros ou decimais)*/\",";

//Obtem o conteudo do arquivo
$obter83343555 = file_get_contents($arquivo83343555);
$novo83343555 = str_replace($procurar83343555, $colocar83343555, $obter83343555);



//Grava o novo texto (modificado) no arquivo
$gravar83343555 = fopen($arquivo83343555, "w");
fwrite($gravar83343555, $novo83343555);
fclose($gravar83343555);

//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo83345622 = "exemplo.txt";   // Arquivo para abrir
$procurar83345622 = ",'";   // Palavra que sera substituida
$colocar83345622 = ",\"";

//Obtem o conteudo do arquivo
$obter83345622 = file_get_contents($arquivo83345622);
$novo83345622 = str_replace($procurar83345622, $colocar83345622, $obter83345622);



//Grava o novo texto (modificado) no arquivo
$gravar83345622 = fopen($arquivo83345622, "w");
fwrite($gravar83345622, $novo83345622);
fclose($gravar83345622);


?>






</head>
<body bgcolor = "whitegraw">
</body>
</html>