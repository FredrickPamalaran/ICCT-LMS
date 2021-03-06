<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- THIS IS THE BOOTSTRAP CDN-->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>

		<!-- Importing main style sheet -->
		<link rel="stylesheet" href="style.css" />
		<title></title>
	</head>
	<body>
		<!-- This will be the navbar -->
		<header class="mb-5">
			<nav class="navbar navbar-expand-lg bg-light navbar-light shadow">
				<div class="container">
					<a href="../home_page.html" class="navbar-brand">ICCT</a>

					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navmenu"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navmenu">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a href="home.php" class="nav-link">Home</a>
							</li>
							<li class="nav-item d-block d-sm-none">
								<a href="#" class="nav-link">Profile</a>
							</li>
							<li class="nav-item d-block d-sm-none">
								<a href="#" class="nav-link">Classes</a>
							</li>
							<li class="nav-item">
								<a
									href="attendance_page.php"
									class="nav-link"
									>Attendance</a
								>
							</li>
							<li class="nav-item">
								<a
									href="list_of_subjects.php"
									class="nav-link"
									>List of Subjects</a
								>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Messages</a>
							</li>
							<li class="nav-item">
								<a href="exercise_page.php" class="nav-link"
									>Exercises</a
								>
							</li>
							<li class="nav-item">
								<a href="front/logout.php" class="nav-link">Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<div
			class="d-flex align-items-center justify-content-center p-4"
			style="height: 60vh"
		>
			<div class="quiz-contents bg-light shadow p-4 w-100" id="quiz">
				<div class="quiz-header">
					<div class="d-flex">
						<p id="questionNum"></p>
						<p id="question">Question text</p>
					</div>
					<ul class="list-unstyled">
						<li>
							<input type="radio" id="a" name="answer" class="answer" />
							<label id="a_text" for="a">Question</label>
						</li>
						<li>
							<input type="radio" id="b" name="answer" class="answer" />
							<label id="b_text" for="b">Question</label>
						</li>
						<li>
							<input type="radio" id="c" name="answer" class="answer" />
							<label id="c_text" for="c">Question</label>
						</li>
						<li>
							<input type="radio" id="d" name="answer" class="answer" />
							<label id="d_text" for="d">Question</label>
						</li>
					</ul>
				</div>
				<button id="submit" class="btn btn-primary w-100">Submit</button>
			</div>
		</div>
		<!-- Using bootstrap CDN -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>

		<!-- importing app.js -->
		<script type="module" src="javascripts/quiz_page.js"></script>
	</body>
</html>
