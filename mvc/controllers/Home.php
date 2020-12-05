<?php

class Home extends Controller{
    function Start(){
        $customer = $this->model("CustomerModel");
        echo $customer->getCustomer();
        $this->view("loginView");
    }

    function show(){
        $customer = $this->model("CustomerModel");

        $this->view("abcView", [
            "khachHang" => $customer->khachHang(),
            "mau" => "blue",
            "kichThuoc" => "50px"
        ]);
    }
}
?>