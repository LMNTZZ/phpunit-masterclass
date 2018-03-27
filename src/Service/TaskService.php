<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 27/03/18
 * Time: 14:34
 */

namespace In2it\Masterclass\Service;


use In2it\Masterclass\Model\TaskEntityInterface;
use In2it\Masterclass\Model\TaskGatewayInterface;

class TaskService implements TaskEntityInterface, TaskGatewayInterface
{
    private $id;
    private $label;
    private $description;
    private $isDone;
    private $created;
    private $modified;

    public function __construct($id, $label, $description, $isDone, $created, $modified)
    {
        $this->id = $id;
        $this->label = $label;
        $this->description = $description;
        $this->isDone = $isDone;
        $this->created = $created;
        $this->modified = $modified;
    }

    public function getId(): string
    {
        // TODO: Implement getId() method.
    }

    public function getLabel(): string
    {
        // TODO: Implement getLabel() method.
    }

    public function getDescription(): string
    {
        // TODO: Implement getDescription() method.
    }

    public function isDone(): bool
    {
        // TODO: Implement isDone() method.
    }

    public function getCreated(): \DateTime
    {
        // TODO: Implement getCreated() method.
    }

    public function getModified(): \DateTime
    {
        // TODO: Implement getModified() method.
    }

    public function fetchAll(): \Iterator
    {
        // TODO: Implement fetchAll() method.
    }

    public function add(TaskEntityInterface $taskEntity): bool
    {
        // TODO: Implement add() method.
    }

    public function find(string $taskId): ?TaskEntityInterface
    {
        // TODO: Implement find() method.
    }

    public function remove(TaskEntityInterface $taskEntity): bool
    {
        // TODO: Implement remove() method.
    }

    public function update(TaskEntityInterface $taskEntity): bool
    {
        // TODO: Implement update() method.
    }


}