<!doctype html>
<html>
	<head>
		<title>Welcome to TrackIt</title>

		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.js"></script>
	</head>
	<body>

		<style {csp-style-nonce}>
			div.logo {
				height: 200px;
				width: 155px;
				display: inline-block;
				opacity: 0.12;
				position: absolute;
				z-index: 0;
				top: 2rem;
				left: 50%;
				margin-left: -73px;
			}
			body {
				height: 100%;
				background: #fafafa;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				color: #777;
				font-weight: 300;
			}
			h1 {
				font-weight: lighter;
				letter-spacing: 0.8rem;
				font-size: 3rem;
				margin-top: 145px;
				margin-bottom: 0;
				color: #222;
				position: relative;
				z-index: 1;
			}
			.wrap {
				max-width: 1024px;
				margin: 5rem auto;
				padding: 2rem;
				background: #fff;
				text-align: center;
				border: 1px solid #efefef;
				border-radius: 0.5rem;
				position: relative;
			}
			.version {
				margin-top: 0;
				color: #999;
			}
			.guide {
				margin-top: 3rem;
				text-align: left;
			}
			pre {
				white-space: normal;
				margin-top: 1.5rem;
			}
			code {
				background: #fafafa;
				border: 1px solid #efefef;
				padding: 0.5rem 1rem;
				border-radius: 5px;
				display: block;
			}
			p {
				margin-top: 1.5rem;
			}
			.footer {
				margin-top: 2rem;
				border-top: 1px solid #efefef;
				padding: 1em 2em 0 2em;
				font-size: 85%;
				color: #999;
			}
			a:active,
			a:link,
			a:visited {
				color: #dd4814;
			}
		</style>

		<div class="wrap">

			<div class="logo">
				
			</div>

			<h1>Welcome to TrackIt</h1>

			<p class="version">Track whatever you want</p>

			<div class="guide">
				<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

				<p>If you would like to edit this page you'll find it located at:</p>

				<pre>
				<code>
					Your series: <?= $series_id; ?>
				</code>
				</pre>

				<p>
					<?php if(isset($stored_value)) :?>
						Stored: <?= $stored_value; ?>
					<?php endif ?>
				</p>

				<pre>
				<code>
					app/Controllers/Home.php
				</code>
				</pre>

				<p>If you are exploring CodeIgniter for the very first time, you
					should start by reading the
					<a href="https://codeigniter4.github.io/CodeIgniter4">User Guide</a>.</p>

			</div>

			<div class="footer">
				Page rendered in {elapsed_time} seconds. Environment: <?= ENVIRONMENT ?>
			</div>

		</div>

	</body>
</html>
