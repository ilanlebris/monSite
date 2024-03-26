<?php 

class View{

    private $title;
    private $content;
    private $router;
    private $menu;

    public function __construct(Router $router){
        $this->router = $router;
        $this->content="";
        $this->menu = array(
            array("https://dev-lebris211.users.info.unicaen.fr/monSite/monSite.php", "Accueil"),
            array("https://dev-lebris211.users.info.unicaen.fr/monSite/monSite.php/action/monParcours", "Mon Parcours"),
            array("https://dev-lebris211.users.info.unicaen.fr/monSite/monSite.php/action/mesExperiences", "Mes Experiences"),
            array("https://dev-lebris211.users.info.unicaen.fr/monSite/monSite.php/action/mesProjets", "Mes Projets"),
            array("https://dev-lebris211.users.info.unicaen.fr/monSite/monSite.php/action/monCV", "Mon CV"),
            array("https://dev-lebris211.users.info.unicaen.fr/monSite/monSite.php/action/contact", "Mes Contact")
        );
    }

    public function render(){
        $menu = $this->prepareMenu();
        $content = <<<EOT
            <!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>$this->title</title>
            </head>
            <body>
                <nav>$menu</nav>
                <h1>$this->title</h1>
                $this->content
            </body>
            </html>
            EOT;
        echo $content;
    }

    public function prepareMenu(){
        $text = "<h2>Menu</h2>
        <ul>";
        foreach ($this->menu as $elt) {
            $text .= "<li><a href=" . $elt[0] . ">" . $elt[1] . "</a>";
        }
        $text .= "</ul>";
        return $text;
    }
        
    public function prepareHomePage(){
        $this->title = "Bienvenu sur mon site";
        $this->content .= <<<EOT
            <figure>
                <span class="profil">
                    <h2>Je suis</h2>
                    <h1>Ilan Le Bris</h1>
                    <h2>Etudiant à la recherche d'une alternance dans le developement web</h2>
                    <span class="apm">
                        <h3>A propos de moi</h3>
                        <p>Ilan Le Bris 20 ans, passionné du web, célibataire et libre comme l'air, pour vous servir.</p>
                    </span>  
                </span>				
                <img src="img/ppmoi.jpg" alt="moi">
            </figure>
            EOT;
        $this->render(); 
    }

    public function prepareMonParcours(){
        $this->title = "Mon parcours";
        $this->content .= <<<EOT
            <figure class="unicaen">
                <span>
                    <h2>Université de Caen</h2>
                    <p></p>
                </span>
                <img src="img/unicaen.jpg" alt="unicaen">
            </figure>
            <figure class="lycee">
                <span>
                    <h2>Lycée Alain Chartier</h2>
                    <p></p>
                    <h2>Lycée Arcisse de Caumont</h2>
                    <p></p>
                </span>
                <img src="img/lycee.jpg" alt="lycee">
            </figure>
            <figure class="college">
                <span>
                    <h2>Collège du Val d'Aure</h2>
                    <p></p>
                </span>
                <img src="img/college.jpg" alt="college">
            </figure>
            EOT;;
        $this->render();       
    }

    public function prepareMesExperiencesPro(){
        $this->title = "Mes experiences professionnels";
        $this->content .= <<<EOT
            <figure class="cormoran">
                <span>
                    <h2>Camping Le Cormoran</h2>
                    <p></p>
                </span>
                <img src="img/cormoran.jpg" alt="cormoran">
            </figure>
            <figure class="central">
                <span>
                    <h2>Restaurant Le Central Isigny sur mer </h2>
                    <p></p>
                </span>
                <img src="img/central.jpg" alt="central">
            </figure>
            EOT;
        $this->render();       
    }
    
    public function prepareMesProjets(){
        $this->title = "Page mes projets";
        $this->content .= "<p></p>";
        $this->render();
    }

    public function prepareMonCV(){
        $this->title = "Mon curriculum vitæ";
        $this->content .= <<<EOT
            <p>Vous pouvez voir et télécharger mon CV ici</p>
            <img src="img/cv.jpg" alt="cv">
            EOT;
        $this->render();
    }

    public function prepareContact(){
        $this->title = "Me contacter";
        $this->content .= <<<EOT
            <figure class="github">
                <img src="img/github.jpg" alt="github">
            </figure>
            <figure class="email">
                <img src="img/email.jpg" alt="email">
            </figure>
            <figure class="linkdin">
                <img src="img/linkdin.jpg" alt="linkdin">
            </figure>
            EOT;
        $this->render();
    }
}