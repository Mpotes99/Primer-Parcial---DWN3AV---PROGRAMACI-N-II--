<?PHP

class Conexion
{
    private const DB_HOST = 'localhost';
    
    private const DB_USER = 'root';
    private const DB_PASS = '';
    private const DB_NAME = 'datos_stanley';

    private const DB_DSN = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . ';charset=utf8mb4';


    private PDO $db;


    public function __construct()
    {

        try {
            $this->db = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS);
        } catch (Exception $e) {
            die('Error al conectar con MySQL.');
        }
    }

    /**
     * Metodo que devuelve una conexión PDO lista para usar
     * @return PDO
     */
    public function getConexion(): PDO
    {
        return $this->db;
    }
}