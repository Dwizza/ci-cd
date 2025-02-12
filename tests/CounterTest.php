<?php
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase {
    public function testCounterIncrements() {
        $file = './counter.txt';

        // Simuler une lecture et incrémentation
        $count = file_exists($file) ? (int)file_get_contents($file) : 0;
        $newCount = $count + 1;

        // Écrire le nouveau compteur
        file_put_contents($file, $newCount);

        // Vérifier que le fichier contient le bon nombre
        $this->assertEquals($newCount, (int)file_get_contents($file));
    }
}
?>
