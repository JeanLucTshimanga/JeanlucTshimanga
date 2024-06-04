<?php
class FootballClub {
    protected $name;
    protected $stadium;
    protected $players;
    protected $president;
    protected $coach;
    protected $titles;
    protected $composition;

    public function __construct($name, $stadium, $players, $president, $coach, $titles, $composition) {
        $this->name = $name;
        $this->stadium = $stadium;
        $this->players = $players;
        $this->president = $president;
        $this->coach = $coach;
        $this->titles = $titles;
        $this->composition = $composition;
    }

    public function getName() {
        return $this->name;
    }

    public function getName_staduim() {
        return $this->stadium;
    }

    public function getNames_players() {
        return $this->players;
    }

    public function getName_president() {
        return $this->president;
    }

    public function getName_of_coach() {
        return $this->coach;
    }

    public function getNumbers_tiltles() {
        return $this->titles;
    }

    public function getComposition() {
        return $this->composition;
    }
}

$team1 = new FootballClub("Manchester City", "Etihad Stadium", ["Kevin De Bruyne", "Erling Haaland", "Jack Grealish"], "Khaldoon Al Mubarak", "Pep Guardiola", 7, "4-3-3");
echo "Nom de l'équipe : ".$team1->getName()."\n";
echo "Nom du stade : ".$team1->getName_staduim()."\n";
echo "Nombre de joueurs : ".count($team1->getNames_players())."\n";
echo " Nom du Président : ".$team1->getName_president()."\n";
echo " Nom du coach : ".$team1->getName_of_coach()."\n";
echo " Nombres de titre : ".$team1->getNumbers_tiltles()."\n";
echo " Composition de l'équipe : ".$team1->getComposition()."\n";
echo " Joueurs : ".implode(",",$team1->getNames_players())."\n";

// ... Ajoutez d'autres équipes ici si besoin ...
?>