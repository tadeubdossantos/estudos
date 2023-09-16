<?php

//Tenha uma classe simples com somente um método
class Person {
    public function getName() {
        return 'Tadeu';
    }
}

/*Se tenho uma instância de uma classe e só tenho método então posso,
instanciar e chamar esse método imediatamente
*/
var_dump((new Person())->getName());

