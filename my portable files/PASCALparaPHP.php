<html>
<head>
<?php


//_____________________________________________________#include <stdio.h>_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "Program";   // Palavra que sera substituida
$colocar1 = "<html>
<head>
<title>Ramon Moratori</title>
</head>
<body>
<?php//delete as bibliotecas #include que ficaram..........
//ATENCAO: TODA VEZ QUE UMA VARIAVEL APARECER,COLOQUE UM \$(SIFRAO) ANTES DO NOME => \$VARIAVEL.........delete este nome =>  
/*ATENCAO: PONHA NO FINAL DO AQUIVO O FECHAMENTO DO PHP:
?>
</body>
</html>*/ //                      ";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para PHP... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);



//__________________________________________________scanf__________________________________________________

//Defina aqui as configuraçoes
$arquivo30 = "exemplo.txt";   // Arquivo para abrir
$procurar30 = "Readln(";   // Palavra que sera substituida
$colocar30 = "\$variavel = readline(\" \");//substitua o nome variavel ali atras <= pelo nome da sua variavel <=........ delete o que ficou =>";

//Obtem o conteudo do arquivo
$obter30 = file_get_contents($arquivo30);
$novo30 = str_replace($procurar30, $colocar30, $obter30);



//Grava o novo texto (modificado) no arquivo
$gravar30 = fopen($arquivo30, "w");
fwrite($gravar30, $novo30);
fclose($gravar30);




//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "writeln";   // Palavra que sera substituida
$colocar6 = "echo/*delete os parenteses*/";

//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);

//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo6222 = "exemplo.txt";   // Arquivo para abrir
$procurar6222 = "Writeln";   // Palavra que sera substituida
$colocar6222 = "echo/*delete os parenteses*/";

//Obtem o conteudo do arquivo
$obter6222 = file_get_contents($arquivo6222);
$novo6222 = str_replace($procurar6222, $colocar6222, $obter6222);



//Grava o novo texto (modificado) no arquivo
$gravar6222 = fopen($arquivo6222, "w");
fwrite($gravar6222, $novo6222);
fclose($gravar6222);

//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo62222 = "exemplo.txt";   // Arquivo para abrir
$procurar62222 = "Write";   // Palavra que sera substituida
$colocar62222 = "echo/*delete os parenteses*/";

//Obtem o conteudo do arquivo
$obter62222 = file_get_contents($arquivo62222);
$novo62222 = str_replace($procurar62222, $colocar62222, $obter62222);



//Grava o novo texto (modificado) no arquivo
$gravar62222 = fopen($arquivo62222, "w");
fwrite($gravar62222, $novo62222);
fclose($gravar62222);



//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo6123 = "exemplo.txt";   // Arquivo para abrir
$procurar6123 = "write";   // Palavra que sera substituida
$colocar6123 = "echo/*delete os parenteses*/";

//Obtem o conteudo do arquivo
$obter6123 = file_get_contents($arquivo6123);
$novo6123 = str_replace($procurar6123, $colocar6123, $obter6123);



//Grava o novo texto (modificado) no arquivo
$gravar6123 = fopen($arquivo6123, "w");
fwrite($gravar6123, $novo6123);
fclose($gravar6123);

//_________________________________________________system("PAUSE")____________________________________________

//Defina aqui as configuraçoes
$arquivo7 = "exemplo.txt";   // Arquivo para abrir
$procurar7 = "ReadKey;";   // Palavra que sera substituida
$colocar7 = "";
             

//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);



//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);


//_________________________________________________system("PAUSE")____________________________________________

//Defina aqui as configuraçoes
$arquivo747 = "exemplo.txt";   // Arquivo para abrir
$procurar747 = "Readkey;";   // Palavra que sera substituida
$colocar747 = "";
             

//Obtem o conteudo do arquivo
$obter747 = file_get_contents($arquivo747);
$novo747 = str_replace($procurar747, $colocar747, $obter747);



//Grava o novo texto (modificado) no arquivo
$gravar747 = fopen($arquivo747, "w");
fwrite($gravar747, $novo747);
fclose($gravar747);

//_________________________________________________return0____________________________________________

//Defina aqui as configuraçoes
$arquivo78 = "exemplo.txt";   // Arquivo para abrir
$procurar78 = "END.";   // Palavra que sera substituida
$colocar78 = "}//Se essa chave nao pertencer a um if, delete-a";

//Obtem o conteudo do arquivo
$obter78 = file_get_contents($arquivo78);
$novo78 = str_replace($procurar78, $colocar78, $obter78);



//Grava o novo texto (modificado) no arquivo
$gravar78 = fopen($arquivo78, "w");
fwrite($gravar78, $novo78);
fclose($gravar78);

//_________________________________________________return0____________________________________________

//Defina aqui as configuraçoes
$arquivo7899 = "exemplo.txt";   // Arquivo para abrir
$procurar7899 = "End.";   // Palavra que sera substituida
$colocar7899 = "}//Se essa chave nao pertencer a um if, delete-a";

//Obtem o conteudo do arquivo
$obter7899 = file_get_contents($arquivo7899);
$novo7899 = str_replace($procurar7899, $colocar7899, $obter7899);



//Grava o novo texto (modificado) no arquivo
$gravar7899 = fopen($arquivo7899, "w");
fwrite($gravar7899, $novo7899);
fclose($gravar7899);

//_________________________________________________END____________________________________________*

//Defina aqui as configuraçoes
$arquivo7878 = "exemplo.txt";   // Arquivo para abrir
$procurar7878 = "END";   // Palavra que sera substituida
$colocar7878 = "}//Se essa chave nao pertencer a um if, delete-a";

//Obtem o conteudo do arquivo
$obter7878 = file_get_contents($arquivo7878);
$novo7878 = str_replace($procurar7878, $colocar7878, $obter7878);



//Grava o novo texto (modificado) no arquivo
$gravar7878 = fopen($arquivo7878, "w");
fwrite($gravar7878, $novo7878);
fclose($gravar7878);

//_________________________________________________END____________________________________________*

//Defina aqui as configuraçoes
$arquivo78781 = "exemplo.txt";   // Arquivo para abrir
$procurar78781 = "End";   // Palavra que sera substituida
$colocar78781 = "}//Se essa chave nao pertencer a um if, delete-a";

//Obtem o conteudo do arquivo
$obter78781 = file_get_contents($arquivo78781);
$novo78781 = str_replace($procurar78781, $colocar78781, $obter78781);



//Grava o novo texto (modificado) no arquivo
$gravar78781 = fopen($arquivo78781, "w");
fwrite($gravar78781, $novo78781);
fclose($gravar78781);

//_________________________________________________:=____________________________________________

//Defina aqui as configuraçoes
$arquivo4 = "exemplo.txt";   // Arquivo para abrir
$procurar4 = ":=";   // Palavra que sera substituida
$colocar4 = "=";

//Obtem o conteudo do arquivo
$obter4 = file_get_contents($arquivo4);
$novo4 = str_replace($procurar4, $colocar4, $obter4);



//Grava o novo texto (modificado) no arquivo
$gravar4 = fopen($arquivo4, "w");
fwrite($gravar4, $novo4);
fclose($gravar4);

//_________________________________________________BEGIN____________________________________________

//Defina aqui as configuraçoes
$arquivo40 = "exemplo.txt";   // Arquivo para abrir
$procurar40 = "BEGIN";   // Palavra que sera substituida
$colocar40 = "{//Se essa chave nao pertencer a um if, delete-a";

//Obtem o conteudo do arquivo
$obter40 = file_get_contents($arquivo40);
$novo40 = str_replace($procurar40, $colocar40, $obter40);



//Grava o novo texto (modificado) no arquivo
$gravar40 = fopen($arquivo40, "w");
fwrite($gravar40, $novo40);
fclose($gravar40);

//_________________________________________________BEGIN____________________________________________

//Defina aqui as configuraçoes
$arquivo402 = "exemplo.txt";   // Arquivo para abrir
$procurar402 = "Begin";   // Palavra que sera substituida
$colocar402 = "{//Se essa chave nao pertencer a um if, delete-a";

//Obtem o conteudo do arquivo
$obter402 = file_get_contents($arquivo402);
$novo402 = str_replace($procurar402, $colocar402, $obter402);



//Grava o novo texto (modificado) no arquivo
$gravar402 = fopen($arquivo402, "w");
fwrite($gravar402, $novo402);
fclose($gravar402);

//_________________________________________________"____________________________________________

//Defina aqui as configuraçoes
$arquivo781 = "exemplo.txt";   // Arquivo para abrir
$procurar781 = "'";   // Palavra que sera substituida
$colocar781 = "\"";

//Obtem o conteudo do arquivo
$obter781 = file_get_contents($arquivo781);
$novo781 = str_replace($procurar781, $colocar781, $obter781);



//Grava o novo texto (modificado) no arquivo
$gravar781 = fopen($arquivo781, "w");
fwrite($gravar781, $novo781);
fclose($gravar781);


//_________________________________________________%____________________________________________++

//Defina aqui as configuraçoes
$arquivo782 = "exemplo.txt";   // Arquivo para abrir
$procurar782 = "',";   // Palavra que sera substituida
$colocar782 = "{\$VARIAVEL}/*ponha o nome da sua variavel*/";

//Obtem o conteudo do arquivo
$obter782 = file_get_contents($arquivo782);
$novo782 = str_replace($procurar782, $colocar782, $obter782);



//Grava o novo texto (modificado) no arquivo
$gravar782 = fopen($arquivo782, "w");
fwrite($gravar782, $novo782);
fclose($gravar782);


//_________________________________________________%____________________________________________++

//Defina aqui as configuraçoes
$arquivo7821 = "exemplo.txt";   // Arquivo para abrir
$procurar7821 = ",'";   // Palavra que sera substituida
$colocar7821 = "";

//Obtem o conteudo do arquivo
$obter7821 = file_get_contents($arquivo7821);
$novo7821 = str_replace($procurar7821, $colocar7821, $obter7821);



//Grava o novo texto (modificado) no arquivo
$gravar7821 = fopen($arquivo7821, "w");
fwrite($gravar7821, $novo7821);
fclose($gravar7821);


//________________________________________________string i____________________________________________________

//Defina aqui as configuraçoes
$arquivo44 = "exemplo.txt";   // Arquivo para abrir
$procurar44 = "of integer;";   // Palavra que sera substituida
$colocar44 = "   \$suavariavel;//delete o que ficou atras do sifrao";
//Obtem o conteudo do arquivo
$obter44 = file_get_contents($arquivo44);
$novo44 = str_replace($procurar44, $colocar44, $obter44);



//Grava o novo texto (modificado) no arquivo
$gravar44 = fopen($arquivo44, "w");
fwrite($gravar44, $novo44);
fclose($gravar44);

//________________________________________________string c____________________________________________________

//Defina aqui as configuraçoes
$arquivo440 = "exemplo.txt";   // Arquivo para abrir
$procurar440 = "of char;";   // Palavra que sera substituida
$colocar440 = "   \$suavariavel;//delete o que ficou atras de int";
//Obtem o conteudo do arquivo
$obter440 = file_get_contents($arquivo440);
$novo440 = str_replace($procurar440, $colocar440, $obter440);



//Grava o novo texto (modificado) no arquivo
$gravar440 = fopen($arquivo440, "w");
fwrite($gravar440, $novo440);
fclose($gravar440);

//________________________________________________switch____________________________________________________

//Defina aqui as configuraçoes
$arquivo444 = "exemplo.txt";   // Arquivo para abrir
$procurar444 = "case";   // Palavra que sera substituida
$colocar444 = "switch(SUAVARIAVEL){/*nao se esqueça de fechar a chave no final.
Quando aparecer algo como: ['1':] nessa funçao, troque por [case '1':] e delete o que ficou aqui =>*/";

//Obtem o conteudo do arquivo
$obter444 = file_get_contents($arquivo444);
$novo444 = str_replace($procurar444, $colocar444, $obter444);



//Grava o novo texto (modificado) no arquivo
$gravar444 = fopen($arquivo444, "w");
fwrite($gravar444, $novo444);
fclose($gravar444);




//________________________________________________if then____________________________________________________

//Defina aqui as configuraçoes
$arquivo44444 = "exemplo.txt";   // Arquivo para abrir
$procurar44444 = "Then";   // Palavra que sera substituida
$colocar44444 = "";
                            

//Obtem o conteudo do arquivo
$obter44444 = file_get_contents($arquivo44444);
$novo44444 = str_replace($procurar44444, $colocar44444, $obter44444);



//Grava o novo texto (modificado) no arquivo
$gravar44444 = fopen($arquivo44444, "w");
fwrite($gravar44444, $novo44444);
fclose($gravar44444);


//________________________________________________while do____________________________________________________

//Defina aqui as configuraçoes
$arquivo444443 = "exemplo.txt";   // Arquivo para abrir
$procurar444443 = "do";   // Palavra que sera substituida
$colocar444443 = "";
                            

//Obtem o conteudo do arquivo
$obter444443 = file_get_contents($arquivo444443);
$novo444443 = str_replace($procurar444443, $colocar444443, $obter444443);



//Grava o novo texto (modificado) no arquivo
$gravar444443 = fopen($arquivo444443, "w");
fwrite($gravar444443, $novo444443);
fclose($gravar444443);



//________________________________________________integer variavel____________________________________________________

//Defina aqui as configuraçoes
$arquivo80 = "exemplo.txt";   // Arquivo para abrir
$procurar80 = ": integer;";   // Palavra que sera substituida
$colocar80 = ";";
                            

//Obtem o conteudo do arquivo
$obter80 = file_get_contents($arquivo80);
$novo80 = str_replace($procurar80, $colocar80, $obter80);



//Grava o novo texto (modificado) no arquivo
$gravar80 = fopen($arquivo80, "w");
fwrite($gravar80, $novo80);
fclose($gravar80);



//________________________________________________int boolean variavel____________________________________________________

//Defina aqui as configuraçoes
$arquivo8009 = "exemplo.txt";   // Arquivo para abrir
$procurar8009 = ": boolean;";   // Palavra que sera substituida
$colocar8009 = ";";
                            

//Obtem o conteudo do arquivo
$obter8009 = file_get_contents($arquivo8009);
$novo8009 = str_replace($procurar8009, $colocar8009, $obter8009);



//Grava o novo texto (modificado) no arquivo
$gravar8009 = fopen($arquivo8009, "w");
fwrite($gravar8009, $novo8009);
fclose($gravar8009);



//________________________________________________int  real variavel____________________________________________________

//Defina aqui as configuraçoes
$arquivo800 = "exemplo.txt";   // Arquivo para abrir
$procurar800 = ": real;";   // Palavra que sera substituida
$colocar800 = ";";
                            

//Obtem o conteudo do arquivo
$obter800 = file_get_contents($arquivo800);
$novo800 = str_replace($procurar800, $colocar800, $obter800);



//Grava o novo texto (modificado) no arquivo
$gravar800 = fopen($arquivo800, "w");
fwrite($gravar800, $novo800);
fclose($gravar800);

//________________________________________________char variavel____________________________________________________

//Defina aqui as configuraçoes
$arquivo801 = "exemplo.txt";   // Arquivo para abrir
$procurar801 = ": char;";   // Palavra que sera substituida
$colocar801 = ";";
                            

//Obtem o conteudo do arquivo
$obter801 = file_get_contents($arquivo801);
$novo801 = str_replace($procurar801, $colocar801, $obter801);



//Grava o novo texto (modificado) no arquivo
$gravar801 = fopen($arquivo801, "w");
fwrite($gravar801, $novo801);
fclose($gravar801);

//________________________________________________var____________________________________________________

//Defina aqui as configuraçoes
$arquivo801 = "exemplo.txt";   // Arquivo para abrir
$procurar801 = "Var ";   // Palavra que sera substituida
$colocar801 = "\$";
                            

//Obtem o conteudo do arquivo
$obter801 = file_get_contents($arquivo801);
$novo801 = str_replace($procurar801, $colocar801, $obter801);



//Grava o novo texto (modificado) no arquivo
$gravar801 = fopen($arquivo801, "w");
fwrite($gravar801, $novo801);
fclose($gravar801);

//________________________________________________var____________________________________________________

//Defina aqui as configuraçoes
$arquivo8011 = "exemplo.txt";   // Arquivo para abrir
$procurar8011 = "var ";   // Palavra que sera substituida
$colocar8011 = "\$";
                            

//Obtem o conteudo do arquivo
$obter8011 = file_get_contents($arquivo8011);
$novo8011 = str_replace($procurar8011, $colocar8011, $obter8011);



//Grava o novo texto (modificado) no arquivo
$gravar8011 = fopen($arquivo8011, "w");
fwrite($gravar8011, $novo8011);
fclose($gravar8011);

//________________________________________________uses____________________________________________________

//Defina aqui as configuraçoes
$arquivo80112 = "exemplo.txt";   // Arquivo para abrir
$procurar80112 = "uses";   // Palavra que sera substituida
$colocar80112 = "/*Delete essa linha*/";
                            

//Obtem o conteudo do arquivo
$obter80112 = file_get_contents($arquivo80112);
$novo80112 = str_replace($procurar80112, $colocar80112, $obter80112);



//Grava o novo texto (modificado) no arquivo
$gravar80112 = fopen($arquivo80112, "w");
fwrite($gravar80112, $novo80112);
fclose($gravar80112);

//________________________________________________ClrScr____________________________________________________

//Defina aqui as configuraçoes
$arquivo801123 = "exemplo.txt";   // Arquivo para abrir
$procurar801123 = "ClrScr;";   // Palavra que sera substituida
$colocar801123 = "";
                            

//Obtem o conteudo do arquivo
$obter801123 = file_get_contents($arquivo801123);
$novo801123 = str_replace($procurar801123, $colocar801123, $obter801123);



//Grava o novo texto (modificado) no arquivo
$gravar801123 = fopen($arquivo801123, "w");
fwrite($gravar801123, $novo801123);
fclose($gravar801123);

//________________________________________________variavel = (n1+n2)____________________________________________________

//Defina aqui as configuraçoes
$arquivo8011234 = "exemplo.txt";   // Arquivo para abrir
$procurar8011234 = "= (";   // Palavra que sera substituida
$colocar8011234 = "= /*delete o parenteses que fecha =>*/";
                            

//Obtem o conteudo do arquivo
$obter8011234 = file_get_contents($arquivo8011234);
$novo8011234 = str_replace($procurar8011234, $colocar8011234, $obter8011234);



//Grava o novo texto (modificado) no arquivo
$gravar8011234 = fopen($arquivo8011234, "w");
fwrite($gravar8011234, $novo8011234);
fclose($gravar8011234);

//________________________________________________variavel = (n1+n2)____________________________________________________

//Defina aqui as configuraçoes
$arquivo80112345 = "exemplo.txt";   // Arquivo para abrir
$procurar80112345 = "=(";   // Palavra que sera substituida
$colocar80112345 = "= /*delete o parenteses que fecha =>*/";
                            

//Obtem o conteudo do arquivo
$obter80112345 = file_get_contents($arquivo80112345);
$novo80112345 = str_replace($procurar80112345, $colocar80112345, $obter80112345);



//Grava o novo texto (modificado) no arquivo
$gravar80112345 = fopen($arquivo80112345, "w");
fwrite($gravar80112345, $novo80112345);
fclose($gravar80112345);



?>













</head>
<body bgcolor = "whitegraw">
</body>
</html>
