<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Produto Roupa</title>
</head>
<body>
    <?php 
    
    class ProdutoRoupa{

        public $nome;
        private $codigoProduto;
        public $preco;

        public function __construct($nome, $codigoProduto, $preco){
            $this->nome = $nome;
            $this->codigoProduto = $codigoProduto;
            $this->preco = $preco;
        }


        public function exibirNome(){
            echo "Nome: " . $this->nome . "<br>";
        }

        public function exibirCodigoProduto(){
            echo "Código Produto: " . $this->codigoProduto . "<br>";

        }

        public function exibirPreco(){
            echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        }

        public function exibirDetalhes(){
            $this->exibirNome();
            $this->exibirCodigoProduto();
            $this->exibirPreco();
        }

        public function setCodigoProduto($codigoProduto){
            if (
            $this-> codigoProduto == $codigoProduto){
            $this->codigoProduto = $codigoProduto;
        }
            else {
                echo "Código Produto inválido!";
            }

        }

        public function getCodigoProduto(){
            return $this->codigoProduto;
        }
    }

    
        $Produtoroupa1 = new ProdutoRoupa("Jaqueta", "Cod12345", 250.00);
        //Erro ao tentar acessar propriedade privada
        // $Produtoroupa1->codigoProduto; 

        $Produtoroupa1->exibirDetalhes();
        echo "<br>";


        $Produtoroupa1->getCodigoProduto();
        
        echo $Produtoroupa1->getCodigoProduto();
        echo "<br>";
        echo "<br>";
        
        $Produtoroupa1->setCodigoProduto("Cod67890"); //Código invalido
        echo " Código alterado: " . $Produtoroupa1->getCodigoProduto() . "<br>";
        
        echo "<br>";

        $Produtoroupa1->setCodigoProduto("Cod12345");
        echo "Código alterado!" . $Produtoroupa1->setCodigoProduto("Cod67890") . "<br>";
        echo "<br>";


        
        
    
    ?>

    
</body>
</html>