<?php 

    include "config.php";
    $sql = "SELECT * FROM contato";
    $result = $conn->query($sql);

?>

<div class="container">
<h2>USUÁRIOS CADASTRADOS</h2>
    <table class="table">
        <thead>
            <tr>

            <th>E-mails</th>

            </tr>
        </thead>
    <tbody> 
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
            <tr>
            <td><?php echo $row['email']; ?></td>
            </tr>                       

<?php       }

    }
?>                
</tbody>
</table>
</div> 