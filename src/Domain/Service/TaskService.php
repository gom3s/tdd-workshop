<?php
/**
 * Created by IntelliJ IDEA.
 * User: motylg01
 * Date: 03/11/2017
 * Time: 11:02
 */

namespace App\Domain\Service;


use App\Domain\ITask;

class TaskService
{
    private $tasks = [];

    /**
     * @return array
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }

    /**
     * @param ITask $task
     */
    public function addTask(ITask $task): void
    {
        $this->tasks[] = $task;
    }
}