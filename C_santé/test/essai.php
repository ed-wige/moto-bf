<?php
// ne pas oublier l'import de la classe Kit
class Client
{
    private $civilite;
    private $nom;
    private $prenom;

    public function __construct(array $dbRow)
    {
        // attention sans vérifier l'existance des index dans le tableau cette façon de faire est une source d'ennuie assurée.
        $this->civilite = $dbRow['civilite'];
        $this->nom = $dbRow['nom'];
        $this->prenom = $dbRow['prenom'];

    }

    /**
     * @return mixed
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * @param mixed $civilite
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    private function getRandomId()
    {
        return str_replace('.', '', microtime(true) . rand());
    }

    public function Registerppi()
    {
        $res = Kit::Registerppi(array('ppi' => self::getRandomId(), // j'ai supposé que le ppi c'est un "id"
            'clientMail' => 'mail@mail.fr',
            'clientTitle' => $this->civilite,
            'clientFirstName' => $this->prenom,
            'clientLastName' => $this->nom));
        // l'affichage du message ne devrait pas être de la responsabilité de cette classe
        if (isset($res->lwError))
            print 'Error, code ' . $res->lwError->CODE . ' : ' . $res->lwError->MSG;
        else
            print '<br/>Wallet created : ' . $res->wallet->ID;
    }
}