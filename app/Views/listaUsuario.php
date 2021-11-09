<table class="table">
    <thead>
        <th>Código</th>
        <th>Email</th>
        <th>Alterar</th>
        <th>Excuir</th>

    </thead>
    <tbody>
     <?php foreach($usuarios as $usuario):?>   
    <tr>
        <td><?php echo($usuario->codusu)?> </td>
        <td><?php echo($usuario->emailUsu)?></td>
        <td> x </td>
        <td> 
    <form method="POST">
<input type="text" value= "<?php echo($usuario->codusu)?>">
<button type="subimit" class="btn btn-warning">Deletar</button>
    </form>        
    
    </td>
        
    </tr>
    <?php endforeach;?>
    </tbody>
</table>