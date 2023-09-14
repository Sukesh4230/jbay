@php
if (Session::has('role_names')) {
    $id = App\Models\MenuFunctionality::orderBy('id', 'ASC')->pluck('id')->toArray();
} else {
    $id = App\Models\MenuTreeNode::where('menu_tree_id', Session::get('menu_id'))->orderBy('functionality_id', 'ASC')->pluck('functionality_id')->toArray();
}
@endphp
@if (in_array($menu->id, $id, true) && $menu->IS_active == 1)
    @php
        $active='';
        $menu_open = '';
        $main_root=[];
    $count = App\Models\MenuFunctionality::where('parent_id', $menu->id)->count();
    $main_menu = App\Models\MenuFunctionality::where('parent_id', null)->where('id', $menu->id)->first();
    if(isset($main_menu)){
        $main_menu_id=$main_menu->id;
    }
    if (isset($main_menu_id)) {
        $menu_sub = App\Models\MenuFunctionality::where('parent_id', $menu->id)->get();
        if (count($menu_sub) > 0) {
            foreach ($menu_sub as $sub) {
                $menu_sub1 = App\Models\MenuFunctionality::where('parent_id', $sub->id)->get();
                if(count($menu_sub1)>0){
                    foreach ($menu_sub1 as $sub) {
                        $rootname = App\Models\MenuFunctionality::with('childrenRecursive')->where('id', $sub->id)->first()->rootname;
                        if ($rootname != null) {
                            $rootName = explode("/", $rootname);
                            array_push($main_root, $rootName[1]);
                        }
                    }
                }
                else{
                    $rootname = App\Models\MenuFunctionality::with('childrenRecursive')->where('id', $sub->id)->first()->rootname;
                    if ($rootname != null) {
                        $rootName = explode("/", $rootname);
                        array_push($main_root, $rootName[1]);
                    }
                }
            }
        }
        $url = url()->current() ? url()->current() : "///";
        $url_array = explode("/", $url);
        $url_data = isset($url_array[3]) ? $url_array[3] : "";

        if(in_array($url_data, $main_root, true) ){
            $active='active';
            $menu_open = 'menu-open';
        }
    }
    @endphp
<li class="{{ $active }} ">

    @if ($count > 0)
    <a class="collapsible-header waves-effect waves-cyan submenu" href="JavaScript:void(0)">
        <i class="material-icons">{{ $menu->icon }}</i>
        <span class="menu-title" data-i18n="Dashboard">{{ $menu->name }} </span>
    </a>
    @else
    <?php
    $url = url()->current() ? url()->current() : "///";
    $url_array = explode("/", $url);
    $root = $menu->rootname ? $menu->rootname : "/";
    $root_array = explode("/", $root);
    $url_data = isset($url_array[3]) ? $url_array[3] : "";
    $root_data = isset($root_array[1]) ? $root_array[1] : "";
    ?>
    <li class="{{ $url_data==$root_data? 'active':"" }} sub">
        <a href="{{ $menu->rootname }}" class="{{ $url_data==$root_data? 'active':"" }}"><i class="material-icons">subdirectory_arrow_right</i>
            <span data-i18n="Regions">{{ $menu->name }}</span>
        </a>
    </li>
@endif
@if (count($menu['children']) > 0)
<?php
$root_name = [];
foreach ($menu['children'] as $children) {
    $r_name = $children->rootname ? $children->rootname : "/";
    $c = explode("/", $r_name);
    array_push($root_name, $c[1]);
}
$url = url()->current() ? url()->current() : "///";
$url_array = explode("/", $url);
$url_data = isset($url_array[3]) ? $url_array[3] : "";

$menu_open = '';
$sub_folder=App\Models\MenuFunctionality::whereNull('icon')->where('rootname','/'.$url_data)->first();
if (in_array($url_data, $root_name, true) && isset($sub_folder)) {
    $menu_open = 'menu-open';
}
?>
<div class="collapsible-body {{ $menu_open }}">
    <ul class="collapsible collapsible-sub submenu-ul" data-collapsible="accordion">
        @foreach($menu['children'] as $menu)
        @include('layouts.submenu', $menu)
        @endforeach
    </ul>
</div>
@endif
</li>
@endif
