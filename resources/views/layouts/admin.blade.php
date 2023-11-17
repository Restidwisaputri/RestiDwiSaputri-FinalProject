<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page_title ?? 'Dashboard' }} - Restoran</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('assets/vendor/adminlte') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/vendor/adminlte') }}/dist/css/adminlte.min.css?v=3.2.0">
    @yield('css')
    <script nonce="88d5dc70-7ae8-45e8-a9c1-5cdf564f3164">
        (function(w, d) {
            ! function(bb, bc, bd, be) {
                bb[bd] = bb[bd] || {};
                bb[bd].executed = [];
                bb.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bb.zaraz.q = [];
                bb.zaraz._f = function(bf) {
                    return async function() {
                        var bg = Array.prototype.slice.call(arguments);
                        bb.zaraz.q.push({
                            m: bf,
                            a: bg
                        })
                    }
                };
                for (const bh of ["track", "set", "debug"]) bb.zaraz[bh] = bb.zaraz._f(bh);
                bb.zaraz.init = () => {
                    var bi = bc.getElementsByTagName(be)[0],
                        bj = bc.createElement(be),
                        bk = bc.getElementsByTagName("title")[0];
                    bk && (bb[bd].t = bc.getElementsByTagName("title")[0].text);
                    bb[bd].x = Math.random();
                    bb[bd].w = bb.screen.width;
                    bb[bd].h = bb.screen.height;
                    bb[bd].j = bb.innerHeight;
                    bb[bd].e = bb.innerWidth;
                    bb[bd].l = bb.location.href;
                    bb[bd].r = bc.referrer;
                    bb[bd].k = bb.screen.colorDepth;
                    bb[bd].n = bc.characterSet;
                    bb[bd].o = (new Date).getTimezoneOffset();
                    if (bb.dataLayer)
                        for (const bo of Object.entries(Object.entries(dataLayer).reduce(((bp, bq) => ({
                                ...bp[1],
                                ...bq[1]
                            })), {}))) zaraz.set(bo[0], bo[1], {
                            scope: "page"
                        });
                    bb[bd].q = [];
                    for (; bb.zaraz.q.length;) {
                        const br = bb.zaraz.q.shift();
                        bb[bd].q.push(br)
                    }
                    bj.defer = !0;
                    for (const bs of [localStorage, sessionStorage]) Object.keys(bs || {}).filter((bu => bu
                        .startsWith("_zaraz_"))).forEach((bt => {
                        try {
                            bb[bd]["z_" + bt.slice(7)] = JSON.parse(bs.getItem(bt))
                        } catch {
                            bb[bd]["z_" + bt.slice(7)] = bs.getItem(bt)
                        }
                    }));
                    bj.referrerPolicy = "origin";
                    bj.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bb[bd])));
                    bi.parentNode.insertBefore(bj, bi)
                };
                ["complete", "interactive"].includes(bc.readyState) ? zaraz.init() : bb.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="{{ asset('assets/vendor/adminlte') }}/index3.html" class="brand-link">
                <img src="{{ asset('assets/vendor/adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">RESTORAN</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets/vendor/adminlte') }}/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}"
                                class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/master/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-files"></i>
                                <p>
                                    Master
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.master.daftar_makanan_minuman.index') }}"
                                        class="nav-link {{ request()->is('admin/master/daftar_makanan*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Makanan Minuman</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.master.restoran.index') }}"
                                        class="nav-link {{ request()->is('admin/master/restoran*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Restoran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">Transaksi</li>
                        <li class="nav-item">
                            <a href="{{ route('admin.transaksi.create') }}"
                                class="nav-link {{ request()->is('admin/transaksi/create') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                <p>
                                    Buat Transaksi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.transaksi.index') }}"
                                class="nav-link {{ request()->is('admin/transaksi/index') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Transaksi
                                </p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                this.closest('form').submit();"
                                    class="nav-link bg-danger">

                                    <i class="nav-icon fas fa-power-off"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{ $page_title ?? 'Dashboard' }}</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">

                @yield('content')

            </section>

        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>


    <script src="{{ asset('assets/vendor/adminlte') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('assets/vendor/adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/vendor/adminlte') }}/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script>
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
    @yield('js')
</body>

</html>
