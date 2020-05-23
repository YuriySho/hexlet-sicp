<?php

return [
    'title' => 'Числа Фибоначчи через преобразование',
    'description' =>
        'Существует хитрый алгоритм получения чисел Фибоначчи за логарифмическое число шагов. ' .
        'Вспомните трансформацию переменных состояния a и b процесса fib-iter из раздела 1.2.2: a ← a + b и b ← a. ' .
        'Назовем эту трансформацию T и заметим, что n-кратное применение T, начиная с 1 и 0, дает нам пару Fib(n + 1) и Fib(n). ' .
        'Другими словами, числа Фибоначчи получаются путем применения Tⁿ, n-ой степени трансформации T, к паре (1,0). ' .
        'Теперь рассмотрим T как частный случай p = 0, q = 1 в семействе трансформаций Tpq, где Tpq преобразует пару (a,b) по правилу a ← bq + aq + ap, b ← bp + aq. ' .
        "Покажите, что двукратное применение трансформации Tpq равносильно однократному применению трансформации Tp′q′ того же типа, и вычислите p′ и q′ через p и q " .
        'Это дает нам прямой способ возводить такие трансформации в квадрат, и таким образом, мы можем вычислить Tⁿ с помощью последовательного возведения в квадрат, как в процедуре fast-expt. ' .
        'Используя все эти идеи, завершите следующую процедуру, которая дает результат за логарифмическое число шагов:'
];
