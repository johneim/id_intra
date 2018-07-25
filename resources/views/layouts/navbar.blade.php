<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/"><img class="logo-img" src="{{URL::asset('/images/infinitedata_logo.jpg')}}" alt="InfiniteDATA Logo"></a>
            <ul class="right hide-on-med-and-down">
                <li @if(isset($activenavbar) and $activenavbar == 'newsandevents') class="active" @endif><a href="/newsandevents">News and Events</a></li>
                <li @if(isset($activenavbar) and $activenavbar == 'company') class="active" @endif><a href="/company">About Company</a></li>
                <li @if(isset($activenavbar) and $activenavbar == 'directory') class="active" @endif><a href="/directory">Directory</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Resources<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
</div>