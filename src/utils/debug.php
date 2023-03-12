<?php

function dump($params){
    echo('
    <div style ="
    display:inline-block;
    background-color: gray;
    border:1px solid darkgray;
    padding:10px;
    ">
    <pre>
    ');
    print_r($params);
    echo ('</pre></div></br>');
}
