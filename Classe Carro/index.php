<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Carro</title>
</head>
<body>
    <?php 
    class Carro {
    //Atributos
    
    public $modelo;
    public $ano;
    public $cor;
    public $preco;

    public function __construct($modelo, $ano, $cor, $preco){
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->preco = $preco;
    }
        function exibirModelo(){
            echo "Modelo: " . $this->modelo . "<br>";
        }

        function exibirAno(){
            echo "Ano: " . $this->ano . "<br>";
        }

        function exibirCor(){
            echo "Cor: " .  $this->cor . "<br>";
        }

        function exibirPreco(){
            echo "Preço: R$ " . $this->preco . "<br>";
        }
    

    

    function exibirDetalhes(){
    $this->exibirModelo();
    $this->exibirAno();
    $this->exibirCor();
    $this->exibirPreco();

    }
    
}


$carro1 = new Carro("Cooper", 2012, "Azul", number_format(65000, 2,',','.'));

$carro1->exibirDetalhes();

 

  
    ?>
    
</body>
</html>