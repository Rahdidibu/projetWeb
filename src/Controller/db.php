<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class db
{
  const ID = "root";
  const PASSWORD = "";
  const DBNAME = "projetWeb";
  public function connection(){
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8', 'root', '');
      //$bdd = new PDO('mysql:host=localhost;dbname='DBNAME';charset=utf8', 'ID', 'PASSWORD');
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
    
  }

  public function getAllFormation(){
    $result = $bdd->query('SELECT etablissement_lib, comp_lib, zone_lib, mention_lib, etablissement_zone_lon ,etablissement_zone_lat from formation
      inner join etablissement on formation.etablissement_id = etablissement.etablissement_id
      inner join zone on formation.zone_id = zone.zone_id
      inner join composante on formation.comp_id = composante.comp_id');
    }

    public function deconnection(){

    }
  }
