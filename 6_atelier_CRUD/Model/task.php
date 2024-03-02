<?php

class Task
{
  private $id;
  private $title;
  private $description;
  private $duration;
  private $state;
  private $employe_id;

  public function __construct($title, $description,  $duration, $state, $employe_id)
  {
    $this->title = $title;
    $this->description = $description;
    $this->duration = $duration;
    $this->state = $state;
    $this->employe_id = $employe_id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function getState()
  {
    return $this->state;
  }

  public function getEmployeId()
  {
    return $this->employe_id;
  }
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function setDuration($duration)
  {
    $this->duration = $duration;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function setEmployeId($employe_id)
  {
    $this->employe_id = $employe_id;
  }
}
