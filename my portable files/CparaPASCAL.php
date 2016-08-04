<html>
<head>
<?php


//_____________________________________________________#include <stdio.h>_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "#include <stdlib.h>";   // Palavra que sera substituida
$colocar1 = "//Apague todas as bibliotecas que sobraram...PS: se aparecer >variavel = numero;< que nao esteja dentro do if, coloque variavel := numero";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para PASCAL... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);


//___________________________________________________int main()_________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "int main(";   // Palavra que sera substituida
$colocar2 = "Program Ramon Moratori;
             Begin//Quando escrever seu codigo inteiro, em vez de terminar com chave(}), ponha (END.) e delete o que ficou aqui=>";
//Obtem o conteudo do arquivo
$obter2 = file_get_contents($arquivo2);
$novo2 = str_replace($procurar2, $colocar2, $obter2);



//Grava o novo texto (modificado) no arquivo
$gravar2 = fopen($arquivo2, "w");
fwrite($gravar2, $novo2);
fclose($gravar2);


//__________________________________________________scanf("%c",__________________________________________________

//Defina aqui as configuraçoes
$arquivo30 = "exemplo.txt";   // Arquivo para abrir
$procurar30 = "scanf(\"%c\",";   // Palavra que sera substituida
$colocar30 = "read(";

//Obtem o conteudo do arquivo
$obter30 = file_get_contents($arquivo30);
$novo30 = str_replace($procurar30, $colocar30, $obter30);



//Grava o novo texto (modificado) no arquivo
$gravar30 = fopen($arquivo30, "w");
fwrite($gravar30, $novo30);
fclose($gravar30);


//__________________________________________________scanf("%d",__________________________________________________

//Defina aqui as configuraçoes
$arquivo39 = "exemplo.txt";   // Arquivo para abrir
$procurar39 = "scanf(\"%d\",";   // Palavra que sera substituida
$colocar39 = "read(";

//Obtem o conteudo do arquivo
$obter39 = file_get_contents($arquivo39);
$novo39 = str_replace($procurar39, $colocar39, $obter39);



//Grava o novo texto (modificado) no arquivo
$gravar39 = fopen($arquivo39, "w");
fwrite($gravar39, $novo39);
fclose($gravar39);
//__________________________________________________scanf("%i",__________________________________________________

//Defina aqui as configuraçoes
$arquivo3 = "exemplo.txt";   // Arquivo para abrir
$procurar3 = "scanf(\"%i\",";   // Palavra que sera substituida
$colocar3 = "read(";

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
$procurar4 = "scanf(\"%f\",";   // Palavra que sera substituida
$colocar4 = "read(";

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
$procurar5 = "scanf(\"%s\",";   // Palavra que sera substituida
$colocar5 = "read(";

//Obtem o conteudo do arquivo
$obter5 = file_get_contents($arquivo5);
$novo5 = str_replace($procurar5, $colocar5, $obter5);



//Grava o novo texto (modificado) no arquivo
$gravar5 = fopen($arquivo5, "w");
fwrite($gravar5, $novo5);
fclose($gravar5);

//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "printf";   // Palavra que sera substituida
$colocar6 = "writeln";

//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);

//_________________________________________________system("PAUSE")____________________________________________

//Defina aqui as configuraçoes
$arquivo7 = "exemplo.txt";   // Arquivo para abrir
$procurar7 = "system(\"PAUSE\");";   // Palavra que sera substituida
$colocar7 = "ReadKey;";
             

//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);



//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);

//_________________________________________________return0____________________________________________

//Defina aqui as configuraçoes
$arquivo78 = "exemplo.txt";   // Arquivo para abrir
$procurar78 = "return 0;";   // Palavra que sera substituida
$colocar78 = "END.";

//Obtem o conteudo do arquivo
$obter78 = file_get_contents($arquivo78);
$novo78 = str_replace($procurar78, $colocar78, $obter78);



//Grava o novo texto (modificado) no arquivo
$gravar78 = fopen($arquivo78, "w");
fwrite($gravar78, $novo78);
fclose($gravar78);

//_________________________________________________"____________________________________________

//Defina aqui as configuraçoes
$arquivo781 = "exemplo.txt";   // Arquivo para abrir
$procurar781 = "\"";   // Palavra que sera substituida
$colocar781 = "'";

//Obtem o conteudo do arquivo
$obter781 = file_get_contents($arquivo781);
$novo781 = str_replace($procurar781, $colocar781, $obter781);



//Grava o novo texto (modificado) no arquivo
$gravar781 = fopen($arquivo781, "w");
fwrite($gravar781, $novo781);
fclose($gravar781);


//_________________________________________________%i____________________________________________

//Defina aqui as configuraçoes
$arquivo782 = "exemplo.txt";   // Arquivo para abrir
$procurar782 = "%i";   // Palavra que sera substituida
$colocar782 = "',/* *** delete o nome da sua variavel no final da linha */suavariavel,'";

//Obtem o conteudo do arquivo
$obter782 = file_get_contents($arquivo782);
$novo782 = str_replace($procurar782, $colocar782, $obter782);



//Grava o novo texto (modificado) no arquivo
$gravar782 = fopen($arquivo782, "w");
fwrite($gravar782, $novo782);
fclose($gravar782);

//_________________________________________________%s____________________________________________

//Defina aqui as configuraçoes
$arquivo783 = "exemplo.txt";   // Arquivo para abrir
$procurar783 = "%s";   // Palavra que sera substituida
$colocar783 = "',/* *** delete o nome da sua variavel no final da linha */suavariavel,'";

//Obtem o conteudo do arquivo
$obter783 = file_get_contents($arquivo783);
$novo783 = str_replace($procurar783, $colocar783, $obter783);



//Grava o novo texto (modificado) no arquivo
$gravar783 = fopen($arquivo783, "w");
fwrite($gravar783, $novo783);
fclose($gravar783);


//_________________________________________________%f____________________________________________

//Defina aqui as configuraçoes
$arquivo784 = "exemplo.txt";   // Arquivo para abrir
$procurar784 = "%f";   // Palavra que sera substituida
$colocar784 = "',/* *** delete o nome da sua variavel no final da linha */suavariavel,'";

//Obtem o conteudo do arquivo
$obter784 = file_get_contents($arquivo784);
$novo784 = str_replace($procurar784, $colocar784, $obter784);



//Grava o novo texto (modificado) no arquivo
$gravar784 = fopen($arquivo784, "w");
fwrite($gravar784, $novo784);
fclose($gravar784);

//_________________________________________________%d____________________________________________

//Defina aqui as configuraçoes
$arquivo785 = "exemplo.txt";   // Arquivo para abrir
$procurar785 = "%d";   // Palavra que sera substituida
$colocar785 = "',/* *** delete o nome da sua variavel no final da linha */suavariavel,'";

//Obtem o conteudo do arquivo
$obter785 = file_get_contents($arquivo785);
$novo785 = str_replace($procurar785, $colocar785, $obter785);



//Grava o novo texto (modificado) no arquivo
$gravar785 = fopen($arquivo785, "w");
fwrite($gravar785, $novo785);
fclose($gravar785);

//_________________________________________________%c____________________________________________

//Defina aqui as configuraçoes
$arquivo786 = "exemplo.txt";   // Arquivo para abrir
$procurar786 = "%c";   // Palavra que sera substituida
$colocar786 = "',/* *** delete o nome da sua variavel no final da linha */suavariavel,'";

//Obtem o conteudo do arquivo
$obter786 = file_get_contents($arquivo786);
$novo786 = str_replace($procurar786, $colocar786, $obter786);



//Grava o novo texto (modificado) no arquivo
$gravar786 = fopen($arquivo786, "w");
fwrite($gravar786, $novo786);
fclose($gravar786);

//________________________________________________]____________________________________________________

//Defina aqui as configuraçoes
$arquivo44 = "exemplo.txt";   // Arquivo para abrir
$procurar44 = "];";   // Palavra que sera substituida
$colocar44 = "//se a string for int ponha: variavel: array [0...numero da string] of integer;/se for char, name : packed array [1... numero da string] of char;";

//Obtem o conteudo do arquivo
$obter44 = file_get_contents($arquivo44);
$novo44 = str_replace($procurar44, $colocar44, $obter44);



//Grava o novo texto (modificado) no arquivo
$gravar44 = fopen($arquivo44, "w");
fwrite($gravar44, $novo44);
fclose($gravar44);

//________________________________________________switch____________________________________________________

//Defina aqui as configuraçoes
$arquivo444 = "exemplo.txt";   // Arquivo para abrir
$procurar444 = "switch(";   // Palavra que sera substituida
$colocar444 = "case variavel //delete o que ficou aqui =>";

//Obtem o conteudo do arquivo
$obter444 = file_get_contents($arquivo444);
$novo444 = str_replace($procurar444, $colocar444, $obter444);



//Grava o novo texto (modificado) no arquivo
$gravar444 = fopen($arquivo444, "w");
fwrite($gravar444, $novo444);
fclose($gravar444);

//________________________________________________case____________________________________________________

//Defina aqui as configuraçoes
$arquivo4449 = "exemplo.txt";   // Arquivo para abrir
$procurar4449 = "case";   // Palavra que sera substituida
$colocar4449 = " ";

//Obtem o conteudo do arquivo
$obter4449 = file_get_contents($arquivo4449);
$novo4449 = str_replace($procurar4449, $colocar4449, $obter4449);



//Grava o novo texto (modificado) no arquivo
$gravar4449 = fopen($arquivo4449, "w");
fwrite($gravar4449, $novo4449);
fclose($gravar4449);

//________________________________________________break;____________________________________________________

//Defina aqui as configuraçoes
$arquivo4444 = "exemplo.txt";   // Arquivo para abrir
$procurar4444 = "break";   // Palavra que sera substituida
$colocar4444 = "END";

//Obtem o conteudo do arquivo
$obter4444 = file_get_contents($arquivo4444);
$novo4444 = str_replace($procurar4444, $colocar4444, $obter4444);



//Grava o novo texto (modificado) no arquivo
$gravar4444 = fopen($arquivo4444, "w");
fwrite($gravar4444, $novo4444);
fclose($gravar4444);

//________________________________________________if____________________________________________________

//Defina aqui as configuraçoes
$arquivo44444 = "exemplo.txt";   // Arquivo para abrir
$procurar44444 = "if(";   // Palavra que sera substituida
$colocar44444 = "if/* retire as chaves dessa sentenca e ponha: [then (enter)
                                                               begin] na primeira e substitua por [END;] a chave que fecha.
                                                                                                   se tiver um else, tire o ponto e virgula de END
                                  Exemplo: if(var == 2) Then
                                            Begin
                                                 (CONTEUDO)
                                               END;*/";
                            

//Obtem o conteudo do arquivo
$obter44444 = file_get_contents($arquivo44444);
$novo44444 = str_replace($procurar44444, $colocar44444, $obter44444);



//Grava o novo texto (modificado) no arquivo
$gravar44444 = fopen($arquivo44444, "w");
fwrite($gravar44444, $novo44444);
fclose($gravar44444);


//________________________________________________while____________________________________________________

//Defina aqui as configuraçoes
$arquivo444443 = "exemplo.txt";   // Arquivo para abrir
$procurar444443 = "while(";   // Palavra que sera substituida
$colocar444443 = "while /* delete os parenteses, substitua a primeira chave por [do
                                                                                Begin] e a segunda chave por END;
                   Exemplo: while var == 2 do
                                            Begin
                                              (CONTEUDO)
                                               END;*/";
                            

//Obtem o conteudo do arquivo
$obter444443 = file_get_contents($arquivo444443);
$novo444443 = str_replace($procurar444443, $colocar444443, $obter444443);



//Grava o novo texto (modificado) no arquivo
$gravar444443 = fopen($arquivo444443, "w");
fwrite($gravar444443, $novo444443);
fclose($gravar444443);

//________________________________________________for____________________________________________________

//Defina aqui as configuraçoes
$arquivo4444433 = "exemplo.txt";   // Arquivo para abrir
$procurar4444433 = "for(";   // Palavra que sera substituida
$colocar4444433 = "for /* 
                   Exemplo: LINGUAGEM C: for(variavel = 1; variavel <= 10; variavel++){
                     
                                         }
                            PASCAL:      for variavel := 1 to 9 do
                                         Begin
                                         
                                         END;*/";
                            

//Obtem o conteudo do arquivo
$obter4444433 = file_get_contents($arquivo4444433);
$novo4444433 = str_replace($procurar4444433, $colocar4444433, $obter4444433);



//Grava o novo texto (modificado) no arquivo
$gravar4444433 = fopen($arquivo4444433, "w");
fwrite($gravar4444433, $novo4444433);
fclose($gravar4444433);

//________________________________________________int variavel____________________________________________________

//Defina aqui as configuraçoes
$arquivo80 = "exemplo.txt";   // Arquivo para abrir
$procurar80 = "int";   // Palavra que sera substituida
$colocar80 = "/* se sua variavel for numeros normais, depois do nome dela ponha [: integer;], se for decimal ponha [: boolean;] ou [: real;]*/var";
                            

//Obtem o conteudo do arquivo
$obter80 = file_get_contents($arquivo80);
$novo80 = str_replace($procurar80, $colocar80, $obter80);



//Grava o novo texto (modificado) no arquivo
$gravar80 = fopen($arquivo80, "w");
fwrite($gravar80, $novo80);
fclose($gravar80);

//________________________________________________char variavel____________________________________________________

//Defina aqui as configuraçoes
$arquivo801 = "exemplo.txt";   // Arquivo para abrir
$procurar801 = "char";   // Palavra que sera substituida
$colocar801 = "/*Ponha depois do nome da sua variavel assim: [var variavel: char;]  */var";
                            

//Obtem o conteudo do arquivo
$obter801 = file_get_contents($arquivo801);
$novo801 = str_replace($procurar801, $colocar801, $obter801);



//Grava o novo texto (modificado) no arquivo
$gravar801 = fopen($arquivo801, "w");
fwrite($gravar801, $novo801);
fclose($gravar801);


?>













</head>
<body bgcolor = "whitegraw">
</body>
</html>

