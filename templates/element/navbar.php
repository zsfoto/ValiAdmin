	<!-- Navbar-->
	<header class="app-header"><a class="app-header__logo" href="index.html"><?= _('My Vali Admin') ?></a>
		<!-- Sidebar toggle button-->
		<a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
		
		<!-- Navbar Right Menu-->
		<ul class="app-nav">
			<li class="app-search">
				<input class="app-search__input" type="search" placeholder="<?= _('Search') ?>">
				<button class="app-search__button"><i class="bi bi-search"></i></button>
			</li>

			<?= $this->element('ValiAdmin.navbar_notifications') ?>
			
			<?= $this->element('ValiAdmin.navbar_user_menu') ?>
			
		</ul>
	</header>
