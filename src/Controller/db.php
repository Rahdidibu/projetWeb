<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use \PDO;


class db
{
  const ID = "root";
  const PASSWORD = "";
  const DBNAME = "projetWeb";
  private $donnee;

  public function connection(){
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8', 'root', '');
      //  $bdd = new PDO('mysql:host=localhost;dbname="DBNAME";charset=utf8', ID, PASSWORD);

      $donnee=$this->getAllFormation($bdd);
      $bdd=null;
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
    return new Response($this->donnee[1]); //Affiche première élément tab --> pour ne pas avoir d'erreur
  }

  public function getAllFormation($bdd){
    return $bdd->query('SELECT etablissement_lib, comp_lib, zone_lib, mention_lib, etablissement_zone_lon ,etablissement_zone_lat from formation
      inner join etablissement on formation.etablissement_id = etablissement.etablissement_id
      inner join zone on formation.zone_id = zone.zone_id
      inner join composante on formation.comp_id = composante.comp_id')->fetch();
    }
  }
