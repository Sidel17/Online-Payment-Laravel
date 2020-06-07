<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="navigation-bar">
			
			<div class="navigation-bar-container">
				<div class="navigation-brand">
					<a href=#>
						<img src="{{ asset('img/popay.jpeg') }}" width="70px" heigth="70px" >
					</a>
				</div>
				<div class="navigation-container">
				<nav class="navigation-nav">
					<ul class="navigation-list">
						<li>
							<a href="/index">Home</a>
						</li>
						<li>
							<div class="dropdown">
							<a href=#>Transaction</a>
								<div class="dropdown-content">
								<a href="/index/transfer">Transfer</a>
								<a href="/index/payment">Payment</a>
								<a href="/index/topup">Top-up</a>
							  </div>							
							
							</div>
						</li>
						<li>
							<a href="/index/saving">Saving</a>
						</li>
						<li>
							<a href="/index/history">History</a>
						</li>
					</ul>
					<ul class="navigation-list_secondary">
						<li>
							<a href='/index/editprofil' class="navigation-icon">
								<img src="{{ asset('img/setting.png') }}" width="26px" heigth="26px" >
							</a>
						</li>
						<li>
							<a href="/login">Logout</a>
						</li>
					</nav>
				</div>
				</div>
			</div>
		</div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
