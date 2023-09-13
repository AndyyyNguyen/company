<?php
class EmpRepository
{
    public $error;

    function fetchAll($cond = null, $page = null, $item_per_page = null)
    {
        global $conn;
        $sql = "SELECT employees.*,departments.department_name FROM employees JOIN departments ON employees.department_id = departments.department_id";
        if ($cond) {
            $sql .= " $cond";
        }
        if ($page && $item_per_page) {
            $row_index = ($page - 1) * $item_per_page;
            $sql .= " LIMIT $row_index,$item_per_page";
        }

        $result = $conn->query($sql);
        $employees = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $employee_id = $row['employee_id'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $email = $row['email'];
                $phone_number = $row['phone_number'];
                $hire_date = $row['hire_date'];
                $salary = $row['salary'];
                $department_id = $row['department_id'];
                $department_name = $row['department_name'];
                $employee = new Emp($employee_id, $first_name, $last_name, $email, $phone_number, $hire_date, $salary, $department_id, $department_name);
                $employees[] = $employee;
            }
        }
        return $employees;
    }

    function getAll($page = null, $item_per_page = null)
    {
        return $this->fetchAll(null, $page, $item_per_page);
    }

    function getByPattern($search, $page = null, $item_per_page = null)
    {
        $cond = "WHERE employees.first_name LIKE '%$search%' || employees.last_name LIKE '%$search%'";
        return $this->fetchAll($cond, $page, $item_per_page);
    }


    function getOneById($employee_id)
    {
        $cond = " WHERE employee_id='$employee_id'";
        $emps = $this->fetchAll($cond);
        $emp = current($emps);
        return $emp;
    }

    function save($data)
    {
        global $conn;
        $employee_id = $data['employee_id'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $phone_number = $data['phone_number'];
        $hire_date = $data['hire_date'];
        $salary = $data['salary'];
        $department_id = $data['department_id'];
        $sql = "INSERT 
        INTO employees(employee_id,first_name,last_name,email,phone_number,hire_date,salary,department_id) 
        VALUES ('$employee_id','$first_name','$last_name','$email','$phone_number',' $hire_date','$salary','$department_id')";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $conn->error;
        return false;
    }

    function update($data)
    {
        global $conn;
        $employee_id = $data['employee_id'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $phone_number = $data['phone_number'];
        $hire_date = $data['hire_date'];
        $salary = $data['salary'];
        $department_id = $data['department_id'];
        $sql = "UPDATE employees SET 
        first_name='$first_name',last_name='$last_name',email='$email',phone_number='$phone_number',hire_date='$hire_date',salary='$salary',department_id='$department_id' 
        WHERE employee_id = $employee_id";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $conn->error;
        return false;
    }

    function delete($employee_id)
    {
        global $conn;
        $sql = "DELETE FROM employees WHERE employee_id = $employee_id";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $conn->error;
        return false;
    }
}
