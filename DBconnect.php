<?php

if ( !class_exists( 'DALi' ) )
{

  class DALi
  {

    protected function dbconnect()
    {

      include 'DBdefine.php';
      return new mysqli( $HOST, $USER, $PASS, $dbName);

    }

    public function query($query)
    {

      $db = $this->dbconnect();
      $result = $db->query($query);

      while ($row = $result->fetch_array() )
      {

        $results[] = $row;

      }

      return $results;

    }

    public function getBackAndText()
    {
      $sql = "SELECT * FROM UIsettings WHERE ID=0";
      $color = $this->query($sql);
      return $color[0];
    }
  }


}

 ?>
