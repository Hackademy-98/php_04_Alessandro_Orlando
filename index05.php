// ES. 2:
// Siamo in guerra!
// Creare una classe Esercito, che sarà costituita da una Difesa e da un Attacco.
// Entrambe le classi si estenderanno a loro volta e avranno i rispettivi metodi: date sfoggio alla vostra fantasia!

// Esempio: 
// ATTACCO: Fanteria, cavalleria, arcieri, catapulte
// DIFESA: Fossato, fortezza, mura di cinta ecc..
// Creare quindi degli oggetti di classe esercito che possano attaccare o difendere utilizzando i metodi delle diverse classi create

<?php
// 1.Definisci una classe 'Esercito' con due proprietà: 'attacco' e 'difesa'
class Esercito{
    public $attacco;
    public $difesa;

    // 2.Il costruttore accetta due argomenti, che sono oggetti delle classi che estendono 'Attacco' e 'Difesa'
    public function __construct(Attacco $attacco,Difesa $difesa){
        $this->attacco = $attacco;
        $this->difesa = $difesa;
    }
}

// 3.Definisci una classe astratta 'Attacco' con un metodo astratto 'attacco'
abstract class Attacco{
    abstract public function attacco();
}

// 4.Le classi 'Soldati', 'Rapaci', 'Maghi', e 'Cannone' estendono 'Attacco' e implementano il metodo 'attacco'
class Soldati extends Attacco{
    public function attacco(){
        echo "Salireee!\n";
    }
}
class Rapaci extends Attacco{
    public function attacco(){
        echo "Volare! \n";
    }
}
class Maghi extends Attacco{
    public function attacco(){
        echo "Magie all'azione! \n";
    }
}
class Cannone extends Attacco{
    public function attacco(){
        echo "Bomboneee! \n";
    }
}

// 5.Definisci una classe astratta 'Difesa' con un metodo astratto 'Difesa'
abstract class Difesa{
    abstract public function Difesa();
}

// 6.Le classi 'Canale', 'Fortino', 'Muraglia', e 'Lava' estendono 'Difesa' e implementano il metodo 'Difesa'
class Canale extends Difesa{
    public function Difesa(){
        echo "Canale lavico \n";
    }
}
class Fortino extends Difesa{
    public function Difesa(){
        echo "Che nessuno si avvicini! \n";
    }
}
class Muraglia extends Difesa{
    public function Difesa(){
        echo "Fuochi d'artificio in azione \n";
    }
}
class Lava extends Difesa{
    public function Difesa(){
        echo "Lava a volontà \n";
    }
}

// 7.Crei un nuovo oggetto 'Esercito', passando nuovi oggetti delle classi 'Cannone' e 'Fortino' al costruttore
$esercito = new Esercito(new Cannone(), new Fortino());

// 8.Infine, chiami i metodi 'attacco' e 'difesa' sull'oggetto 'Esercito'
$esercito->attacco->attacco();
$esercito->difesa->difesa();

var_dump($esercito);

?>