<aside>
    @foreach($tops as $top)
        @include("themes::themephim66.inc.rightbar." . $top['template'])
    @endforeach
</aside>
