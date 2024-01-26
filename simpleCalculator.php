<?php
function add ($arg1, $arg2)
{
    return $arg1 + $arg2;
}


function subtract ($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function multiply ($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function divide ($arg1, $arg2)
{
    if ($arg2 == 0) {
        return 'Ошибка деления на 0';
    }
    return $arg1 / $arg2;
}

function calculate ($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return add ($arg1, $arg2);
        case '-':
            return subtract ($arg1, $arg2);
        case '*':
            return multiply ($arg1, $arg2);
        case '/':
            return divide ($arg1, $arg2);
        default:
            return 'Ошибка ввода данных';
    }
}


