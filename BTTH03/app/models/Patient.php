<?php
class Patient{
    private $id;
    private $NamePatient;
    private $DayExamination;
    private $Symptom;
    private $idDocTor;

    /**
     * Patient constructor.
     * @param $id
     * @param $NamePatient
     * @param $DayExamination
     * @param $Symptom
     * @param $idDocTor
     */
    public function __construct($id, $NamePatient, $DayExamination, $Symptom, $idDocTor)
    {
        $this->id = $id;
        $this->NamePatient = $NamePatient;
        $this->DayExamination = $DayExamination;
        $this->Symptom = $Symptom;
        $this->idDocTor = $idDocTor;
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
    public function getNamePatient()
    {
        return $this->NamePatient;
    }

    /**
     * @param mixed $NamePatient
     */
    public function setNamePatient($NamePatient)
    {
        $this->NamePatient = $NamePatient;
    }

    /**
     * @return mixed
     */
    public function getDayExamination()
    {
        return $this->DayExamination;
    }

    /**
     * @param mixed $DayExamination
     */
    public function setDayExamination($DayExamination)
    {
        $this->DayExamination = $DayExamination;
    }

    /**
     * @return mixed
     */
    public function getSymptom()
    {
        return $this->Symptom;
    }

    /**
     * @param mixed $Symptom
     */
    public function setSymptom($Symptom)
    {
        $this->Symptom = $Symptom;
    }

    /**
     * @return mixed
     */
    public function getIdDocTor()
    {
        return $this->idDocTor;
    }

    /**
     * @param mixed $idDocTor
     */
    public function setIdDocTor($idDocTor)
    {
        $this->idDocTor = $idDocTor;
    }


}