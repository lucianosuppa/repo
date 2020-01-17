<?php

declare(strict_types=1);

// Tipado de entrada
// hvalores por defecto
function prepend_text(string $txt = '', bool $upper = false): string {
   return 'quiero ir el '. $txt;
}

echo prepend_text('123');

die;

$days = [
    'Domingo',
    'Lunes',
    'Martes',
    'Miercoles',
    'Jueves',
    'Viernes',
    'Sabado',
];

$strings = array_values (
    array_filter($days, function ($txt){
        return is_string ($txt);
    })
);

$days = array_map('strtoupper',$strings);

?>


<select>
    <?php for($i=0; $i < count($days); $i++) { ?>
        <option value="<?= $i; ?>"><?= $days[$i]; ?> </option>
    <?php }?>

</select>

/*
<Select>
    <?php foreach($days as $key => $day) { ?>
        <option value="<?= $key ?>"><?= $day ?> </option>
    <?php } ?>

    </select>
*\