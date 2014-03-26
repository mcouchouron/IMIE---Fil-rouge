<?php

/**
 * Description of UsersDAO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Users;

use PDO;

include_once("/../Connection/myconnection.inc.php");
require_once("UsersDTO.class.php");

class UsersDAO {

    function select($condition) {

        $pdo = connection("myimieskills", "myparam");
        $tab = array();

        $result = $pdo->query("SELECT user_id, user_login, user_password, user_name, user_surname, user_date_of_birth, user_address_1, user_address_2, "
                . "user_address_3, user_postcode, user_city, user_email, user_phone, user_available, user_about, user_personnal_data_is_visible, "
                . "user_first_connection, promotion_id, school_city_id, profile_id FROM user_data " . $condition . ";");

        
        while ($row = $result->fetchObject()) {

            $id = $row->user_id;
            $login = $row->user_login;
            $password = $row->user_password;
            $surname = $row->user_surname;
            $name = $row->user_name;
            $birthday = $row->user_date_of_birth;
            $adress1 = $row->user_address_1;
            $adress2 = $row->user_address_2;
            $adress3 = $row->user_address_3;
            $zipCode = $row->user_postcode;
            $city = $row->user_city;
            $email = $row->user_email;
            $phone = $row->user_phone;
            $available = $row->user_available;
            $about = $row->user_about;
            $personnalDataIsVisible = $row->user_personnal_data_is_visible;
            $firstConnection = $row->user_first_connection;
            $promotionId = $row->promotion_id;
            $schoolId = $row->school_city_id;
            $profileId = $row->profile_id;
            $user = new UsersDTO($id, $login, $password, $surname, $name, $birthday, $adress1, $adress2, $adress3, $zipCode, $city, $email, $phone, $available, $about, $personnalDataIsVisible, $firstConnection, $promotionId, $schoolId, $profileId);
            $tab[] = $user;

        }
            $result->closeCursor();
            $pdo = disconnect();
            return $tab;
        
    }

    function update(UsersDTO $user) {
        $pdo = connection("myimieskills", "myparam");

        $result = $pdo->prepare("UPDATE user_data SET user_login = ?, user_password = ?, user_name = ?, user_surname = ?, user_date_of_birth = ?, "
                . "user_address_1 = ?, user_address_2 = ?, user_address_3 = ?, user_postcode = ?, user_city = ?, user_email = ?, "
                . "user_phone = ?, user_available = ?, user_about = ?, user_personnal_data_is_visible = ?, user_first_connection = ?, "
                . "promotion_id = ?, school_city_id = ?, profile_id = ? WHERE user_id = ? ;");

        $result->bindParam(1, $user->getLogin(), PDO::PARAM_STR);
        $result->bindParam(2, $user->getPassword(), PDO::PARAM_STR);
        $result->bindParam(3, $user->getName(), PDO::PARAM_STR);
        $result->bindParam(4, $user->getSurname(), PDO::PARAM_STR);
        $result->bindParam(5, $user->getBirthday(), PDO::PARAM_STR);
        $result->bindParam(6, $user->getAdress1(), PDO::PARAM_STR);
        $result->bindParam(7, $user->getAdress2(), PDO::PARAM_STR);
        $result->bindParam(8, $user->getAdress3(), PDO::PARAM_STR);
        $result->bindParam(9, $user->getZipCode(), PDO::PARAM_STR);
        $result->bindParam(10, $user->getCity(), PDO::PARAM_STR);
        $result->bindParam(11, $user->getEmail(), PDO::PARAM_STR);
        $result->bindParam(12, $user->getPhone(), PDO::PARAM_STR);
        $result->bindParam(13, $user->getAvailable(), PDO::PARAM_INT);
        $result->bindParam(14, $user->getAbout(), PDO::PARAM_STR);
        $result->bindParam(15, $user->getPersonnalDataIsVisible(), PDO::PARAM_INT);
        $result->bindParam(16, $user->getFirstConnection(), PDO::PARAM_INT);
        $result->bindParam(17, $user->getPromotionId(), PDO::PARAM_INT);
        $result->bindParam(18, $user->getSchoolId(), PDO::PARAM_INT);
        $result->bindParam(19, $user->getProfileId(), PDO::PARAM_INT);
        $result->bindParam(20, $user->getId(), PDO::PARAM_INT);

        $result->execute();

        $result->closeCursor();
        $pdo = disconnect();
    }

    function delete(UsersDTO $user) {

        $pdo = connection("myimieskills", "myparam");

        $result = $pdo->prepare("SET foreign_key_checks = 0 ; DELETE FROM user_data WHERE user_id = ? ; SET foreign_key_checks = 1 ;");
        
        $id = $user->getId();
        
        $result->bindParam(1, $id, PDO::PARAM_INT);
        
        $result->execute();

        $result->closeCursor();
        $pdo = disconnect();
    }

    function insert(UsersDTO $user) {
        $pdo = connection("myimieskills", "myparam");

        $result = $pdo->prepare("INSERT INTO user_data (user_login, user_password, user_name, user_surname, user_date_of_birth, user_address_1, "
                . "user_address_2, user_address_3, user_postcode, user_city, user_email, user_phone, user_available, user_about, "
                . "user_personnal_data_is_visible, user_first_connection, promotion_id, school_city_id, profile_id) "
                . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $login = $user->getLogin();
        $password = $user->getPassword();
        $name = $user->getName();
        $surname = $user->getSurname();
        $birthday = $user->getBirthday();
        $adress1 = $user->getAdress1();
        $asress2 = $user->getAdress2();
        $adress3 = $user->getAdress3();
        $zipCode = $user->getZipCode();
        $city = $user->getCity();
        $email = $user->getEmail();
        $phone = $user->getPhone();
        $available = $user->getAvailable();
        $about = $user->getAbout();
        $visible = $user->getPersonnalDataIsVisible();
        $firstConnection = $user->getFirstConnection();
        $promotion = $user->getPromotionId();
        $school = $user->getSchoolId();
        $profile = $user->getProfileId();


        $result->bindParam(1, $login, PDO::PARAM_STR);
        $result->bindParam(2, $password, PDO::PARAM_STR);
        $result->bindParam(3, $name, PDO::PARAM_STR);
        $result->bindParam(4, $surname, PDO::PARAM_STR);
        $result->bindParam(5, $birthday, PDO::PARAM_STR);
        $result->bindParam(6, $adress1, PDO::PARAM_STR);
        $result->bindParam(7, $asress2, PDO::PARAM_STR);
        $result->bindParam(8, $adress3, PDO::PARAM_STR);
        $result->bindParam(9, $zipCode, PDO::PARAM_STR);
        $result->bindParam(10, $city, PDO::PARAM_STR);
        $result->bindParam(11, $email, PDO::PARAM_STR);
        $result->bindParam(12, $phone, PDO::PARAM_STR);
        $result->bindParam(13, $available, PDO::PARAM_INT);
        $result->bindParam(14, $about, PDO::PARAM_STR);
        $result->bindParam(15, $visible, PDO::PARAM_INT);
        $result->bindParam(16, $firstConnection, PDO::PARAM_INT);
        $result->bindParam(17, $promotion, PDO::PARAM_INT);
        $result->bindParam(18, $school, PDO::PARAM_INT);
        $result->bindParam(19, $profile, PDO::PARAM_INT);

        $result->execute();

        $result->closeCursor();
        $pdo = disconnect();
    }

}
