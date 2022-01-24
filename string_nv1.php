<?php
    // variáveis
    
    $nome = "Albert";
    $sobrenome = "Einstein"; 
    
    $separador = " ";
    $separador2 = "-";
    
    
    // manipulando
    
    $nomeCompleto = $nome.$separador.$sobrenome;                        // nome completo
    $tamanhoNomeCompleto = strlen($nome.$sobrenome);                    // quantidade de caracteres do nome sem o separador
    
    $nomeCompletoMaiuscula = strtoupper($nomeCompleto);                 // Nome com letras maiúsculas
    $nomeCompletoMinuscula = strtolower ($nomeCompleto);                // Nome com letras minúsculas
    
    $nomePrimeiraLetraMaiuscula = ucfirst($nomeCompleto);               // Primeira letra em maiúsculas
    $primeiraLetraCadaPalavraMaiuscula = ucwords($nomeCompleto);        // Primeira letra de cada palavra em maiúsculas
    
    
    // Converter palavra em caixa alta para camel-case
    
    $nomeCaixaAlta = "ALBERT";                                          // Nome em caixa alta
    $nomeCamelCase = ucwords(strtolower($nomeCaixaAlta));               // Converter para minúsculo e depois para camel-case
    
    $nomeSeparadoPorCaractere = "albert-einstein";                      // Nome separado por algum caractere
    $nomeCamelCase2 = ucwords($nomeSeparadoPorCaractere, "-");          // Camel-case identificando separador diferente de espaço
    $nomeCamelCase3 = ucwords($nomeSeparadoPorCaractere, $separador2);  // Camel-case identificando separador diferente de espaço, usando variável 
    
    
    // Trocando separador ou algum caractere por outro
    
    $novoNome = str_replace ("-", " ", $nomeSeparadoPorCaractere); // Trocando o separador. De - para espaço. Podemos usar variáveis para informar os separadores
    
        
    // removendo espaços
    
    $texto = " Acacio ";         
    $texto1 = ltrim($texto);        // Remove espaços em branco no inicio da string 
    $texto2 = rtrim($texto);        // Remove espaços em branco no final da string 
    $texto2 = trim($texto);         // Remove espaços em branco no inicio e no final da string
    
    
    // String em array
    
    $arrayNome = str_split($nomeCompleto); // Quebranco a string em array dividindo por caractere    
    $divisaoNome = explode(" ", $nomeCompleto);  // Dividindo a string pelo separador e transformando em um array
    
        
?>
