<?php
/**
 * Created by IntelliJ IDEA.
 * User: motylg01
 * Date: 03/11/2017
 * Time: 11:06
 */

namespace App\Domain;


interface ITask
{
    public function getName();
    public function setAsDone();
    public function setAsPending();
}