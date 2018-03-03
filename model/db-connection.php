<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '/home/nsinghvi/config.php';

try {
    //instance a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME,
        DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected  to databases";
} catch (PDOException $e) {
    echo $e->getMessage();
}

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

function insertmember($firstName, $lastName, $age, $gender, $phonenumber, $email,
                      $state, $sgender, $biography, $premium, $interests)
{
    global $dbh;
    //define query
    $sql = "INSERT INTO Members(`member_id`, `firstName`, `lastName`, `age`, `gender`, `phonenumber`, `email`, `state`, `sgender`,
                                      `biography`, `premium`, `interests`)
                VALUES (NULL ,:firstName,:lastName,:age,:gender,:phonenumber,:email,:state,:sgender,:biography,:premium,:interests)";
    //prepare
    $statement = $dbh->prepare($sql);
    //3. bind parameters

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


    //execute
    $statement->execute();

}

function getMember()
{
    global $dbh;

    // define the query
    $sql = "SELECT * FROM Members order by lastName";

    // prepare the statement
    $statement = $dbh->prepare($sql);

    // execute the statement
    $statement->execute();


    // return the result
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $result;

}

