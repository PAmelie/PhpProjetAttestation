<?php
// NON utilisé
?>
<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Ville</th>
                <th>Mail</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
         <tr>
                <td><?php echo $row['ville'];?></td>
                <td><?php echo $row['mail'];?></td>
                <td></td>
            </tr>
             </table>
</div>


<div class="row justify-content-center">
<form action="" method="POST">
    <div class="form-group">
    <label>Ville</label>
    <input type="text" name="ville" class="form-control" value="Entrer la ville">
    </div>
    <div class="form-group">
    <label>Mail</label>
    <input type="text" name="mail" class="form-control" value="Entrer le mail">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    </div>
</form>
</div>
