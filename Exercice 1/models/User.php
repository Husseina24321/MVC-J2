<?php
class User{
    private ?int $id = null;
    private string $email;
    private string $first_name;
    private string $last_name;
    public function __construct(?int $id, string $email, string $first_name, string $last_name)
    {
        $this->id = $id;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    
    public function getId(): ?int {return $this->id;}
    public function setId(?int $id): void {$this->id = $id;}
    public function getEmail(): string {return $this->email;}
    public function setEmail($email): void {$this->email = $email;}
    public function getFirstName(): string {return $this->first_name; }
    public function setFirstName($first_name): void{ $this->first_name = $first_name;}
    public function getLastName(): string {return $this->last_name;}
    public function setLastName($last_name): void{$this->last_name = $last_name; }
}