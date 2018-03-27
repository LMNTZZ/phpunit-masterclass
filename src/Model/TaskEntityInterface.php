<?php

namespace In2it\Masterclass\Model;


interface TaskEntityInterface
{
    /**
     * Get the ID for this task entity
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Get the label for this task entity
     *
     * @return string
     */
    public function getLabel(): string;

    /**
     * Get the description for this task entity
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Check if this task entry is done or not
     *
     * @return bool
     */
    public function isDone(): bool;

    /**
     * Set the task entry to done
     *
     * @var bool
     * @return bool
     */
    public function setDone($bool): bool;

    /**
     * Get the creation date for this task entity
     *
     * @return \DateTime
     */
    public function getCreated(): \DateTime;

    /**
     * Get the modification date for this task entry
     *
     * @return \DateTime
     */
    public function getModified(): \DateTime;
}