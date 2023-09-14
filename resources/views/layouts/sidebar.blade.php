<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.php"><img class="hide-on-med-and-down"
                    src="/images/logo/materialize-logo-big.png" alt="materialize logo" /><img
                    class="show-on-medium-and-down hide-on-med-and-up" src="/images/logo/materialize-logo-color.png"
                    alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Farawlah</span></a><a
                class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    @php
    $id = Auth::id();
    $user = App\Models\User::where('id', Auth::id())->active()->first();
    if (!Session::has('role_names')) {
    $roles = Spatie\Permission\Models\Role::whereIn('id', App\Models\UserRole::where('user_id', $user->id)->pluck('role_id')->toArray())->where('name', '!=', 'Retail Pos User')->get();
    $role_names = $roles->pluck('name')->toArray();
    if (in_array('SuperAdmin', $role_names, true)) {
        Session::put('role_names', 'SuperAdmin');
    }
    }

    if (Session::has('role_names')) {
        $id1 = 1;
        $id2 = 0;
    } else {
        if (!Session::has('menu_id')) {
            Session::put('menu_id', $user->menu_tree_id);
        }
        $id1 = Session::get('menu_id');
        $id2 = App\Models\MenuTreeNode::where('menu_tree_id', Session::get('menu_id'))->first()->updated_at;
    }

    if (Cache::has('menu' . $id . $id1 . $id2)) {
        $menu = Cache::get('menu' . $id . $id1 . $id2);
    } else {
        $cache = Cache::remember('menu' . $id . $id1 . $id2, 86400, function () {
            if (Session::has('role_names')) {
                $menu_ids = App\Models\MenuFunctionality::with('childrenRecursive')->whereNull('parent_id')->get();
            } else {
                $id = App\Models\MenuTreeNode::where('menu_tree_id', Session::get('menu_id'))->orderBy('functionality_id',
                    'ASC')->pluck('functionality_id')->toArray();
                $menu_ids = App\Models\MenuFunctionality::with('childrenRecursive')->whereNull('parent_id')->whereIn('id', $id)->get();
            }
            return $menu_ids;
        });
        $menu = Cache::get('menu' . $id . $id1 . $id2);
    }
    @endphp
    @if (count($menu) > 0)
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow menu_sss"
        id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        @foreach ($menu as $menu)
        @include('layouts.submenu', $menu)
        @endforeach
    </ul>
    @endif
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
        href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
