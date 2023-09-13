<?php
class DepRepository
{
    public $error;

    function fetchAll($cond = null, $page = null, $item_per_page = null)
    {
        global $conn;
        $sql = "SELECT * FROM departments ";
        if ($cond) {
            $sql .= " $cond";
        }
        if ($page && $item_per_page) {
            $row_index = ($page - 1) * $item_per_page;
            $sql .= " LIMIT $row_index,$item_per_page";
        }
        $result = $conn->query($sql);
        $departments = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $department_id = $row['department_id'];
                $department_name = $row['department_name'];
                $department = new Dep($department_id, $department_name);
                $departments[] = $department;
            }
        }
        return $departments;
    }

    function getAll($page = null, $item_per_page = null)
    {
        return $this->fetchAll(null, $page, $item_per_page);
    }

    function getByPattern($search, $page = null, $item_per_page = null)
    {
        $cond = "WHERE department_name LIKE '%$search%'";
        return $this->fetchAll($cond, $page, $item_per_page);
    }


    function getOneById($department_id)
    {
        $cond = " WHERE department_id='$department_id'";
        $deps = $this->fetchAll($cond);
        $dep = current($deps);
        return $dep;
    }

    function save($data)
    {
        global $conn;
        $department_id = $data['department_id'];
        $department_name = $data['department_name'];
        $sql = "INSERT INTO departments(department_id,department_name) 
        VALUES ('$department_id','$department_name')";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $conn->error;
        return false;
    }

    function update($data)
    {
        global $conn;
        $department_id = $data['department_id'];
        $department_name = $data['department_name'];
        $sql = "UPDATE departments SET department_name='$department_name',department_id='$department_id'
        WHERE department_id = $department_id";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $conn->error;
        return false;
    }

    function delete($department_id)
    {
        global $conn;
        $sql = "DELETE FROM departments WHERE department_id = $department_id";
        if ($conn->query($sql)) {
            return true;
        }
        $this->error = $conn->error;
        return false;
    }
}
