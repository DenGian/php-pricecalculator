<?php
declare(strict_types=1);

class Client
{
    //properties
    private int $id;
    private string $lastname;
    private string $firstname;
    private int $groupId;
    private int $fixedDiscount;
    private int $variableDiscount;

    //constructor
    /**
     * @param int $id
     * @param string $lastname
     * @param string $firstname
     * @param int $groupId
     * @param int $fixedDiscount
     * @param int $variableDiscount
     */
    public function __construct(int $id, string $lastname, string $firstname, int $groupId, int $fixedDiscount, int $variableDiscount)
    {
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
    }


    //getters to access the private properties
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @return int
     */
    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }

    /**
     * @return int
     */
    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }


}