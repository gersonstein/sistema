<?php
include_once 'conecta.php';
if(isset($_POST['btn-update']))
{
 $id = $_GET['edit_id'];
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $cpf = $_POST['cpf'];
 $telefone = $_POST['telefone'];
 
 if($crud->update($id,$nome,$email,$cpf,$telefone))
 {
  $msg = "<div class='alert alert-info'>
    <strong>WOW!</strong> Record was updated successfully <a href='index.php'>HOME</a>!
    </div>";
 }
 else
 {
  $msg = "<div class='alert alert-warning'>
    <strong>SORRY!</strong> ERROR while updating record !
    </div>";
 }
}

if(isset($_GET['edit_id']))
{
 $id = $_GET['edit_id'];
 extract($crud->getID($id)); 
}

?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
 echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container">
  
     <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nome</td>
            <td><input type='text' name='nome' class='form-control' value="<?php echo $nome; ?>" required></td>
        </tr>
 
        <tr>
            <td>Email</td>
            <td><input type='text' name='email' class='form-control' value="<?php echo $email; ?>" required></td>
        </tr>
 
        <tr>
            <td>CPF</td>
            <td><input type='text' name='cpf' class='form-control' value="<?php echo $cpf; ?>" required></td>
        </tr>
 
        <tr>
            <td>Telefone</td>
            <td><input type='text' name='telefone' class='form-control' value="<?php echo $telefone; ?>" required></td>
        </tr>
 
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
       <span class="glyphicon glyphicon-edit"></span>  Update this Record
    </button>
                <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>