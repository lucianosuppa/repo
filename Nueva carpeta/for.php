<?php

$lista = array(4,5,8,1,3);

for ($i=0;$i<sizeof($lista);$i++)
{
    for ($j=0;$j<sizeof($lista);$j++)
    {
        if ($lista[$i] < $lista[$j])
        {
            $c = $lista[$i];
            $lista[$i] = $lista[$j];
            $lista[$j] = $c;
        }
    }
}

class Nodo
{
    public $next;
    public $valor;

    public function __construct($valor, $next)
    {
        $this->next = $next;
        $this->valor = $valor;
    }

    public function imprimirLista(Nodo $lista)
    {
        while ($lista != null)
        {
            echo $lista->valor . " , ";
            $lista = $lista->next;
        }
        echo "\n";
    }

    public function contar_elementos(Nodo $nodo)
    {
        $c = 1;
        while ($nodo->next != null)
        {
            $c++;
            $nodo = $nodo->next;
        }
        return $c;
    }

    public function dame_elemento_numero (Nodo $nodo, $elemento)
    {
        $c = 0;
        while ($nodo != null)
        {
            if ($c == $elemento)
            {
                return $nodo->valor;
            }
            $c++;
            $nodo = $nodo->next;
        }
    }

    public function ordenar (Nodo $nodo)
    {
        for ($i=0;$i<$this->contar_elementos($nodo);$i++)
        {
            for ($j=0;$j<$this->contar_elementos($nodo);$j++)
            {
                if ($this->dame_elemento_numero($nodo, $i) < $this->dame_elemento_numero($nodo, $j))
                {
                    $c = $this->dame_elemento_numero($nodo, $i);
                    $nodo->valor = $this->dame_elemento_numero($nodo, $i);
                    echo $nodo->valor;
                }
                $nodo = $nodo->next;
            }
        }
    }

    public function bucle(Nodo $lista)
    {
        $ar = array();
        while ($lista != null)
        {
          foreach($ar as $key->$value)
          {
            if ($lista->valor == $value)
            {
                return true;
            }
          }
          $ar[] = $lista->valor;
          $lista = $lista->next;
          return false ;
        }
    }
}

$lista = new Nodo(5, new Nodo(4, new Nodo(1, new Nodo(2, new Nodo(6, null)))));
$lista->imprimirLista($lista);
echo 'Hay ' . $lista->contar_elementos($lista) . ' elementos en la lista.' . "\n";
echo 'En la posicion 3 esta el numero ' . $lista->dame_elemento_numero($lista,3) . "\n";
$lista->ordenar($lista);
$lista->bucle($lista);