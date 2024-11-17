<?php
require('connection.php');

$query = "SELECT mensagens.id, mensagens.mensagens, mensagens.data_envio, user.username FROM mensagens
          JOIN user ON mensagens.id_users = user.idusers ORDER BY mensagens.data_envio ASC";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()):
?>
    <div class="message">
        <strong><?php echo htmlspecialchars($row['username']); ?>:</strong>
        <p><?php echo nl2br(htmlspecialchars($row['mensagens'])); ?></p>
        <small><?php echo $row['data_envio']; ?></small>
    </div>
<?php endwhile; ?>