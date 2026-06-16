<?php
class tabela{
    public $nome;
    public $pdo;
  public function __construct($nome, $host, $port, $dbname, $user, $password){
    $this->nome = $nome;
    try{
      $this->pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Conexão realizada com sucesso!";
    }catch(PDOException $e){
    die("Erro na conexão:" . $e->getMessage() . "\n");

  }
  }
}
$alunos = new tabela("alunos","db.kwebdjvwxeczoxlxzckk.supabase.co", "5432", "postgres", "postgres","Ec827X0sLCVH4kiR")
?>
