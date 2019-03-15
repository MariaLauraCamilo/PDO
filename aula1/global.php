<?php

function carregarClasse($nomeClasse)
{
    if (file_exists('classes/'.$nomeClasse.'.php')){
        require_once 'classes/'.$nomeClasse.'.php';
    }
}