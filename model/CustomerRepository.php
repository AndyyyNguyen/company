<?php
class CustomerRepository
{
    public $error;

    function fetchAll($cond = null)
    {
        global $conn;
        $sql = "SELECT * FROM user";
        if ($cond) {
            $sql .= " $cond";
        }
        $result = $conn->query($sql);
        $customers = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $email = $row['email'];
                $name = $row['name'];
                $password = $row['password'];
                $is_active = $row['is_active'];
                $customer = new Customer($email, $name, $password, $is_active);
                $customers[] = $customer;
            }
        }
        return $customers;
    }


    function findEmail($email)
    {
        $cond = "WHERE email='$email'";
        $customers = $this->fetchAll($cond);
        $customer = current($customers);
        return $customer;
    }
}
