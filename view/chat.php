<div class="container">
    <div style="height:500px;" class="overflow-auto mb-4">
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

                echo 'Nombre de messages ' . count($messages) . ' - Les messages les plus récents sont en haut <i class="fas fa-sort-numeric-up"></i>';

                foreach ($messages as $num => $message) {
                ?>
                <div class="m-2"></div>
                    <tr>
                        <td class="col-2"><?= $message['date'] ?></td>
                        <td class="col-2"><?= formatString($message['pseudo']) ?></td>
                        <td class="col-7"><?= formatString($message['content']) ?></td>
                        <td class="col-1 text-center">
                            <a href="?delete=<?= formatString($message['id']) ?>&pseudo=<?= $message['pseudo'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')">
                                <?= (isset($_POST['pseudo_fe']) && $_POST['pseudo_fe'] === $message['pseudo']) ? '<i class="fas fa-trash-alt"></i>' : '' ?>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<hr>