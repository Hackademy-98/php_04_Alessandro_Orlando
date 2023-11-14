// ES. 1:
// Creare un Computer con Dependency Injection e Object Composition, composto da 
// RAM
// ROM
// Scheda Video
// altro

<?php
// 1.Definisco una classe astratta 'Computer' con un metodo astratto 'operazione'
abstract class Computer {
    abstract public function operazione();
}
// 2.La classe 'RAM' estende 'Computer' e implementa il metodo 'operazione'
class RAM extends Computer {
    public function operazione() {
        return "RAM";
    }
}
// 3.La classe 'ROM' estende 'Computer' e implementa il metodo 'operazione'
class ROM extends Computer {
    public function operazione() {
        return "ROM";
    }
}
// 4.La classe 'SchedaVideo' estende 'Computer' e implementa il metodo 'operazione'
class SchedaVideo extends Computer {
    public function operazione() {
        return "Scheda video";
    }
}
// 5.La classe 'Computer' contiene tre proprietà: 'ram', 'rom', e 'schedaVideo'
class Computer {
    public $ram;
    public $rom;
    public $schedaVideo;
    // 6.Il costruttore accetta tre argomenti, che sono oggetti delle classi che estendono 'Computer'
    public function __construct(Computer $ram, Computer $rom, Computer $schedaVideo) {
        $this->ram = $ram;
        $this->rom = $rom;
        $this->schedaVideo = $schedaVideo;
    }
    // 7.Il metodo 'avvia' chiama il metodo 'operazione' su ogni Computer
    public function avvia() {
        echo $this->ram->operazione();
        echo "\n";
        echo $this->rom->operazione();
        echo "\n";
        echo $this->schedaVideo->operazione();
    }
}
// 8.Creo un nuovo oggetto 'Computer', passando nuovi oggetti delle classi 'RAM', 'ROM', e 'SchedaVideo' al costruttore
$computer = new Computer(new RAM(), new ROM(), new SchedaVideo());
// 9.Infine, chiami il metodo 'avvia' sull'oggetto 'Computer'
$computer->avvia();

?>