<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
    <?php 
        //cotação copiada do google
        $cotação = 5.17;
        
        //quanto $$ você tem ?
        $real = $_REQUEST["din"] ?? 0;
        
        //equivalência em dólar
        $dólar = $real / $cotação;
        
        // mostraer resultado
        // echo "Seus R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format($dólar, 2, ",", ".");
        
        //Formatação de moedas com internacionalização!
        //Biblioteca intl (internalization PHP)
        
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        echo "<p>Seus" . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD") . "</p>";
         ?>
<button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
</body>
</html>

