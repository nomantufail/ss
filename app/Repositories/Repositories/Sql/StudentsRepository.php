<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 3/16/2016
 * Time: 9:57 AM
 */

namespace App\Repositories\Repositories\Sql;

use App\DB\Providers\SQL\SQLFactoryProvider;
use App\Repositories\Sql\SqlRepository;
use App\Repositories\Interfaces\Repositories\UsersRepoInterface;
use App\DB\Providers\SQL\Models\Student\Student;

class StudentsRepository extends SqlRepository implements UsersRepoInterface
{
    private $factory = null;
    public function __construct(){
        $this->factory = SQLFactoryProvider::student();
    }

    public function store(Student $student)
    {
        $student->id = $this->factory->store($student);
        return $student;
    }

    public function all()
    {
        return $this->factory->all();
    }

    public function update(Student $student)
    {
        return $this->factory->update($student);
    }

    public function findById($id)
    {
        return $this->factory->findById($id);
    }
}
