{{--<footer class="footer">--}}
{{--    <div class="container-fluid">--}}
{{--        <nav class="float-left">--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <a href="https://ghost-ai.com">--}}
{{--                        GHOST--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--        <div class="copyright float-right" id="date">--}}
{{--            , made with <i class="material-icons">favorite</i> by--}}
{{--            <a href="https://GHOST.COM" target="_blank">GHOST</a> .--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
<footer class="main-footer">
    <strong id="date"><a href="https://GHOST.COM" target="_blank">GHOST</a> &copy; {{ date("Y") }} .</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        {!! Admin::getLongVersion() !!}
    </div>
</footer>
<script>
    // const x = new Date().getFullYear();
    // let date = document.getElementById('date');
    // date.innerHTML = '&copy; ' + x + date.innerHTML;
</script>