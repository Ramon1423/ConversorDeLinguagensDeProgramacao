<html>
<head>
<?php


//_____________________________________________________#include <stdio.h>_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "#include <stdio.h>";   // Palavra que sera substituida
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
$procurar2 = "int main(";   // Palavra que sera substituida
$colocar2 = "public static void main(String[]args){ 
              Scanner entrada = newScanner(System.in); /* *///delete o que sobrou aqui => ";
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
$procurar3 = "scanf(\"%i\",";   // Palavra que sera substituida
$colocar3 = "variavel = entrada.nextInt(); /**///Ponha o nome de sua variavel la tras(sem o '&' caso tenha)... =>";

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
$colocar4 = "variavel = entrada.nextFloat(); /**///Ponha o nome de sua variavel la tras(sem o '&' caso tenha)... =>";

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
$colocar5 = "variavel = entrada.nextLine(); /**///Ponha o nome de sua variavel la tras(sem o '&' caso tenha)... =>";

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
$colocar6 = "System.out.printf";

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
$colocar7 = "System.out.println(\"Press Enter to continue...\");
             System.in.read();";

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
$colocar78 = "System.exit(0);";

//Obtem o conteudo do arquivo
$obter78 = file_get_contents($arquivo78);
$novo78 = str_replace($procurar78, $colocar78, $obter78);



//Grava o novo texto (modificado) no arquivo
$gravar78 = fopen($arquivo78, "w");
fwrite($gravar78, $novo78);
fclose($gravar78);

//_________________________________________________%____________________________________________

//Defina aqui as configuraçoes
$arquivo788 = "exemplo.txt";   // Arquivo para abrir
$procurar788 = "%i";   // Palavra que sera substituida
$colocar788 = "\"+/*sua variavel*/+\"/*delete o nome da sua variavel e alguma vírgula que sobrar*/";

//Obtem o conteudo do arquivo
$obter788 = file_get_contents($arquivo788);
$novo788 = str_replace($procurar788, $colocar788, $obter788);



//Grava o novo texto (modificado) no arquivo
$gravar788 = fopen($arquivo788, "w");
fwrite($gravar788, $novo788);
fclose($gravar788);

//_________________________________________________%____________________________________________

//Defina aqui as configuraçoes
$arquivo7881 = "exemplo.txt";   // Arquivo para abrir
$procurar7881 = "%c";   // Palavra que sera substituida
$colocar7881 = "\"+/*sua variavel*/+\"";

//Obtem o conteudo do arquivo
$obter7881 = file_get_contents($arquivo7881);
$novo7881 = str_replace($procurar7881, $colocar7881, $obter7881);



//Grava o novo texto (modificado) no arquivo
$gravar7881 = fopen($arquivo7881, "w");
fwrite($gravar7881, $novo7881);
fclose($gravar7881);

//_________________________________________________%____________________________________________

//Defina aqui as configuraçoes
$arquivo78812 = "exemplo.txt";   // Arquivo para abrir
$procurar78812 = "%s";   // Palavra que sera substituida
$colocar78812 = "\"+/*sua variavel*/+\"";

//Obtem o conteudo do arquivo
$obter78812 = file_get_contents($arquivo78812);
$novo78812 = str_replace($procurar78812, $colocar78812, $obter78812);



//Grava o novo texto (modificado) no arquivo
$gravar78812 = fopen($arquivo78812, "w");
fwrite($gravar78812, $novo78812);
fclose($gravar78812);

//_________________________________________________%____________________________________________

//Defina aqui as configuraçoes
$arquivo788123 = "exemplo.txt";   // Arquivo para abrir
$procurar788123 = "%f";   // Palavra que sera substituida
$colocar788123 = "\"+/*sua variavel*/+\"";

//Obtem o conteudo do arquivo
$obter788123 = file_get_contents($arquivo788123);
$novo788123 = str_replace($procurar788123, $colocar788123, $obter788123);



//Grava o novo texto (modificado) no arquivo
$gravar788123 = fopen($arquivo788123, "w");
fwrite($gravar788123, $novo788123);
fclose($gravar788123);

//_________________________________________________%____________________________________________

//Defina aqui as configuraçoes
$arquivo7881234 = "exemplo.txt";   // Arquivo para abrir
$procurar7881234 = "%d";   // Palavra que sera substituida
$colocar7881234 = "\"+/*sua variavel*/+\"";

//Obtem o conteudo do arquivo
$obter7881234 = file_get_contents($arquivo7881234);
$novo7881234 = str_replace($procurar7881234, $colocar7881234, $obter7881234);



//Grava o novo texto (modificado) no arquivo
$gravar7881234 = fopen($arquivo7881234, "w");
fwrite($gravar7881234, $novo7881234);
fclose($gravar7881234);
?>













</head>
<body bgcolor = "whitegraw">
</body>
</html>