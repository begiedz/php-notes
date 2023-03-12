<?php

function dump($params){
    echo ('
    <div style ="
    display: inline-block;
    background-color: gray;
    border: 1px solid black;
    padding: 10px;
    margin: 2px;
    ">
    <pre>
    ');

    print_r($params);

    echo ('</pre></div></br>');
}
