<?php

function createSchool(string $city, int $capacity) : void
{
    $pdo = getPDO();
    $query = 'INSERT INTO school (city, capacity) VALUES (:city, :capacity)';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':capacity', $capacity, PDO::PARAM_INT);
    $statement->bindValue(':city', $city, PDO::PARAM_STR);
    $statement->execute();
}

function getAllSchools() : array
{
    $pdo = getPDO();
    $query = 'SELECT * FROM school';
    $statement = $pdo->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function deleteSchool(int $id) : void
{
    $pdo = getPDO();
    $query = 'DELETE FROM school WHERE id = :id';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
}

function updateSchool(string $city, int $capacity, int $id) : void
{
    $pdo = getPDO();
    $query = 'UPDATE school SET city = :city, capacity = :capacity WHERE id = :id';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':capacity', $capacity, PDO::PARAM_INT);
    $statement->bindValue(':city', $city, PDO::PARAM_STR);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
}

function findSchoolById(int $id) : array
{
    $pdo = getPDO();
    $query = 'SELECT * FROM school WHERE id = :id';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getPDO() : PDO
{
    try {
        $pdo = new PDO(DSN, USER, PASS );
    } catch (PDOException $e) {
        echo 'erreur avec PDO veuillez contacter Guillaume' . $e->getMessage();
        die;
    }
    return $pdo;
}
