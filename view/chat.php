<div class="container">
    <table class="table table-striped border">
        <thead>
            <tr>
                <th scope="col" hidden>Date</th>
                <th scope="col" hidden>Pseudo</th>
                <th scope="col" hidden>Messages</th>
                <th scope="col" hidden>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require('functions/functions.php');

            foreach ($messages as $num => $message) {
            ?>
                <tr>
                    <td class="col-2"><?= $message['date'] ?></td>
                    <td class="col-2"><?= formatString($message['pseudo']) ?></td>
                    <td class="col-7"><?= formatString($message['content']) ?></td>
                    <td class="col-1"><a href="?delete=<?= formatString($message['id']) ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>