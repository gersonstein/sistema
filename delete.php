<?php
include_once 'conexao/conecta.php';

if(isset($_POST['btn-del']))
{
 $id = $_GET['delete_id'];
 $crud->delete($id);
 header("Location: delete.php?deleted"); 
}

?>

<?php include_once 'header2.php'; ?>

<div class="clearfix"></div>
<body>
  
<div class="wrap">
<div class="main">

<div class="container">

 <?php
 if(isset($_GET['deleted']))
 {
  ?>
        <div class="alert alert-success">
     <strong>Success!</strong> record was deleted... 
  </div>
        <?php
 }
 else
 {
  ?>
        <div class="alert alert-danger">
     <strong>Sure !</strong> to remove the following record ? 
  </div>
        <?php
        header("Refresh: 5, testedecadastro.php");
 }
 ?> 
</div>
</div>
</div>

<div class="clearfix"></div>
<div class="wrap">
<div class="main">
<div class="container">
  
  <?php
  if(isset($_GET['delete_id']))
  {
   ?>
         <table class='table table-bordered table-responsive'>
         <tr>
         <th>#</th>
         <th>Nome</th>
         <th>Email</th>
         <th>Senha</th>
         <th>CPF</th>
         <th>Telefone</th>
         </tr>
         <?php
         $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE id=:id");
         $stmt->execute(array(":id"=>$_GET['delete_id']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php print($row['id']); ?></td>
             <td><?php print($row['nome']); ?></td>
             <td><?php print($row['email']); ?></td>
             <td><?php print($row['senha']); ?></td>
             <td><?php print($row['cpf']); ?></td>
           <td><?php print($row['telefone']); ?></td>
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
  }
  ?>
</div>
</div>
</div>
<div class="wrap">
<div class="main">
<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
 ?>
   <form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; YES</button>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
    </form>  
 <?php
}
else
{
 ?>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
    <?php
}
?>
</p>
</div> 
</div>
</div>


<?php include_once 'footer2.php'; ?>
</body>