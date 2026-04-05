<?php $pageTitle = 'New Client — ClientBase'; ?>
<?php require __DIR__ . '/partials/header.php'; ?>

<h1>New Client</h1>

<?php if (!empty($errors)): ?>
    <div class="flash flash--error">Please fix the errors below.</div>
<?php endif; ?>

<form method="POST" class="form" action="/create.php">
    <input type="hidden" name="csrfToken" value="<?= htmlspecialchars($csrfToken) ?>">

    <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-input" value="<?= htmlspecialchars($old['name'] ?? '') ?>" required>
        <?php if (isset($errors['name'])): ?>
            <span class="form-error"><?= htmlspecialchars($errors['name']) ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="age" class="form-label">Age</label>
        <input type="number" id="age" name="age" class="form-input" value="<?= htmlspecialchars($old['age'] ?? '') ?>" required>
        <?php if (isset($errors['age'])): ?>
            <span class="form-error"><?= htmlspecialchars($errors['age']) ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-input" value="<?= htmlspecialchars($old['email'] ?? '') ?>" required>
        <?php if (isset($errors['email'])): ?>
            <span class="form-error"><?= htmlspecialchars($errors['email']) ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="street" class="form-label">Street</label>
        <input type="text" id="street" name="street" class="form-input" value="<?= htmlspecialchars($old['street'] ?? '') ?>" required>
        <?php if (isset($errors['street'])): ?>
            <span class="form-error"><?= htmlspecialchars($errors['street']) ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="neighborhood" class="form-label">Neighborhood</label>
        <input type="text" id="neighborhood" name="neighborhood" class="form-input" value="<?= htmlspecialchars($old['neighborhood'] ?? '') ?>" required>
        <?php if (isset($errors['neighborhood'])): ?>
            <span class="form-error"><?= htmlspecialchars($errors['neighborhood']) ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="city" class="form-label">City</label>
        <input type="text" id="city" name="city" class="form-input" value="<?= htmlspecialchars($old['city'] ?? '') ?>" required>
        <?php if (isset($errors['city'])): ?>
            <span class="form-error"><?= htmlspecialchars($errors['city']) ?></span>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?php require __DIR__ . '/partials/footer.php'; ?>
