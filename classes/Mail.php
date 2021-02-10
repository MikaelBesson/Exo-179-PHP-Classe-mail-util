<?php


class Mail {

    protected string $nom;
    protected string $destinataire;
    protected string $sujet;
    protected string $message;


    /**
     * mail constructor.
     * @param string $from
     * @param string $to
     * @param string $subject
     * @param string $message
     */
    public function __construct(string $from, string $to, string $subject, string $message) {
        $this->nom = $from;
        $this->destinataire = $to;
        $this->sujet = $subject;
        $this->message =$message;
    }


    /**
     *
     */
    public function sendMail(){
        return mail($this->getDestinataire(),$this->getSujet(),$this->getMessage());

    }

    /**
     * return user name
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * set user name
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * return destinataire
     * @return string
     */
    public function getDestinataire(): string
    {
        return $this->destinataire;
    }

    /**
     * set destinataire
     * @param string $destinataire
     */
    public function setDestinataire(string $destinataire): void
    {
        $this->destinataire = $destinataire;
    }

    /**
     * return le sujet
     * @return string
     */
    public function getSujet(): string
    {
        return $this->sujet;
    }

    /**
     * set sujet
     * @param string $sujet
     */
    public function setSujet(string $sujet): void
    {
        $this->sujet = $sujet;
    }

    /**
     * return message
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * set message
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

}