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


// 11. Classificar pessoa pela idade
function classificarIdade($idade){

    if($idade <= 12){
        return "Criança";
    }
    elseif($idade <= 17){
        return "Jovem";
    }
    elseif($idade <= 59){
        return "Adulto";
    }
    else{
        return "Idoso";
    }

}


// 12. Verificar par ou ímpar
function verificarParImpar($numero){

    if($numero % 2 == 0){
        return "Número PAR";
    }else{
        return "Número ÍMPAR";
    }

}

//10. solicite senhas até que uma válida seja informada
function verificarSenha($senha){

    $senhaCorreta = 1234;

    if($senha == $senhaCorreta){
        return "Senha correta!";
    }else{
        return "Senha errada, tente novamente.";
    }

}

// 1) Leia dois números e exiba o maior
function ex01_maior($a, $b){
    if($a > $b){
        return "Maior: $a";
    } elseif($b > $a){
        return "Maior: $b";
    } else {
        return "Os dois são iguais: $a";
    }
}

// 3) Imprima os números de 1 a 100 com para
function ex03_1a100(){
    $txt = "";
    for($i = 1; $i <= 100; $i++){
        $txt .= $i . "<br>";
    }
    return $txt;
}

// 5) múltiplo de 3 e 5 ao mesmo tempo
function ex05_mult_3e5($n){
    if(($n % 3 == 0) && ($n % 5 == 0)){
        return "É múltiplo de 3 e 5";
    } else {
        return "Não é múltiplo de 3 e 5";
    }
}

// 6) Triângulo
function ex06_triangulo($a, $b, $c){
    if(($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)){
        if(($a == $b) && ($b == $c)){
            return "Forma triângulo: Equilátero";
        } elseif(($a == $b) || ($a == $c) || ($b == $c)){
            return "Forma triângulo: Isósceles";
        } else {
            return "Forma triângulo: Escaleno";
        }
    } else {
        return "Não forma triângulo";
    }
}

// 11) Fatorial com enquanto
function ex11_fatorial($n){
    $fat = 1;
    $i = 1;
    while($i <= $n){
        $fat = $fat * $i;
        $i++;
    }
    return "Fatorial de $n = $fat";
}

// 12) Número 1..7 -> dia (switch)
function ex12_dia_semana($num){
    switch($num){
        case 1: return "Domingo";
        case 2: return "Segunda-feira";
        case 3: return "Terça-feira";
        case 4: return "Quarta-feira";
        case 5: return "Quinta-feira";
        case 6: return "Sexta-feira";
        case 7: return "Sábado";
        default: return "Número inválido!";
    }
}

// 13) Código de produto (1 a 5) -> nome e preço
function ex13_produto($cod){
    switch($cod){
        case 1: return "Produto 1 - R$ 10,00";
        case 2: return "Produto 2 - R$ 15,00";
        case 3: return "Produto 3 - R$ 20,00";
        case 4: return "Produto 4 - R$ 25,00";
        case 5: return "Produto 5 - R$ 30,00";
        default: return "Código inválido!";
    }
}

// 15) Soma de 1 até N com enquanto
function ex15_soma_1aN($n){
    $soma = 0;
    $i = 1;
    while($i <= $n){
        $soma += $i;
        $i++;
    }
    return "Soma de 1 até $n = $soma";
}

// 18) Salário com 50% a mais se passar de 40h
function ex18_salario($horas, $valorHora){
    if($horas <= 40){
        $sal = $horas * $valorHora;
    } else {
        $extras = $horas - 40;
        $sal = (40 * $valorHora) + ($extras * ($valorHora * 1.5));
    }
    return "Salário = R$ " . number_format($sal, 2, ",", ".");
}

// 20) Média de 3 notas e aprovado (>=7)
function ex20_media_aprovado($n1, $n2, $n3){
    $media = ($n1 + $n2 + $n3) / 3;
    if($media >= 7){
        return "Média = $media | Aprovado";
    } else {
        return "Média = $media | Reprovado";
    }
}

// 24) IMC e classificação simples
function ex24_imc($peso, $altura){
    $imc = $peso / ($altura * $altura);

    if($imc < 18.5) $class = "Abaixo do peso";
    elseif($imc < 25) $class = "Peso normal";
    elseif($imc < 30) $class = "Sobrepeso";
    else $class = "Obesidade";

    return "IMC = " . number_format($imc, 2, ",", ".") . " | $class";
}

// 25) Múltiplos de 4 entre 1 e 50
function ex25_mult_4(){
    $txt = "";
    for($i = 1; $i <= 50; $i++){
        if($i % 4 == 0){
            $txt .= $i . "<br>";
        }
    }
    return $txt;
}

// 30) Nota -> Conceito
function ex30_conceito($nota){
    if($nota >= 9) return "A";
    elseif($nota >= 7) return "B";
    elseif($nota >= 5) return "C";
    elseif($nota >= 3) return "D";
    else return "E";
}

// 31) Altura e peso -> IMC e resultado
function ex31_imc($peso, $altura){
    return ex24_imc($peso, $altura);
}

// 36) Tabuada de 1 a 10
function ex36_tabuada($n){
    $txt = "";
    for($i = 1; $i <= 10; $i++){
        $txt .= "$n x $i = " . ($n*$i) . "<br>";
    }
    return $txt;
}

// 40) (mesmo do 12) dia da semana
function ex40_dia($n){
    return ex12_dia_semana($n);
}


?>