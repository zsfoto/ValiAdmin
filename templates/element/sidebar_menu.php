	<!-- Sidebar menu-->
	<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
	<aside class="app-sidebar">
	
		<div class="app-sidebar__user"><?= $this->Html->image('ValiAdmin./img/avatar.png', ['class' => 'app-sidebar__user-avatar', 'alt' => 'User Image']) ?>
		<div>
				<p class="app-sidebar__user-name"><?= __('Jeff Shoemaker') ?></p>
				<p class="app-sidebar__user-designation"><?= __('Fullstack Developer') ?></p>
			</div>
		</div>
		
		<ul class="app-menu">
			
			<li><?= $this->Html->link('<i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">' . __('Posts') . '</span>', ['controller' => 'Posts', 'action' => 'index'], ['class' => 'app-menu__item', 'escapeTitle' => false]) ?></li>
			
			<li class="treeview">
			
				<a class="app-menu__item" href="#" data-toggle="treeview">
					<i class="app-menu__icon bi bi-laptop"></i><span class="app-menu__label"><?= __('Admin') ?></span><i class="treeview-indicator bi bi-chevron-right"></i>
				</a>

				
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="bootstrap-components.html"><i class="icon bi bi-circle-fill"></i> Bootstrap Elements</a></li>
					<li>
						<?= $this->Html->link('<i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">' . __('Creators') . '</span>', ['controller' => 'Creators', 'action' => 'index'], ['class' => 'treeview-item', 'escapeTitle' => false]) ?>

						<a class="treeview-item" href="https://icons.getbootstrap.com/" target="_blank" rel="noopener"><i class="icon bi bi-circle-fill"></i>
							Font Icons
						</a>
					</li>
					<li>
						<a class="treeview-item" href="ui-cards.html">
							<i class="icon bi bi-circle-fill"></i> Cards
						</a>
					</li>
					<li>
						<a class="treeview-item" href="widgets.html">
							<i class="icon bi bi-circle-fill"></i> Widgets
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</aside>
