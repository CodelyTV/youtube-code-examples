<?php

$fiber = new Fiber(function(string $initialValue): void {
    echo "🧬 ----- Empieza ejecución de la fibra\n";
    echo "🧬 Valor pasado por argumento: $initialValue\n";
    echo "🧬 -----\n\n";

    $valorDelResume = Fiber::suspend('Suspendida 1 🧬');

    echo "🧬 ----- Empieza primera reanudación de la fibra\n";
    echo "🧬 Valor del resume: $valorDelResume\n";
    echo "🧬 -----\n\n";

    $valorDelResume2 = Fiber::suspend('Suspendida 2 🧬');

    echo "🧬 ----- Empieza segunda reanudación de la fibra\n";
    echo "🧬 Valor del resume: $valorDelResume2\n";
    echo "🧬 -----\n\n";
});

echo "🌍 Arrancando TODO!\n";
$valorDeLaPrimeraSuspension = $fiber->start("Valor inicial 🌍");
echo "🌍 Vamos a reanudar la fibra. MSG: $valorDeLaPrimeraSuspension!\n";
$valorDeLaSegundaSuspension = $fiber->resume('Esto viene del 🌍');
echo "🌍 La segunda suspensión nos ha dicho que $valorDeLaSegundaSuspension!\n";

echo "🌍 FIN";
