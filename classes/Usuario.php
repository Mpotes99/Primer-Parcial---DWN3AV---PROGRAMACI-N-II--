<?PHP

class Usuario
{
    private $id;
    private $nombre_usuario;
    private $email;
    private $contrasena;
    private $validado;
    private $permisos;


    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

}