<?php

namespace Bdloc\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bdloc\AppBundle\Entity\DropSpot;
use \DateTime;

class LoadDropSpotDataData implements FixtureInterface, ContainerAwareInterface
{

	/**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->loadDropSpots($manager);
    }

    private function loadDropSpots(ObjectManager $manager){
	{
		$dropspots = array(
			"Libria", "82 Passage Choiseul", "75002",
			"Telecom Star", "15 Bd de Bonne Nouvelle", "75002",
			"Hypso Reprographie", "53 rue de Montmorency", "75003",
			"BM Pressing", "4 Bis Bd Morland", "75004",
			"Game Cash / CG Paris 5", "21 rue Monge", "75005",
			"Chez Florence", "11 rue Dauphine", "75006",
			"Aux Fleurs du Bac", "69 rue du Bac", "75007",
			"Cordonnerie Serrurerie Grenell", "165 rue de Grenelle", "75007",
			"Clean Pressing", "15 rue Manuel", "75009",
			"Luffy", "35 rue de Clichy", "75009",
			"Les Coteaux de Saumur", "10 rue Bichat", "75010",
			"Magenta Art Deco", "34 Ter rue du Dunkerque", "75010",
			"Baticlean 75", "191 rue de Charonne", "75011",
			"Cala Thé A", "133 rue de Montreuil", "75011",
			"A Livr' Ouvert", "171 Bis Bd Voltaire", "75011",
			"Pressing Boulle", "13 rue Boulle", "75011",
			"B.C.B.G / SARL Fleuve Bleu", "18 rue Jules Valles", "75011",
			"L'Atelier du Trèfles Cadeaux", "13 Bis Avenue Philippe Auguste", "75011",
			"Lio Optic", "44 Bd Diderot", "75012",
			"A.M Presse Bizot", "116 Av Général Michel Bizot", "75012",
			"Alanpark", "105 rue de Charenton", "75013",
			"Okbi Presse", "91 rue de Barrault", "75013",
			"Encherexpert", "51 rue de Clisson", "75013",
			"Maison de la Presse", "137 Bd Auguste Blanqui", "75013",
			"Ideal Optic", "101 Av de France", "75013",
			"Chryzalys", "206 Bd Raspail", "75014",
			"Agip Papeterie Côté Sud", "133 Av du Maine", "75014",
			"Animalerie Little Zoo", "40 Bd Brune", "75014",
			"Cordonnerie B.V.F", "22 rue des Volontaires", "75015",
			"Moveux", "14 rue Dupleix", "75015",
			"Saveurs du Sud", "14 Av Félix Faure", "75015",
			"Anwa", "105 Bis rue des Entrepreneurs", "75015",
			"Mercerie Poncet", "15 rue Daumier", "75016",
			"Vu du XII", "96 Av de Mozart", "75016",
			"Centre Literie", "2 Bd Bessières", "75017",
			"Salon Marylène", "45 rue Brochant", "75017",
			"Allo Micro", "117 rue Legendre", "75017",
			"Encherexpert", "61 rue Guy Moquet", "75017",
			"Au Rocher de Joie", "12 rue Lamarck", "75018",
			"Consoplus Informatique", "8 Bd Ney", "75018",
			"Unity Génération", "17 rue Simart", "75018",
			"Isabelle Cherchevsky Atelier", "15 rue Lagouat", "75018",
			"Labelencre", "10 Av de La porte Brunet", "75019",
			"Prim Plus", "9 rue du Cher", "75020",
			"Cadeaux Chics", "27 rue Saint Fargeau", "75020",
			"Optic 62", "62 rue de Belleville", "75020",
			"Pressing 113", "113 Bd Davout", "75020",
			"Copy Conforme", "25 rue Gatinée", "75020",
		);

		//loop over the array

			//creates a DropSpot

			//hydrates it

			//(gets the coordinates, optionnal)

			//saves it

		//flush

	}

}