<?php
include_once 'conexao/conecta.php';
if(isset($_POST['btn-save']))
{
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $cpf = $_POST['cpf'];
 $telefone = $_POST['telefone'];
 
 if($crud->create($nome,$email,$cpf,$telefone))
 {
  header("Location: add-data.php?inserted");
 }
 else
 {
  header("Location: add-data.php?failure");
 }
}
?>
<?php include_once 'header2.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
 ?>
    <div class="container">
 <div class="alert alert-info">
    <strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!
 </div>
 </div>
    <?php
}
else if(isset($_GET['failure']))
{
 ?>
    <div class="container">
 <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
 </div>
 </div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

  
  <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nome</td>
            <td><input type='text' name='nome' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Email</td>
            <td><input type='text' name='email' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>CPF</td>
            <td><input type='text' name='cpf' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Telefone</td>
            <td><input type='text' name='telefone' class='form-control' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Create New Record
   </button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>