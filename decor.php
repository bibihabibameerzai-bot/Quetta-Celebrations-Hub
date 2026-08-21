<?php
$pageTitle='Event Decoration'; $theme='pink'; include 'includes/header.php';
$services=$pdo->query("SELECT * FROM services WHERE category='Event Decoration' OR category='Corporate Events' ORDER BY id")->fetchAll();
?>
<section class="py-5"><div class="container">
<div class="section-title"><p class="eyebrow">EVENT DECORATION</p><h2>Beautiful spaces for meaningful moments</h2><p class="text-muted">From wedding stages to birthday themes, choose a style and send us your requirements.</p></div>
<div class="row g-4">
<?php foreach($services as $s): ?>
<div class="col-md-6"><article class="content-card h-100 p-3">
<img onerror="this.style.display='none'" src="<?= htmlspecialchars($s['image']) ?>" class="w-100 rounded-4" style="height:280px;object-fit:cover" alt="<?= htmlspecialchars($s['name']) ?>">
<div class="p-3"><span class="badge" style="background:#f8e8ee;color:#8f3558"><?= htmlspecialchars($s['category']) ?></span>
<h3 class="mt-3"><?= htmlspecialchars($s['name']) ?></h3><p class="text-muted"><?= htmlspecialchars($s['description']) ?></p>
<a class="btn btn-brand" href="contact.php?service=<?= urlencode($s['name']) ?>">Inquire About This Service</a></div></article></div>
<?php endforeach; ?>
</div></div></section>
<?php include 'includes/footer.php'; ?>