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
  public function listarAlunos(){
    try{
    $sql = "SELECT * FROM $this->nome";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }catch(PDOException $e){
      die("Erro na conexão:" . $e->getMessage() . "\n");
    }
   }
}
$alunos = new tabela("alunos","aws-1-sa-east-1.pooler.supabase.com", "6543", "postgres", "postgres.kwebdjvwxeczoxlxzckk","Ec827X0sLCVH4kiR");
print_r($alunos->listarAlunos());
?>
