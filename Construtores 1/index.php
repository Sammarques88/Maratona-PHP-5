<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtores e Destrutores ex1</title>
</head>
<body>
    <?php 
    class Produto{

        public $nome;
        public $preco;
        public $quantidade;


        public function __construct($nome, $preco, $quantidade){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }
            public function Desconto($pdesc){
 
            echo "O produto com desconto de " . $pdesc . " % = R$"   
            . number_format($this->preco - ($this->preco * ($pdesc/100)),2,',','.') . "<br>";
            echo "<br>";
        }

        public function __destruct(){
            echo "Produto destruído!";
        }
    
    }
    

    $produto1 = new Produto("Boné", 80.00, 1);
    echo "O valor do produto é R$ 80,00";
    echo "<br>";
    echo "<br>";
    $produto1->Desconto(10);
    




    
    ?>
    
</body>
</html>