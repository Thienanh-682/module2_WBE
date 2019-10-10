<?php
class StudentsManager
{
    protected $path;
    public function __construct($path)
    {
        $this->path = $path;
    }
    public function readFileJsonToArray()
    {
        $data = file_get_contents($this->path);
        return json_decode($data, true);
    }
    public function addFile($student)
    {
        $studentInfo = [
            "names" => $student->getNames(),
            "address" => $student->getAddress(),
            "phone" => $student->getPhone(),
            "group" => $student->getGroup(),
            "role" => $student->getRole()
        ];
        $currentData = $this->readFileJsonToArray();
        array_push($currentData, $studentInfo);
        $this->saveDataToJson($currentData);
    }
    public function saveDataToJson($data)
    {
        $newData = json_encode($data);
        return file_put_contents($this->path, $newData);
    }
}
$manager = new StudentsManager("data.json");
