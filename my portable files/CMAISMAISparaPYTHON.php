<html>
<head>
<?php


//_____________________________________________________printf(1)_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "cout <<";   // Palavra que sera substituida
$colocar1 = "\"\"\" Feche o parenteses depois das aspas e delete o ponto e virgula => \"\"\"print(";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para PYTHON... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);


//___________________________________________________if____________________________________________________________

//Defina aqui as configuraçoes
$arquivo88 = "exemplo.txt";   // Arquivo para abrir
$procurar88 = " if";   // Palavra que sera substituida
$colocar88 = "\"\"\" depois de fechar os parenteses do |if| ponha dois pontos \":\" e em cada linha das consequecias do |if| ponha um espaçamento igual e de cinco vezes
               Exemplo:
                   if(exemplo == exemplo):
                              print(\"\")
                              print(\"\")
                   
                   else:
                              print(\"\")
                              print(\"\")

                   print(\"Esse print nao pertence ao else nem ao |if| por causa do espaçamento\")  

                   
                   AGORA FAçA VOCÊ ====>>>>\"\"\" if";
//Obtem o conteudo do arquivo
$obter88 = file_get_contents($arquivo88);
$novo88 = str_replace($procurar88, $colocar88, $obter88);



//Grava o novo texto (modificado) no arquivo
$gravar88 = fopen($arquivo88, "w");
fwrite($gravar88, $novo88);
fclose($gravar88);

//___________________________________________________else____________________________________________________________

//Defina aqui as configuraçoes
$arquivo882 = "exemplo.txt";   // Arquivo para abrir
$procurar882 = " else";   // Palavra que sera substituida
$colocar882 = "\"\"\" em cada linha das consequecias do |else| ponha um espaçamento igual e de cinco vezes
               Exemplo:
                   if(exemplo == exemplo):
                              print(\"\")
                              print(\"\")
                   
                   else:
                              print(\"\")
                              print(\"\")

                   print(\"Esse print nao pertence ao else nem ao |if| por causa do espaçamento\")  

                   
                   AGORA FAçA VOCÊ ====>>>>\"\"\" else:";
//Obtem o conteudo do arquivo
$obter882 = file_get_contents($arquivo882);
$novo882 = str_replace($procurar882, $colocar882, $obter882);



//Grava o novo texto (modificado) no arquivo
$gravar882 = fopen($arquivo882, "w");
fwrite($gravar882, $novo882);
fclose($gravar882);


//___________________________________________________elsif____________________________________________________________

//Defina aqui as configuraçoes
$arquivo8822 = "exemplo.txt";   // Arquivo para abrir
$procurar8822 = " else if";   // Palavra que sera substituida
$colocar8822 = "\"\"\" depois de fechar os parenteses do |elsif| ponha dois pontos \":\" e em cada linha das consequecias do |elsif| ponha um espaçamento igual e de cinco vezes
               Exemplo:
                   elsif(exemplo == exemplo):
                              print(\"\")
                              print(\"\")
                   
                   else:
                              print(\"\")
                              print(\"\")

                   print(\"Esse print nao pertence ao else nem ao |elsif| por causa do espaçamento\")  

                   
                   AGORA FAçA VOCÊ ====>>>>\"\"\" elsif";
//Obtem o conteudo do arquivo
$obter8822 = file_get_contents($arquivo8822);
$novo8822 = str_replace($procurar8822, $colocar8822, $obter8822);



//Grava o novo texto (modificado) no arquivo
$gravar8822 = fopen($arquivo8822, "w");
fwrite($gravar8822, $novo8822);
fclose($gravar8822);







//___________________________________________________declaração de variaveis_____________________________________________

//Defina aqui as configuraçoes
$arquivo55522 = "exemplo.txt";   // Arquivo para abrir
$procurar55522 = "int ";   // Palavra que sera substituida
$colocar55522 = "SUAVARIAVEL = int(SUAVARIAVEL)#";
//Obtem o conteudo do arquivo
$obter55522 = file_get_contents($arquivo55522);
$novo55522 = str_replace($procurar55522, $colocar55522, $obter55522);



//Grava o novo texto (modificado) no arquivo
$gravar55522 = fopen($arquivo55522, "w");
fwrite($gravar55522, $novo55522);
fclose($gravar55522);

//___________________________________________________declaração de variaveis_____________________________________________

//Defina aqui as configuraçoes
$arquivo555223 = "exemplo.txt";   // Arquivo para abrir
$procurar555223 = "float ";   // Palavra que sera substituida
$colocar555223 = "SUAVARIAVEL = float(SUAVARIAVEL)#";
//Obtem o conteudo do arquivo
$obter555223 = file_get_contents($arquivo555223);
$novo555223 = str_replace($procurar555223, $colocar555223, $obter555223);



//Grava o novo texto (modificado) no arquivo
$gravar555223 = fopen($arquivo555223, "w");
fwrite($gravar555223, $novo555223);
fclose($gravar555223);

//___________________________________________________declaração de variaveis_____________________________________________

//Defina aqui as configuraçoes
$arquivo5552233 = "exemplo.txt";   // Arquivo para abrir
$procurar5552233 = "string ";   // Palavra que sera substituida
$colocar5552233 = "SUAVARIAVEL = float(SUAVARIAVEL)#";
//Obtem o conteudo do arquivo
$obter5552233 = file_get_contents($arquivo5552233);
$novo5552233 = str_replace($procurar5552233, $colocar5552233, $obter5552233);



//Grava o novo texto (modificado) no arquivo
$gravar5552233 = fopen($arquivo5552233, "w");
fwrite($gravar5552233, $novo5552233);
fclose($gravar5552233);










//_____________________________________________________scanf%i(2)_________________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "cin >>";   // Palavra que sera substituida
$colocar2 = "\"\"\"VARIAVEL\"\"\" = int(input(\"\")#ponha sua variavel ali atras <=";
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

$colocar3 = "Apague todas as bibliotecas que sobraram e delete a linha \"int main\"";





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
$colocar5 = "";
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
$colocar6 = "\"\"\" No final desse print, ponha %variavel, ou caso tenha mais de um %i, ponha %(variavel1, variavel2)  \"\"\"%i";
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
$colocar7 = "\"\"\" No final desse print, ponha %variavel, ou caso tenha mais de um %s, ponha %(variavel1, variavel2)  \"\"\"%s";
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
$colocar8 = "\"\"\" No final desse print, ponha %variavel, ou caso tenha mais de um %c, ponha %(variavel1, variavel2)  \"\"\"%c";
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
$colocar9 = "\"\"\" No final desse print, ponha %variavel, ou caso tenha mais de um %d, ponha %(variavel1, variavel2)  \"\"\"%d";
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
$colocar91 = "\"\"\" No final desse print, ponha %variavel, ou caso tenha mais de um %f, ponha %(variavel1, variavel2)  \"\"\"%f";
//Obtem o conteudo do arquivo
$obter91 = file_get_contents($arquivo91);
$novo91 = str_replace($procurar91, $colocar91, $obter91);



//Grava o novo texto (modificado) no arquivo
$gravar91 = fopen($arquivo91, "w");
fwrite($gravar91, $novo91);
fclose($gravar91);






//___________________________________________________comentario_____________________________________________

//Defina aqui as configuraçoes
$arquivo55 = "exemplo.txt";   // Arquivo para abrir
$procurar55 = "/*";   // Palavra que sera substituida
$colocar55 = "\"\"\"";
//Obtem o conteudo do arquivo
$obter55 = file_get_contents($arquivo55);
$novo55 = str_replace($procurar55, $colocar55, $obter55);



//Grava o novo texto (modificado) no arquivo
$gravar55 = fopen($arquivo55, "w");
fwrite($gravar55, $novo55);
fclose($gravar55);

//___________________________________________________comentario_____________________________________________

//Defina aqui as configuraçoes
$arquivo555 = "exemplo.txt";   // Arquivo para abrir
$procurar555 = "*/";   // Palavra que sera substituida
$colocar555 = "\"\"\"";
//Obtem o conteudo do arquivo
$obter555 = file_get_contents($arquivo555);
$novo555 = str_replace($procurar555, $colocar555, $obter555);



//Grava o novo texto (modificado) no arquivo
$gravar555 = fopen($arquivo555, "w");
fwrite($gravar555, $novo555);
fclose($gravar555);

//___________________________________________________comentario_____________________________________________

//Defina aqui as configuraçoes
$arquivo5552 = "exemplo.txt";   // Arquivo para abrir
$procurar5552 = "//";   // Palavra que sera substituida
$colocar5552 = "#";
//Obtem o conteudo do arquivo
$obter5552 = file_get_contents($arquivo5552);
$novo5552 = str_replace($procurar5552, $colocar5552, $obter5552);



//Grava o novo texto (modificado) no arquivo
$gravar5552 = fopen($arquivo5552, "w");
fwrite($gravar5552, $novo5552);
fclose($gravar5552);


//_____________________________________________________namespace________________________________________________

//Defina aqui as configuraçoes
$arquivo3223 = "exemplo.txt";   // Arquivo para abrir
$procurar3223 = "using namespace";   // Palavra que sera substituida

$colocar3223 = "//Delete essa linha";





//Obtem o conteudo do arquivo
$obter3223 = file_get_contents($arquivo3223);
$novo3223 = str_replace($procurar3223, $colocar3223, $obter3223);



//Grava o novo texto (modificado) no arquivo
$gravar3223 = fopen($arquivo3223, "w");
fwrite($gravar3223, $novo3223);
fclose($gravar3223);


//_____________________________________________________para deletar________________________________________________

//Defina aqui as configuraçoes
$arquivo334 = "exemplo.txt";   // Arquivo para abrir
$procurar334 = "#ifdef WIN32";   // Palavra que sera substituida

$colocar334 = "";





//Obtem o conteudo do arquivo
$obter334 = file_get_contents($arquivo334);
$novo334 = str_replace($procurar334, $colocar334, $obter334);



//Grava o novo texto (modificado) no arquivo
$gravar334 = fopen($arquivo334, "w");
fwrite($gravar334, $novo334);
fclose($gravar334);


//_____________________________________________________para deletar________________________________________________

//Defina aqui as configuraçoes
$arquivo33422 = "exemplo.txt";   // Arquivo para abrir
$procurar33422 = "#endif";   // Palavra que sera substituida

$colocar33422 = "";





//Obtem o conteudo do arquivo
$obter33422 = file_get_contents($arquivo33422);
$novo33422 = str_replace($procurar33422, $colocar33422, $obter33422);



//Grava o novo texto (modificado) no arquivo
$gravar33422 = fopen($arquivo33422, "w");
fwrite($gravar33422, $novo33422);
fclose($gravar33422);


//_____________________________________________________;_______________________________________________________
//Defina aqui as configuraçoes
$arquivo111 = "exemplo.txt";   // Arquivo para abrir
$procurar111 = ";";   // Palavra que sera substituida
$colocar111 = "";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter111 = file_get_contents($arquivo111);
$novo111 = str_replace($procurar111, $colocar111, $obter111);

//Exibe o novo texto (modificado)


//Grava o novo texto (modificado) no arquivo
$gravar111 = fopen($arquivo111, "w");
fwrite($gravar111, $novo111);
fclose($gravar111);

//_____________________________________________________{_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1112 = "exemplo.txt";   // Arquivo para abrir
$procurar1112 = "{";   // Palavra que sera substituida
$colocar1112 = "";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1112 = file_get_contents($arquivo1112);
$novo1112 = str_replace($procurar1112, $colocar1112, $obter1112);

//Exibe o novo texto (modificado)


//Grava o novo texto (modificado) no arquivo
$gravar1112 = fopen($arquivo1112, "w");
fwrite($gravar1112, $novo1112);
fclose($gravar1112);

//_____________________________________________________{_______________________________________________________
//Defina aqui as configuraçoes
$arquivo111222 = "exemplo.txt";   // Arquivo para abrir
$procurar111222 = "}";   // Palavra que sera substituida
$colocar111222 = "";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter111222 = file_get_contents($arquivo111222);
$novo111222 = str_replace($procurar111222, $colocar111222, $obter111222);

//Exibe o novo texto (modificado)


//Grava o novo texto (modificado) no arquivo
$gravar111222 = fopen($arquivo111222, "w");
fwrite($gravar111222, $novo1112);
fclose($gravar111222);


?>














</head>
<body bgcolor = "whitegraw">
</body>
</html>