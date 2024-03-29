<!-- Sidebar - Brand -->

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
	<div class="sidebar-brand-icon rotate-n-15">
		<i class="fas fa-desktop"></i>
	</div>
	<div class="sidebar-brand-text mx-3">PCID</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item{{ request()->routeIs('employees.*') ? ' active' : '' }}">
	<a class="nav-link" href="{{ route('employees.index') }}">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
	Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item{{ request()->routeIs('positions.*', 'hardwares.*', 'accessories.*') ? ' active' : '' }}">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
		aria-controls="collapseTwo">
		<i class="fas fa-fw fa-cog"></i>
		<span>Components</span>
	</a>
	<div id="collapseTwo"
		class="collapse{{ request()->routeIs('positions.*', 'hardwares.*', 'accessories.*') ? ' show' : '' }}"
		aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<h6 class="collapse-header">Custom Components:</h6>
			<a class="collapse-item{{ request()->routeIs('positions.*') ? ' active' : '' }} "
				href="{{ route('positions.index') }}">
				{{ trans('app.position.alias') }}
			</a>
			<a class="collapse-item{{ request()->routeIs('hardwares.*') ? ' active' : '' }} "
				href="{{ route('hardwares.index') }}">
				{{ trans('app.hardware.alias') }}
			</a>
			<a class="collapse-item{{ request()->routeIs('accessories.*') ? ' active' : '' }} "
				href="{{ route('accessories.index') }}">
				{{ trans('app.accessory.alias') }}
			</a>
		</div>
	</div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item{{ request()->routeIs('users.*') ? ' active' : '' }}">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
		aria-controls="collapseUtilities">
		<i class="fas fa-fw fa-wrench"></i>
		<span>Utilities</span>
	</a>
	<div id="collapseUtilities" class="collapse{{ request()->routeIs('users.*') ? ' show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<h6 class="collapse-header">Custom Utilities:</h6>
			<a class="collapse-item{{ request()->routeIs('users.*') ? ' active' : '' }}" href="{{ route('users.index') }}">
				{{ trans('app.user.alias') }}
			</a>
		</div>
	</div>
</li>
