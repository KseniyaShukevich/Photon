<?php
    class Employee
    {
        public $FullName, $Quantity, $Rate, $Salary;
        public function __construct(string $FullName, float $Quantity, float $Rate)
        {
            $this->FullName = $FullName;
            $this->Quantity = $Quantity;
            $this->Rate = $Rate;
            $this->Salary = $Quantity*$Rate;
        }
        public function GetFullName(): string
        {
            echo "<br> ФИО: ";
            return $this->FullName;
        }
        public function GetSalary(): float
        {
            return $this->Salary;
        }
        public function GetFixedSalary(float $NumberOfMonth, float $Rate): float
        {
            echo "<br>Зарплата за $NumberOfMonth месяцев по ставке $Rate рублей:<br>";
            return $Salary = $NumberOfMonth*$Rate;
        }
        public function GetHourlySalary(float $NumberOfHours, float $Rate): float
        {
            echo "<br>Зарплата за $NumberOfHours часов по ставке $Rate рублей в час:<br>";
            return $Salary = $NumberOfHours*$Rate;
        }
    }

    class Project
    {
        public $Employees = [];
        public function GetProjectPrice(array $Employees)
        {
            $Sum = 0;
            for($i=0; $i<count($Employees); $i++)
            {
                 $Sum += $Employees[$i]->GetSalary();
            }
             echo $Sum;
        }
    }

    $Designer = new Employee('sddg', 3000, 1);
    $SeniorDeveloper = new Employee('sffd', 60, 10);
    $MiddleDeveloper = new Employee('sfdfs', 1000, 3);
    $MiddleDeveloper2 = new Employee('sdsofs', 1000, 3);
    $Imposer = new Employee('syth', 120, 5);

    $ProjectX = new Project();
    $Employees = array($Designer, $SeniorDeveloper, $MiddleDeveloper, $MiddleDeveloper2, $Imposer);
    echo $ProjectX->GetProjectPrice($Employees);
?>