<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('calculator/add/{a}/{b}', 'Od3n\Calculator\CalculatorController@add');
Route::get('calculator/subtract/{a}/{b}', 'Od3n\Calculator\CalculatorController@subtract');