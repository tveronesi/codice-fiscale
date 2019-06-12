<?php

namespace CodiceFiscale;

/**
 * The subject of the codice fiscale.
 *
 * @author davidepastore
 */
class Subject
{
    private $name;
    private $surname;
    private $birthDate;
    private $gender;
    private $belfioreCode;
    private $birthPlace;
    private $birthPlaceProvince;

    /**
     * Create a Codice Fiscale instance.
     *
     * @param array $properties An array with all the properties.
     *                          Supported keys are:
     *                          - name: the name;
     *                          - surname: the surname;
     *                          - birthDate: the birth date;
     *                          - gender: the gender;
     *                          - belfioreCode: the Belfiore code.
     *                          - birthPlace: City of Birth.
     *                          - birthPlaceProvince: Province of birth.
     */
    public function __construct($properties)
    {
        //Set properties
        if (array_key_exists('name', $properties)) {
            $this->name = $properties['name'];
        }

        if (array_key_exists('surname', $properties)) {
            $this->surname = $properties['surname'];
        }

        if (array_key_exists('birthDate', $properties)) {
            $this->setBirthDate($properties['birthDate']);
        }

        if (array_key_exists('gender', $properties)) {
            $this->gender = $properties['gender'];
        }

        if (array_key_exists('belfioreCode', $properties)) {
            $this->belfioreCode = $properties['belfioreCode'];
        }

        if (array_key_exists('birthPlace', $properties)) {
            $this->birthPlace = $properties['birthPlace'];
        }

        if (array_key_exists('birthPlaceProvince', $properties)) {
            $this->birthPlaceProvince = $properties['birthPlaceProvince'];
        }
    }

    /**
     * Get the name.
     *
     * @return Returns the name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the name.
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the name.
     *
     * @return Returns the name.
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the surname.
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Get the birthDate.
     *
     * @return Returns the birthDate.
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the birthDate.
     */
    public function setBirthDate($birthDate)
    {
        if (!$birthDate instanceof \DateTimeInterface) {
            $birthDate = new \DateTime($birthDate);
        }

        $this->birthDate = $birthDate;
    }

    /**
     * Get the gender.
     *
     * @return Returns the gender.
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the gender.
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get the belfioreCode.
     *
     * @return Returns the belfioreCode.
     */
    public function getBelfioreCode()
    {
        return $this->belfioreCode;
    }

    /**
     * Set the belfioreCode.
     */
    public function setBelfioreCode($belfioreCode)
    {
        $this->belfioreCode = $belfioreCode;
    }
    /**
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param string $birthPlace
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }

    /**
     * @return string
     */
    public function getBirthPlaceProvince()
    {
        return $this->birthPlaceProvince;
    }

    /**
     * @param string $birthPlaceProvince
     */
    public function setBirthPlaceProvince($birthPlaceProvince)
    {
        $this->birthPlaceProvince = $birthPlaceProvince;
    }
}
