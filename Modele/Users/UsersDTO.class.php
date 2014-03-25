<?php

/**
 * Description of UsersDTO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Users;

class UsersDTO {
    //Attributs
    private $id;
    private $login;
    private $password;
    private $surname;
    private $name;
    private $birthday;
    private $adress1;
    private $adress2;
    private $adress3;
    private $zipCode;
    private $city;
    private $email;
    private $phone;
    private $available;
    private $about;
    private $personnalDataIsVisible;
    private $firstConnection;
    private $promotionId;
    private $schoolId;
    private $profileId;
    //tableaux skillLevel (user_has_skill_and_level) tableau à 2 dimensions comme competence = array() contenant
    //d'un coté l'objet compétence et de l'autre l'objet niveau (cad avec leurs attributs)



    //**************************************************************
    //Constructor
    //**************************************************************
    
    
    function __construct($id, $login, $password, $surname, $name, $birthday, $adress1, $adress2, $adress3, $zipCode, $city, $email, $phone, $available, $about, $personnalDataIsVisible, $firstConnection, $promotionId, $schoolId, $profileId) {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->surname = $surname;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->adress1 = $adress1;
        $this->adress2 = $adress2;
        $this->adress3 = $adress3;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->email = $email;
        $this->phone = $phone;
        $this->available = $available;
        $this->about = $about;
        $this->personnalDataIsVisible = $personnalDataIsVisible;
        $this->firstConnection = $firstConnection;
        $this->promotionId = $promotionId;
        $this->schoolId = $schoolId;
        $this->profileId = $profileId;
    }
    //**************************************************************
    //Getter & Setter
    //**************************************************************
    
    public function getId() {
        return $this->id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getName() {
        return $this->name;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function getAdress1() {
        return $this->adress1;
    }

    public function getAdress2() {
        return $this->adress2;
    }

    public function getAdress3() {
        return $this->adress3;
    }

    public function getZipCode() {
        return $this->zipCode;
    }

    public function getCity() {
        return $this->city;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAvailable() {
        return $this->available;
    }

    public function getAbout() {
        return $this->about;
    }

    public function getPersonnalDataIsVisible() {
        return $this->personnalDataIsVisible;
    }

    public function getFirstConnection() {
        return $this->firstConnection;
    }

    public function getPromotionId() {
        return $this->promotionId;
    }

    public function getSchoolId() {
        return $this->schoolId;
    }

    public function getProfileId() {
        return $this->profileId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setBirthday($birthday) {
        $this->birthday = $birthday;
    }

    public function setAdress1($adress1) {
        $this->adress1 = $adress1;
    }

    public function setAdress2($adress2) {
        $this->adress2 = $adress2;
    }

    public function setAdress3($adress3) {
        $this->adress3 = $adress3;
    }

    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setAvailable($available) {
        $this->available = $available;
    }

    public function setAbout($about) {
        $this->about = $about;
    }

    public function setPersonnalDataIsVisible($personnalDataIsVisible) {
        $this->personnalDataIsVisible = $personnalDataIsVisible;
    }

    public function setFirstConnection($firstConnection) {
        $this->firstConnection = $firstConnection;
    }

    public function setPromotionId($promotionId) {
        $this->promotionId = $promotionId;
    }

    public function setSchoolId($schoolId) {
        $this->schoolId = $schoolId;
    }

    public function setProfileId($profileId) {
        $this->profileId = $profileId;
    }

    

}
