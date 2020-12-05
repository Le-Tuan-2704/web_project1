<?php
class CustomerModel extends DB{
    public function getCustomer(){
        return "Le Duy Tuan";
    }
    public function addCustomer(){
    }

    public function khachHang(){
        
        $sql = " SELECT * FROM khach-hang";
        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
          } else {
            echo "0 results";
          }
    }
}
