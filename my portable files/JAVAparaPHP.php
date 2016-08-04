<html>
<head>
<?php

//TERMINEI ESSA PROBABILIDADE AS 22:22, VERSÃO 2.22!! :)

//_____________________________________________________#include <stdio.h>_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "import java.util.Scanner";   // Palavra que sera substituida
$colocar1 = "<html>
<head>
<title>Ramon Moratori</title>
</head>
<body>
<?php//delete tudo que tiver antes de <html>..........
//ATENCAO: TODA VEZ QUE UMA VARIAVEL APARECER,COLOQUE UM \$(SIFRAO) ANTES DO NOME => \$VARIAVEL.........";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para PHP... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);


//___________________________________________________int main()_________________________________________________

//Defina aqui as configuraçoes
$arquivo2 = "exemplo.txt";   // Arquivo para abrir
$procurar2 = "public static ";   // Palavra que sera substituida
$colocar2 = "//";
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
$procurar3 = ".nextInt();";   // Palavra que sera substituida
$colocar3 = "    /*delete o que sobrou ali atras <=*/\$variavel = readline(\" \");//substitua o nome variavel ali atras <= pelo nome da sua variavel <=........";

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
$procurar4 = ".nextFloat();";   // Palavra que sera substituida
$colocar4 = "    /*delete o que sobrou ali atras <=*/\$variavel = readline(\" \");//substitua o nome variavel ali atras <= pelo nome da sua variavel <=........";

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
$procurar5 = ".nextLine();";   // Palavra que sera substituida
$colocar5 = "    /*delete o que sobrou ali atras <=*/\$variavel = readline(\" \");//substitua o nome variavel ali atras <= pelo nome da sua variavel <=........";

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
$procurar6 = "System.out.printf";   // Palavra que sera substituida
$colocar6 = "echo/*delete os parenteses*/";

//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);

//_________________________________________________print______________________________________________________

//Defina aqui as configuraçoes
$arquivo61 = "exemplo.txt";   // Arquivo para abrir
$procurar61 = "System.out.print";   // Palavra que sera substituida
$colocar61 = "echo/*delete os parenteses*/";

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
$colocar62 = "echo/*delete os parenteses*/";

//Obtem o conteudo do arquivo
$obter62 = file_get_contents($arquivo62);
$novo62 = str_replace($procurar62, $colocar62, $obter62);



//Grava o novo texto (modificado) no arquivo
$gravar62 = fopen($arquivo62, "w");
fwrite($gravar62, $novo62);
fclose($gravar62);

//_________________________________________________Scanner____________________________________________________

//Defina aqui as configuraçoes
$arquivo7 = "exemplo.txt";   // Arquivo para abrir
$procurar7 = "Scanner";   // Palavra que sera substituida
$colocar7 = "//Apague o que sobrou dessa linha";

//Obtem o conteudo do arquivo
$obter7 = file_get_contents($arquivo7);
$novo7 = str_replace($procurar7, $colocar7, $obter7);



//Grava o novo texto (modificado) no arquivo
$gravar7 = fopen($arquivo7, "w");
fwrite($gravar7, $novo7);
fclose($gravar7);

//________________________________________________system(PAUSE)________________________________________________

//Defina aqui as configuraçoes
$arquivo8 = "exemplo.txt";   // Arquivo para abrir
$procurar8 = "System.in.read();";   // Palavra que sera substituida
$colocar8 = "";

//Obtem o conteudo do arquivo
$obter8 = file_get_contents($arquivo8);
$novo8 = str_replace($procurar8, $colocar8, $obter8);



//Grava o novo texto (modificado) no arquivo
$gravar8 = fopen($arquivo8, "w");
fwrite($gravar8, $novo8);
fclose($gravar8);

//________________________________________________return0;________________________________________________

//Defina aqui as configuraçoes
$arquivo833 = "exemplo.txt";   // Arquivo para abrir
$procurar833 = "System.exit(0);";   // Palavra que sera substituida
$colocar833 = "?>
</body>
</html>//DELETE O QUE FICOU DAQUI PARA BAIXO";

//Obtem o conteudo do arquivo
$obter833 = file_get_contents($arquivo833);
$novo833 = str_replace($procurar833, $colocar833, $obter833);



//Grava o novo texto (modificado) no arquivo
$gravar833 = fopen($arquivo833, "w");
fwrite($gravar833, $novo833);
fclose($gravar833);

//________________________________________________%________________________________________________

//Defina aqui as configuraçoes
$arquivo8334 = "exemplo.txt";   // Arquivo para abrir
$procurar8334 = "\"+";   // Palavra que sera substituida
$colocar8334 = "{\$VARIAVEL}/*ponha o nome da sua variavel e delete o nome dela aqui na frente =>*/";

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
$procurar83345 = "+\"";   // Palavra que sera substituida
$colocar83345 = "";

//Obtem o conteudo do arquivo
$obter83345 = file_get_contents($arquivo83345);
$novo83345 = str_replace($procurar83345, $colocar83345, $obter83345);



//Grava o novo texto (modificado) no arquivo
$gravar83345 = fopen($arquivo83345, "w");
fwrite($gravar83345, $novo83345);
fclose($gravar83345);











//_____________________________________________________variavel char_______________________________________________________
//Defina aqui as configuraçoes
$arquivo22 = "exemplo.txt";   // Arquivo para abrir
$procurar22 = "char ";   // Palavra que sera substituida
$colocar22 = "\$";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter22 = file_get_contents($arquivo22);
$novo22 = str_replace($procurar22, $colocar22, $obter22);


//Grava o novo texto (modificado) no arquivo
$gravar22 = fopen($arquivo22, "w");
fwrite($gravar22, $novo22);
fclose($gravar22);

//_____________________________________________________variavel int_______________________________________________________
//Defina aqui as configuraçoes
$arquivo32 = "exemplo.txt";   // Arquivo para abrir
$procurar32 = "int ";   // Palavra que sera substituida
$colocar32 = "\$";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter32 = file_get_contents($arquivo32);
$novo32 = str_replace($procurar32, $colocar32, $obter32);


//Grava o novo texto (modificado) no arquivo
$gravar32 = fopen($arquivo32, "w");
fwrite($gravar32, $novo32);
fclose($gravar32);

//_____________________________________________________variavel float_______________________________________________________
//Defina aqui as configuraçoes
$arquivo42 = "exemplo.txt";   // Arquivo para abrir
$procurar42 = "float ";   // Palavra que sera substituida
$colocar42 = "\$";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter42 = file_get_contents($arquivo42);
$novo42 = str_replace($procurar42, $colocar42, $obter42);


//Grava o novo texto (modificado) no arquivo
$gravar42 = fopen($arquivo42, "w");
fwrite($gravar42, $novo42);
fclose($gravar42);

//_____________________________________________________variavel string_______________________________________________________
//Defina aqui as configuraçoes
$arquivo52 = "exemplo.txt";   // Arquivo para abrir
$procurar52 = "[";   // Palavra que sera substituida
$colocar52 = ";[/*Se for uma string, delete os colchetes, se nao, apague essa linha*/";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter52 = file_get_contents($arquivo52);
$novo52 = str_replace($procurar52, $colocar52, $obter52);


//Grava o novo texto (modificado) no arquivo
$gravar52 = fopen($arquivo52, "w");
fwrite($gravar52, $novo52);
fclose($gravar52);

//_____________________________________________________variavel string_______________________________________________________
//Defina aqui as configuraçoes
$arquivo51 = "exemplo.txt";   // Arquivo para abrir
$procurar51 = "string ";   // Palavra que sera substituida
$colocar51 = "\$";   // Palavra que ficara no lugar

//Obtem o conteudo do arquivo
$obter51 = file_get_contents($arquivo51);
$novo51 = str_replace($procurar51, $colocar51, $obter51);


//Grava o novo texto (modificado) no arquivo
$gravar51 = fopen($arquivo51, "w");
fwrite($gravar51, $novo51);
fclose($gravar51);


?>






</head>
<body bgcolor = "whitegraw">
</body>
</html>
