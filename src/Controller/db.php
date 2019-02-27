<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use \PDO;
use App\Entity\Formation;


class db
{
  const ID = "root";
  const PASSWORD = "";
  const DBNAME = "projetWeb";
  public $donnee;
  public $forms;

  public function connection(Environment $twig){
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8', 'root', '');
      //  $bdd = new PDO('mysql:host=localhost;dbname="DBNAME";charset=utf8', ID, PASSWORD);

      $donnee=$this->getAllFormation($bdd);
     $forms_render = $this->addToModel($donnee);
      $bdd=null;
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
    return new Response($twig->render("index.html.twig", ['forms' => $forms_render]));//Affiche première élément tab --> pour ne pas avoir d'erreur
  }

  public function getAllFormation($bdd){
    return $bdd->query('SELECT etablissement_lib, comp_lib, zone_lib, mention_lib, etablissement_zone_lon ,etablissement_zone_lat from formation
      inner join etablissement on formation.etablissement_id = etablissement.etablissement_id
      inner join zone on formation.zone_id = zone.zone_id
      inner join composante on formation.comp_id = composante.comp_id')->fetchAll();
    }
   public function addToModel($array){
    foreach ($array as $element){
        $form = new Formation($element[0],$element[1],$element[2],$element[3],$element[4],$element[5]);
        $forms[] = $form;
    }
    return $forms;
   }
  }
