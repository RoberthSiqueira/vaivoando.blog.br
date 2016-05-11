<?php
  public class Lead extends {

  private $id;
  private $email;
  private $city;
  private $age;
  private $date;
  private $db;

  public function conectaBD() {
      $this->db = DataBase::getInstance();
  }

  function getId() {
    return $this->id;
  }

  function setId($id) {
      $this->id = $id;
  }

  function getEmail() {
    return $this->email;
  }

  function setEmail($email) {
      $this->email = $email;
  }

  function getCity() {
    return $this->city;
  }

  function setCity($city) {
      $this->city = $city;
  }

  function getAge() {
    return $this->age;
  }

  function setAge($age) {
      $this->id = $age;
  }

  function getDate() {
    return $this->date;
  }

  function setDate($date) {
      $this->date = $date;
  }

  function insert() {
      $this->conectaBD();
      $sql = "INSERT INTO `vaivoandodb`.`lead`
          (`email`,
           `city`,
           `age`,
           `date`,
           `id`)
          VALUES (:email,
          :city,
          :age,
          :date,
          'id')";

      $parametros = array(":email" => $this->email,
          ":city" => $this->city,
          ":age" => $this->age,
          ":date" => $this->date);
      try {
          $stmt = $this->db->prepare($sql);
          $stmt->execute($parametros);
      } catch (PDOException $e) {
          throw new DbException($e);
      }
  }

}

?>
