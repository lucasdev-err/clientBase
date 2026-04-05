<?php $pageTitle = 'Clients — ClientBase'; ?>
<?php require __DIR__ . '/partials/header.php'; ?>

<?php if (isset($flashMessage)): ?>
    <div class="flash flash--<?= htmlspecialchars($flashType) ?>">
        <?= htmlspecialchars($flashMessage) ?>
    </div>
<?php endif; ?>

<?php if (!empty($clients)): ?>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Street</th>
                    <th>Neighborhood</th>
                    <th>City</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= htmlspecialchars($client['clientName']) ?></td>
                    <td><?= htmlspecialchars($client['clientAge']) ?></td>
                    <td><?= htmlspecialchars($client['clientEmail']) ?></td>
                    <td><?= htmlspecialchars($client['clientStreet']) ?></td>
                    <td><?= htmlspecialchars($client['clientNeighborhood']) ?></td>
                    <td><?= htmlspecialchars($client['clientCity']) ?></td>
                    <td><?= htmlspecialchars($client['createdAt']) ?></td>
                    <td class="table-actions">
                        <a href="/edit.php?id=<?= htmlspecialchars($client['clientId']) ?>" class="btn btn-edit">Edit</a>
                        <form method="POST" action="/delete.php" class="inline-form">
                            <input type="hidden" name="clientId" value="<?= htmlspecialchars($client['clientId']) ?>">
                            <input type="hidden" name="csrfToken" value="<?= htmlspecialchars($csrfToken) ?>">
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p class="empty-state">No clients found.</p>
<?php endif; ?>

<?php require __DIR__ . '/partials/footer.php'; ?>
