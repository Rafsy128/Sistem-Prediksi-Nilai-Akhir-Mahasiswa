<?php


class Mahasiswa
{
  protected $table = "mahasiswa";
  protected $conn;

  public function __construct()
  {
    $this->conn =  new mysqli("localhost", "root", "", "db_prediksi");
  }

  public function get($role = [])
  {
    $result = null;
    $sql = "SELECT * FROM $this->table";

    if (isset($role['join'])) {
      $sql .= " JOIN " . $role['join'];
    }

    if (isset($role['where'])) {
      $sql .= " WHERE " . $role['where'];
    }

    if (isset($role['orderby'])) {
      $sql .= " ORDER BY " . $role['orderby'];
    }

    if (isset($role['limit'])) {
      $sql .= " LIMIT " . $role['limit'];
    }

    $result = mysqli_query($this->conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }

    return $rows;
  }

  public function save($data)
  {
    $colum = "";
    $value = "";
    $i = 1;
    foreach ($data as $col => $val) {
      $colum .= $col;
      $value .= "'" . $val . "'";
      if ($i != count($data)) {
        $value .= ", ";
        $colum .= ", ";
      }
      $i++;
    }
    unset($i);
    mysqli_query($this->conn, "INSERT INTO $this->table ($colum) VALUES($value)");
    return mysqli_affected_rows($this->conn);
  }

  public function update($data, $id)
  {
    $set = '';
    $i = 1;
    foreach ($data as $col => $val) {
      $set .= $col . " = '" . $val . "' ";
      if ($i != count($data)) {
        $set .= ", ";
      }

      $i++;
    }
    unset($i);

    $sql = "UPDATE $this->table SET $set WHERE id_mhs = '$id'";

    mysqli_query($this->conn, $sql);
    return mysqli_affected_rows($this->conn);
  }

  public function delete($id)
  {
    mysqli_query($this->conn, "DELETE FROM $this->table WHERE id_mhs = '$id'");
    return mysqli_affected_rows($this->conn);
  }
}
