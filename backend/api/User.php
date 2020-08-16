<?php
// Tutorial from Brad Traversy (https://github.com/bradtraversy/php_rest_myblog/blob/master/models/Post.php)
  class User {
    // DB
    private $conn;
    private $table = 'registeredUsers';

    // User Properties
    public $id;
    public $gender;
    public $firstName;
    public $lastName;
    public $address;
    public $postCode;
    public $city;
    public $country;
    public $company;
    public $phone;
    public $mobilePhone;
    public $fax;
    public $email;
    public $userName;
    public $password;
    public $passwordRepeat;

    // Constructor with DB
    public function __construct($db) {
        $this->conn = $db;
    }

    // Create User
    public function create() {
        // Create query
        $query = 'INSERT INTO ' . $this->table . ' SET gender = :gender, firstName = :firstName, lastName = :lastName, address = :address, postCode = :postCode, city = :city, country = :country,
        company = :company, phone = :phone, mobilePhone = :mobilePhone, fax = :fax, email = :email, userName = :userName, password = :password, passwordRepeat = :passwordRepeat';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->gender = htmlspecialchars(strip_tags($this->gender));
        $this->firstName = htmlspecialchars(strip_tags($this->firstName));
        $this->lastName = htmlspecialchars(strip_tags($this->lastName));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->postCode = htmlspecialchars(strip_tags($this->postCode));
        $this->city = htmlspecialchars(strip_tags($this->city));
        $this->country = htmlspecialchars(strip_tags($this->country));
        $this->company = htmlspecialchars(strip_tags($this->company));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->mobilePhone = htmlspecialchars(strip_tags($this->mobilePhone));
        $this->fax = htmlspecialchars(strip_tags($this->fax));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->userName = htmlspecialchars(strip_tags($this->userName));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->passwordRepeat = htmlspecialchars(strip_tags($this->passwordRepeat));

        // Bind data
        $stmt->bindParam(':gender', $this->gender);
        $stmt->bindParam(':firstName', $this->firstName);
        $stmt->bindParam(':lastName', $this->lastName);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':postCode', $this->postCode);
        $stmt->bindParam(':city', $this->city);
        $stmt->bindParam(':country', $this->country);
        $stmt->bindParam(':company', $this->company);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':mobilePhone', $this->mobilePhone);
        $stmt->bindParam(':fax', $this->fax);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':userName', $this->userName);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':passwordRepeat', $this->passwordRepeat);

        // Execute query
        if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

  }