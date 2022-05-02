<?php
class Estacionamento{
    private $codigo;
    private $nome;
    private $cidade;
    private $vagas;
    private $situacao;
    private $valorInicial;
    private $valorAdicional;
    private $horaFanquiaInicial;
    private $ativar;
    private $desativar;



public function __construct(int $codigo, string $nome, string $cidade){


        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->cidade=$cidade;


        $this->valorInicial=0;
        $this->valorAdicional=4;
        $this->horaFranquiaInicial=20;



        $this->ativar=false;
        $this->desativar=false;

}

public function cadastro(){
 return $this->codigo;
 return $this->nome;
 return $this->cidade; 

 $this->situacao=$situacao=true;
 $this->ativa=$ativa=true;
 $this->desativar=$desativar=false;

 echo 'cadastrado com sucesso'.PHP_EOL;

}
 


public function situacao_estacionamento()
{
            if(isset($situacao) && $situacao==true){
                $this->ativar=$ativar=true;
                $this->desativar=$desativar=false;
                echo 'Vaga está disponível'.PHP_EOL;
            }
            else{
                $this->situacao=$situacao=false;
                $this->ativar=$ativar=false;
                $this->desativar=$desativar=true;
                echo 'Você Não tem cadastro no estacionamento'.PHP_EOL;

            }
}

public function Pagamento(int $horas, $horaFanquiaInicial){
    if($this->situacao=$situacao=true && $this->ativar=$ativar=true && $this->desativar=$desativar=false)
    {
        $valorInicial=($horas*$horaFanquiaInicial)/2;

        echo "O total a se pagar é". $valorInicial;
        $this->situacao=$situacao=true;
    }
    else{
        echo 'você não tem nenhum registro de vaga disponível aqui'.PHP_EOL;

    }
   
}

public function saida_veiculo(){
    if($this->situacao=$situacao=true && $this->ativar=$ativar=true && $this->desativar=$desativar=false){
       
        $this->situacao=true;
        echo 'carro pode sair'.PHP_EOL;
        
    }
    else{
        echo 'carro não pode sair do estacionamento'.PHP_EOL;
    }
    
}
}