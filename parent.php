<?php

class Avo{

}

class Pai extends Avo{

}

class Filho extends Pai{
    function imprime(){
        print_r(get_parent_class(__CLASS__));
    }
}

(new Filho())->imprime();