<?php 

class Auth
{
    protected $id;
    protected $username;
    protected $password;
   

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) 
        {
            $methode = 'set'.ucfirst($key);
            if (method_exists($this,$methode)) 
            {
                $this->$methode($value);
            }
        }
    }

    public function setId($id)
    {
        $id=(int)$id;
        if ($id>0) 
        {
            $this->id = $id;
        }
    }

    public function setuser($username)
    {
        if (is_string($username)) {
            $this->username = $username;
        }
    }
    
    public function setPassword($password)
    {
        if (is_string($password)) {
            $this->password = $password;
        }
    }

    
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

}