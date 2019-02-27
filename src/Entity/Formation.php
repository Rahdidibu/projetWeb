<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 2/27/2019
 * Time: 10:22 AM
 */

namespace App\Entity;


class Formation
{
    public $etablissement;
    public $composante;
    public $zone;
    public $description;
    public $longitude;
    public $lattitude;

    /**
     * Formation constructor.
     * @param $etablissement
     * @param $composante
     * @param $zone
     * @param $description
     * @param $longitude
     * @param $lattitude
     */
    public function __construct($etablissement, $composante, $zone, $description, $longitude, $lattitude)
    {
        $this->etablissement = $etablissement;
        $this->composante = $composante;
        $this->zone = $zone;
        $this->description = $description;
        $this->longitude = $longitude;
        $this->lattitude = $lattitude;
    }

    /**
     * @return mixed
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * @param mixed $etablissement
     */
    public function setEtablissement($etablissement): void
    {
        $this->etablissement = $etablissement;
    }

    /**
     * @return mixed
     */
    public function getComposante()
    {
        return $this->composante;
    }

    /**
     * @param mixed $composante
     */
    public function setComposante($composante): void
    {
        $this->composante = $composante;
    }

    /**
     * @return mixed
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * @param mixed $zone
     */
    public function setZone($zone): void
    {
        $this->zone = $zone;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }

    /**
     * @param mixed $lattitude
     */
    public function setLattitude($lattitude): void
    {
        $this->lattitude = $lattitude;
    }

}