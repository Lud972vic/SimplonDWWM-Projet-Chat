<form action="index.php" method="post">
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label for="pseudo_fe" class="form-label" hidden>Pseudo</label>
                <input type="text" value="<?= isset($_POST['pseudo_fe']) ? $_POST['pseudo_fe'] : '' ?>" class="form-control" id="pseudo_fe" name="pseudo_fe" placeholder="Entrer votre pseudo" required>
            </div>
        </div>
        <div class="col-8">
            <label for="message_fe" class="form-label" hidden>Message</label>
            <textarea class="form-control" id="message_fe" name="message_fe" rows="3" placeholder="Entrer votre message" required></textarea>
        </div>
        <div class="col mt-2 mb-5">
            <button type="submit" name="submit" class="btn btn-outline-warning"><i class="fas fa-paper-plane"></i> Envoyer</button>
        </div>
    </div>
</form>