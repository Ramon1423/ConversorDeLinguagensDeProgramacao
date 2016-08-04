<html>
<head>
<?php


//_____________________________________________________#include <stdio.h>_______________________________________________________
//Defina aqui as configuraçoes
$arquivo1 = "exemplo.txt";   // Arquivo para abrir
$procurar1 = "<?php";   // Palavra que sera substituida
$colocar1 = "

program Ramon Moratori;
             Begin

// DELETE O QUE FICOU ANTES DE using program;
//delete essa linha toda...PS: se aparecer >variavel = numero;< fora do if, coloque variavel := numero";   // Palavra que ficara no lugar
//ATENCAO: QUANDO APARECER UMA VARIAVEL SOLTA [ VARIAVEL; ] PONHA ANTES DELA A SIGLA (var)

//Obtem o conteudo do arquivo
$obter1 = file_get_contents($arquivo1);
$novo1 = str_replace($procurar1, $colocar1, $obter1);

//Exibe o novo texto (modificado)
echo "o seu código já foi convertido para PASCAL... Por favor abra o arquivo exemplo.txt";

//Grava o novo texto (modificado) no arquivo
$gravar1 = fopen($arquivo1, "w");
fwrite($gravar1, $novo1);
fclose($gravar1);








//__________________________________________________scanf__________________________________________________

//Defina aqui as configuraçoes
$arquivo39 = "exemplo.txt";   // Arquivo para abrir
$procurar39 = "readline(\"";   // Palavra que sera substituida
$colocar39 = "read(/*sua variavel*/); //delete o que sobrou antes e depois de read(variavel);";

//Obtem o conteudo do arquivo
$obter39 = file_get_contents($arquivo39);
$novo39 = str_replace($procurar39, $colocar39, $obter39);



//Grava o novo texto (modificado) no arquivo
$gravar39 = fopen($arquivo39, "w");
fwrite($gravar39, $novo39);
fclose($gravar39);



//_________________________________________________printf______________________________________________________

//Defina aqui as configuraçoes
$arquivo6 = "exemplo.txt";   // Arquivo para abrir
$procurar6 = "echo ";   // Palavra que sera substituida
$colocar6 = "/*feche o parenteses*/writeln";

//Obtem o conteudo do arquivo
$obter6 = file_get_contents($arquivo6);
$novo6 = str_replace($procurar6, $colocar6, $obter6);



//Grava o novo texto (modificado) no arquivo
$gravar6 = fopen($arquivo6, "w");
fwrite($gravar6, $novo6);
fclose($gravar6);



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






//________________________________________________switch____________________________________________________

//Defina aqui as configuraçoes
$arquivo44422 = "exemplo.txt";   // Arquivo para abrir
$procurar44422 = "switch(";   // Palavra que sera substituida
$colocar44422 = "case variavel //delete o que ficou aqui =>";

//Obtem o conteudo do arquivo
$obter44422 = file_get_contents($arquivo44422);
$novo44422 = str_replace($procurar44422, $colocar44422, $obter44422);



//Grava o novo texto (modificado) no arquivo
$gravar44422 = fopen($arquivo44422, "w");
fwrite($gravar44422, $novo44422);
fclose($gravar44422);

//________________________________________________case____________________________________________________

//Defina aqui as configuraçoes
$arquivo444 = "exemplo.txt";   // Arquivo para abrir
$procurar444 = "case";   // Palavra que sera substituida
$colocar444 = " ";

//Obtem o conteudo do arquivo
$obter444 = file_get_contents($arquivo444);
$novo444 = str_replace($procurar444, $colocar444, $obter444);



//Grava o novo texto (modificado) no arquivo
$gravar444 = fopen($arquivo444, "w");
fwrite($gravar444, $novo444);
fclose($gravar444);

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






//___________________________________________________%____________________________________________________________

//Defina aqui as configuraçoes
$arquivo8 = "exemplo.txt";   // Arquivo para abrir
$procurar8 = "\".";   // Palavra que sera substituida
$colocar8 = "\",";
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
$colocar9 = "\",";
//Obtem o conteudo do arquivo
$obter9 = file_get_contents($arquivo9);
$novo9 = str_replace($procurar9, $colocar9, $obter9);



//Grava o novo texto (modificado) no arquivo
$gravar9 = fopen($arquivo9, "w");
fwrite($gravar9, $novo9);
fclose($gravar9);




//___________________________________________________%3____________________________________________________________

//Defina aqui as configuraçoes
$arquivo913 = "exemplo.txt";   // Arquivo para abrir
$procurar913 = ".\"";   // Palavra que sera substituida
$colocar913 = ",\"";
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
$colocar914 = ",\"";
//Obtem o conteudo do arquivo
$obter914 = file_get_contents($arquivo914);
$novo914 = str_replace($procurar914, $colocar914, $obter914);



//Grava o novo texto (modificado) no arquivo
$gravar914 = fopen($arquivo914, "w");
fwrite($gravar914, $novo914);
fclose($gravar914);

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

//________________________________________________return0;________________________________________________

//Defina aqui as configuraçoes
$arquivo83322 = "exemplo.txt";   // Arquivo para abrir
$procurar83322 = "?>";   // Palavra que sera substituida
$colocar83322 = "

Readkey;

End.// DELETE O QUE SOUBROU DAQUI PRA BAIXO";



//Obtem o conteudo do arquivo
$obter83322 = file_get_contents($arquivo83322);
$novo83322 = str_replace($procurar83322, $colocar83322, $obter83322);



//Grava o novo texto (modificado) no arquivo
$gravar83322 = fopen($arquivo83322, "w");
fwrite($gravar83322, $novo83322);
fclose($gravar83322);

?>













</head>
<body bgcolor = "whitegraw">
</body>
</html>
