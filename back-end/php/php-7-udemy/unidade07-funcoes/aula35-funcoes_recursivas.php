<?php
    
    //Exemplo de uma hierarquia organizacional
    //Podendo também ser aplicado para hierarquia de diretórios de pastas

    //Array que contém em cada posição um array e assim sucessivamente
    $hierarquia = array(
        //Incio: CEO
        array(            
            "nome_cargo" => "CEO",
            "subordinados" => array(
            //Inicio: Diretor Comercial
            array(
                "nome_cargo" => "Diretor Comercial",
                "subordinados" => array(
                    //Inicio: Gerente de Vendas
                    array(
                        "nome_cargo" => "Gerente de Vendas"  
                    )
                    //Fim: Gerente de Vendaas
                )
                    //Fim: Gerente de Vendas
            ), 
            //Fim: Diretor Comercial
            
            //Inicio: Diretor Finânceiro
            array(              
                "nome_cargo" => "Diretor Finânceiro",
                "subordinados" => array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        "nome_cargo" => "Gerente de Pagamentos",
                        "subordinados" => array(
                            //Inicio: Supervisor de Contas a Pagar
                            array(
                                "nome_cargo" => "Supervisor de Pagamentos" 
                            )
                            //Fim: Supervisor de Contas a Pagar                        
                        )
                    ),
                    //Fim: Gerente de Contas a Pagar
                    
                    //Inicio: Gerente de Compras                    
                    array(
                        "nome_cargo" => "Gerente de Compras",
                        "subordinados" => array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                "nome_cargo" => "Supervisor de Suprimentos"
                            )
                            //Fim: Supervisor de Suprimentos
                        )
                    )
                    //Fim: Gerente de Compras
                )                
            )
            //Fim: Diretor Finânceiro            
        )   
    )
    //Fim: CEO
    );

    //Função para exibir os cargos
    function exibe($cargos){
        
        $html = "<ul>";
        
        foreach ($cargos as $cargo){
            
            $html .= "<li>";
            
            $html .= $cargo["nome_cargo"];
            
            //Se houver subordinados em relação ao cargo atual exiba-os
            if (isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0){
                
                $html .= exibe($cargo["subordinados"]); //Recursividade da função (Pois está endo chamada dentro dela mesma)
            }
            
            $html .= "</li>";
        }
        
        $html .= "</ul>";
        return $html;
    }

    echo exibe($hierarquia);
?>  


    
    