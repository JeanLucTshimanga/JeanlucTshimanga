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

    public function getStadium() {
        return $this->stadium;
    }

    public function getPlayers() {
        return $this->players;
    }

    public function getPresident() {
        return $this->president;
    }

    public function getCoach() {
        return $this->coach;
    }

    public function getTitles() {
        return $this->titles;
    }

    public function getComposition() {
        return $this->composition;
    }
}

$chelsea = new FootballClub(
    "Chelsea", 
    "Stamford Bridge", 
    ["Kepa Arrizabalaga", "Reece James", "Thiago Silva", "Ben Chilwell", "Enzo Fernández", "Mason Mount", "Mykhailo Mudryk", "N'Golo Kanté", "Raheem Sterling", "Kai Havertz", "Nicolas Jackson"], 
    "Todd Boehly", 
    "Mauricio Pochettino", 
    21, 
    "4-3-3"
);

$manchesterCity = new FootballClub(
    "Manchester City", 
    "Etihad Stadium", 
    ["Ederson Moraes", "Kyle Walker", "Ruben Dias", "John Stones", "Nathan Aké", "Rodri", "Kevin De Bruyne", "Bernardo Silva", "Jack Grealish", "Erling Haaland", "Phil Foden"], 
    "Khaldoon Al Mubarak", 
    "Pep Guardiola", 
    8, 
    "4-3-3"
);

function displayTeamInfo($team) {
    echo "## " . $team->getName() . "\n";
    echo "Nom de l'équipe : " . $team->getName() . "\n";
    echo "Nom du stade : " . $team->getStadium() . "\n";
    echo "Nombre de joueurs : " . count($team->getPlayers()) . "\n";
    echo "Nom du Président : " . $team->getPresident() . "\n";
    echo "Nom du coach : " . $team->getCoach() . "\n";
    echo "Nombres de titres : " . $team->getTitles() . "\n";
    echo "Composition de l'équipe : " . $team->getComposition() . "\n";
    echo "Joueurs : " . implode(", ", $team->getPlayers()) . "\n\n";
}

displayTeamInfo($chelsea);
displayTeamInfo($manchesterCity);
?>