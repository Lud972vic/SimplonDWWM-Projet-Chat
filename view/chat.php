<div class="container">
    <div style="height:250px;" class="overflow-auto mb-2">
        <table class="table table-striped border">
            <thead>
                <tr>
                    <th scope="col" hidden>Posté le</th>
                    <th scope="col" hidden>Pseudo</th>
                    <th scope="col" hidden>Messages</th>
                    <th scope="col" hidden>Suppression</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('functions/functions.php');

                echo 'Nombre de messages ' . count($messages);

                foreach ($messages as $num => $message) {
                ?>
                    <tr>
                        <td class="col-2"><?= $message['date'] ?></td>
                        <td class="col-2"><?= formatString($message['pseudo']) ?></td>
                        <td class="col-7"><?= formatString($message['content']) ?></td>
                        <td class="col-1 text-center"><a href="?delete=<?= formatString($message['id']) ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>                  