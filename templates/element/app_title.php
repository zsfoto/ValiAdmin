		<!-- App Title -->
		<div class="app-title">
			<div>
				<h1><i class="<?= $this->fetch('AppTitleIcon') ?>"></i> <?= $this->fetch('AppTitle') ?></h1>
				<p><?= $this->fetch('AppSubTitle') ?></p>
			</div>
			<ul class="app-breadcrumb breadcrumb">
				<li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
				<li class="breadcrumb-item"><?= $this->fetch('BreadCrumbTitle') ?></li>
			</ul>
		</div>
