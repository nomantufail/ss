<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 4/1/2016
 * Time: 9:34 PM
 */

namespace App\DB\Providers\SQL\Factories\Factories\Student;

use App\DB\Providers\SQL\Factories\Factories\User\Gateways\StudentQueryBuilder;
use App\DB\Providers\SQL\Factories\SQLFactory;
use App\DB\Providers\SQL\Interfaces\SQLFactoriesInterface;
use App\DB\Providers\SQL\Models\Student\Student;

class StudentFactory extends SQLFactory implements SQLFactoriesInterface{
    private $tableGateway = null;
    public function __construct()
    {
        $this->model = new Student();
        $this->tableGateway = new StudentQueryBuilder();
    }

    public function store(Student $student)
    {
        $student->createdAt = date('Y-m-d h:i:s');
        return $this->tableGateway->insert($this->mapStudentOnTable($student));
    }

    public function all()
    {
        return $this->mapCollection($this->tableGateway->all());
    }

    public function update(Student $student)
    {
        return $this->tableGateway->update($student->id,$this->mapStudentOnTable($student));
    }

    public function findById($id)
    {
        return $this->map($this->tableGateway->find($id));
    }


    public function map($result)
    {
        $student = new Student();
        $student->id = $result->id;
        $student->fName = $result->f_name;
        $student->lName = $result->l_name;
        return $student;
    }

    /**
     * @param Student $student
     * @return array
     **/
    private function mapStudentOnTable(Student $student)
    {
        return [
            'f_name' => $student->fName,
            'l_name' => $student->lName,
        ];
    }

}
