<?php
$pageTitle='Services'; $theme='pink'; include 'includes/header.php';
$services=$pdo->query("SELECT * FROM services ORDER BY id DESC")->fetchAll();
?>
<section class="py-5"><div class="container"><div class="row g-4">
<?php foreach($services as $s): ?><div class="col-md-6"><div class="content-card p-3 h-100"><img onerror="this.style.display='none'" class="w-100 rounded-4" style="height:260px;object-fit:cover" src="<?= htmlspecialchars($s['image']) ?>" alt="<?= htmlspecialchars($s['name']) ?>"><div class="p-3"><span class="badge text-bg-light"><?= htmlspecialchars($s['category']) ?></span><h3 class="mt-3"><?= htmlspecialchars($s['name']) ?></h3><p class="text-muted"><?= htmlspecialchars($s['description']) ?></p><a class="btn btn-brand" href="contact.php?service=<?= urlencode($s['name']) ?>">Inquire</a></div></div></div><?php endforeach; ?>
</div></div></section>
<?php include 'includes/footer.php'; ?>
