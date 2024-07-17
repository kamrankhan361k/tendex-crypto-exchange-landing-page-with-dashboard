<div class="sidebar">
    <div class="brand-logo">
        <a href="{{ url('/dashboard') }}"
            ><img src="./images/logoi.png" alt="" width="30" />
        </a>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a
                    href="{{ url('/dashboard') }}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Home"
                >
                    <span><i class="bi bi-house"></i></span>
                </a>
            </li>
            <li>
                <a
                    href="{{ url('trade') }}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Trade"
                >
                    <span><i class="bi bi-globe2"></i></span>
                </a>
            </li>
            <li>
                <a
                    href="{{ url('wallet') }}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Wallet"
                >
                    <span><i class="bi bi-wallet2"></i></span>
                </a>
            </li>
            <li>
                <a
                    class="setting_"
                    href="{{ url('settings-profile') }}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Settings"
                >
                    <span><i class="bi bi-gear"></i></span>
                </a>
            </li>
            <li class="logout">
                <a
                    href="{{ url('signin') }}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Signout"
                >
                    <span><i class="bi bi-power"></i></span>
                </a>
            </li>
        </ul>

        <p class="copyright">&#169; <a href="#">Qkit</a></p>
    </div>
</div>
