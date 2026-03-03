<?php
 
    function exercicio01($num1, $num2){
         return "A soma é:" .((int)$num1 + (int)$num2);
    } //fim do exercício01
 
    function subtrair($num1,$num2){
        return "A subtração é:".((int)$num1 - (int)$num2);
    }//fim do método
 
    function multiplicacao($num1,$num2){
        return "A multiplicação é:".((int)$num1 * (int)$num2);
    }//fim da multiplicação
 
    function divisao($num1,$num2){
        if($num2 == 0){
            return "Impossível dividir por zero!";
        }else if($num1 < 0|| $num2 < 0){
            return "Imposssivel dividir por número negativo!";
        }else{
            return "A divisão é:".((int)$num1 / (int)$num2);
        }//fim do if
    }//fim do método
   
    function potencia($num1,$num2){
        if($num2 < 0){
            return "Impossivel calcular a potência";
        }else{
            return "A potência é:".pow((int)$num1, (int)$num2);
        }//fim do if
    }//fim da potencia
 
    function raiz($num1){
        if($num1 < 0){
            return "Impossivel calcular raiz de número negativo!";
        }else{
            return "A raiz é:".sqrt((int)$num1);
        }//fim do if  
    }//fim do método

    //1. Verificar se um ano é bissexto.
    function bissexto($num1){
        if($num1 % 4 == 0 && $num1 % 100 != 0){
            return "O ano é bissexto!";
        }else{
            return "O ano não é bissexto!";
        }
    }//fim do bissexto

    //2.Verificar se um número está entre 100 e 200
    function verificarNumero($inicio, $fim, $num){
        for($i=$inicio;$i <= $fim;$i++){
            if($i == (int) $num){
                return true;
            }
            
        }//fim  do for
        return false;
    }//fim do método

    //4.Leia a idade e verifique se pode votar: >=16 e < 18 facultativo; >= 18 obrigatório;
    function podeVotar($idade){
        if($idade >= 16 && $idade < 18){
            return "Você pode votar (Voto facultativo)!";
        }else if($idade >= 18){
            return "Você TEM que votar!";
        }else{
            return "Você NÃO PRECISA votar";
        }
    }//fim do método

    //5. Leia um número de 1 a 7 e mostre o dia da semana
    function diaDaSemana($num){
        switch($num){
            case 1:
                return "Domingo";
                break;//encerra o switch
            case 2:
                return "Segunda - Feira";
                break;
            case 3:
                return "Terça - Feira";
                break;
            case 4:
                return "Quarta - Feira";
                break;
            case 5:
                return "Quinta - Feira";
                break;
            case 6:
                return "Sexta - Feira";
                break;
            case 7:
                return "Sábado";
                break;
            default:
                return "O número informado é inválido!";
                break;
        }//fim do switch
    }//fim do método

    //6. verificar se uma senha digitada é valida.
    function validarSenha($senha){
        $senhaBD = 1234;
        if($senhaBD == $senha){
            return "Bem-vindo";
        }else{
            return "Senha Invalida!";
        }
    }//fim do método

    // 7. Verificar qual horário é mais tarde
    function horarioMaisTarde($h1, $h2){
    if(strtotime($h1) > strtotime($h2)){
        return "O primeiro horário é mais tarde.";
    } elseif(strtotime($h1) < strtotime($h2)){
        return "O segundo horário é mais tarde.";
    } else {
        return "Os horários são iguais.";
    }
}

// 8. Média de 5 números
function calcularMedia($numeros){
    $soma = array_sum($numeros);
    return $soma / count($numeros);
}

// 9. Somar até ultrapassar 100
function somaAte100($numeros){
    $soma = 0;
    foreach($numeros as $n){
        $soma += $n;
        if($soma > 100){
            return "A soma ultrapassou 100! Soma final: $soma";
        }
    }
    return "A soma não ultrapassou 100. Soma final: $soma";
}



 
 
 
 
 
?>