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
    protected $etablissement_name;
    protected $composante_name;
    protected $zone;
    protected $description;
    protected $longitude;
    protected $lattitude;

    /**
     * Formation constructor.
     * @param $etablissement_name
     * @param $composante_name
     * @param $zone
     * @param $description
     * @param $longitude
     * @param $lattitude
     */
    public function __construct($etablissement_name, $composante_name, $zone, $description, $longitude, $lattitude)
    {
        $this->etablissement_name = $etablissement_name;
        $this->composante_name = $composante_name;
        $this->zone = $zone;
        $this->description = $description;
        $this->longitude = $longitude;
        $this->lattitude = $lattitude;
    }

    /**
     * @return mixed
     */
    public function getEtablissementName()
    {
        return $this->etablissement_name;
    }

    /**
     * @param mixed $etablissement_name
     */
    public function setEtablissementName($etablissement_name): void
    {
        $this->etablissement_name = $etablissement_name;
    }

    /**
     * @return mixed
     */
    public function getComposanteName()
    {
        return $this->composante_name;
    }

    /**
     * @param mixed $composante_name
     */
    public function setComposanteName($composante_name): void
    {
        $this->composante_name = $composante_name;
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