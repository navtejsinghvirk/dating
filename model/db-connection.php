<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '/home/nsinghvi/config.php';

//Create Table (Query)
/*CREATE TABLE Members (
`firstName` VARCHAR(40) NOT NULL ,
`lastName` VARCHAR(40) NOT NULL ,
`age` INT(10) NOT NULL ,
 `phonenumber` INT(20) NOT NULL ,
 `premium` TINYINT NOT NULL ,
 `state` VARCHAR(40) NOT NULL ,
 `sgender` VARCHAR(8) NOT NULL ,
`email` VARCHAR(25) NOT NULL ,
 `interests` VARCHAR(50) NOT NULL ,
`member_id` INT(25) NOT NULL AUTO_INCREMENT ,
 `gender` VARCHAR(10) NOT NULL ,
 `biography` TEXT NOT NULL ,
 PRIMARY KEY (`member_id`));
*/

/**
 * Class Dbconnection
 */
class Dbconnection
{
    function connect()  //connecting to database
    {
        try {
            $dbcnn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);             //instance a database object
            $dbcnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected  to databases";
        } catch (PDOException $expect) {
            echo $expect->getMessage();
        }
    }

    /**
     * @param $premiummember
     */
    function insertmember($premiummember)
    {
        global $dbcnn;

        $sql = "INSERT INTO Members (`firstName`, `lastName`, `age`, `gender`, `phonenumber`, `email`, `state`, `sgender`,
                                      `biography`, `premium`, `interests`)
                VALUES (:firstName,:lastName,:age,:gender,:phonenumber,:email,:state,:sgender,:biography,:premium,:interests)";

        $statement = $dbcnn->prepare($sql);

    $firstName = $premiummember->getFname();
    $lastName = $premiummember->getLname();
    $age = $premiummember->getAge();
    $gender = $premiummember->getFname();
    $phonenumber = $premiummember->getPhone();
    $email = $premiummember->getEmail();
    $state = $premiummember->getState();
    $sgender = $premiummember->getSgender();
    $biography = $premiummember->getBio();
    $premium = $_SESSION['premium'];
    $interests = implode(",", (array_merge($premiummember->getInDoorInterests(), $premiummember->getOutDoorInterests())));

        $statement->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_STR);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':phonenumber', $phonenumber, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':sgender', $sgender, PDO::PARAM_STR);
        $statement->bindParam(':biography', $biography, PDO::PARAM_STR);
        $statement->bindParam(':premium', $premium, PDO::PARAM_STR);
        $statement->bindParam(':interests', $interests, PDO::PARAM_STR);

        $statement->execute();
    }

//    function getMember()
//    {
//        global $dbh;
//
//        // define the query
//        $sql = "SELECT * FROM Members order by lastName";
//
//        // prepare the statement
//        $statement = $dbh->prepare($sql);
//
//        // execute the statement
//        $statement->execute();
//
//
//        // return the result
//        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
//
//        return $result;
//
//    }
}
