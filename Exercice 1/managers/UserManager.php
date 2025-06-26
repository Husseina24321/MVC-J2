<?php
class UserManager extends AbstractManager {
    public function __construct()
    {
        parent::__construct();
    }
    public function findfAll(): array{
        $query = $this->db->query("SELECT * FROM users");
        $results = $query->fetchAll();

        $users = [];
        foreach ($results as $row) {
            $users[] = new User(
                $row['id'],
                $row['email'],
                $row['first_name'],
                $row['last_name']
            );
        }

        return $users;
    }
    public function findOneById(int $id): ?User{
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();

        if ($row) {
            return new User(
                $row['id'],
                $row['email'],
                $row['first_name'],
                $row['last_name']
            );
        }

        return null;
    }
    public function insert(User $user): void{
        $stmt = $this->db->prepare("
            INSERT INTO users (email, first_name, last_name)
            VALUES (:email, :first_name, :last_name)
        ");
        $stmt->execute([
            'email' => $user->getEmail(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName()
        ]);

        $user->setId((int)$this->db->lastInsertId());
    }
    public function update(User $user): void{
        $stmt = $this->db->prepare("
            UPDATE users
            SET email = :email, first_name = :first_name, last_name = :last_name
            WHERE id = :id
        ");
        $stmt->execute([
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName()
        ]);
    }
    public function delete(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}