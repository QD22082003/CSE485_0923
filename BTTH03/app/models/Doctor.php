<?php
class Doctor{
    private $id;
    private $NameDocTor;
    private $Specialist;

    /**
     * Doctor constructor.
     * @param $id
     * @param $NameDocTor
     * @param $Specialist
     */
    public function __construct($id, $NameDocTor, $Specialist)
    {
        $this->id = $id;
        $this->NameDocTor = $NameDocTor;
        $this->Specialist = $Specialist;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNameDocTor()
    {
        return $this->NameDocTor;
    }

    /**
     * @param mixed $NameDocTor
     */
    public function setNameDocTor($NameDocTor)
    {
        $this->NameDocTor = $NameDocTor;
    }

    /**
     * @return mixed
     */
    public function getSpecialist()
    {
        return $this->Specialist;
    }

    /**
     * @param mixed $Specialist
     */
    public function setSpecialist($Specialist)
    {
        $this->Specialist = $Specialist;
    }



}