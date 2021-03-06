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
		<link rel="stylesheet" href="src/style.css" />
		<title>ICCT LMS | Home page</title>
	</head>
	<body>
		<!-- This will be the navbar -->
		<header class="mb-5" data-mdb-sticky-position="top">
			<nav class="navbar navbar-expand-md bg-light navbar-light shadow">
				<div class="container">
					<a href="#" class="navbar-brand">ICCT LMS | Exercises page</a>

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
							<li class="nav-item d-block d-sm-none">
								<a href="home.php" class="nav-link">Home</a>
							</li>
							<li class="nav-item d-block d-sm-none">
								<a href="#" class="nav-link">Profile</a>
							</li>
							<li class="nav-item d-block d-sm-none">
								<a href="#" class="nav-link">Classes</a>
							</li>
							<li class="nav-item d-block d-sm-none">
								<a
									href="attendance_page.php"
									class="nav-link"
									>Attendance</a
								>
							</li>
							<li class="nav-item d-block d-sm-none">
								<a
									href="list_of_subjects.php"
									class="nav-link"
									>List of Subjects</a
								>
							</li>
							<li class="nav-item d-block d-sm-none">
								<a href="#" class="nav-link">Messages</a>
							</li>
							<li class="nav-item d-block d-sm-none">
								<a href="exercise_page.php" class="nav-link">Exercises</a>
							</li>
							<li class="nav-item">
								<a href="front/logout.php" class="nav-link">Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<!-- This will be the main section-->
		<main class="mt-3 p-3">
			<div class="container">
				<div class="row">
					<!-- This is where the dashboard will be-->
					<div
						class="col-md mb-2 h-100 sticky-md-top d-none d-sm-block text-light"
					>
						<div class="profile p-2 bg-primary rounded mb-2">
					 <div class="container" align="left">
						<div class="bg-form">				
						<div class="input-name d-flex">	
						<p style="margin-left: auto; margin-right: auto;"><?php include 'database/Usersinfo.php';?> </p>
							
							</div>
						</div>		
						</div>
						</div>

						<div class="dashboard p-2 bg-primary rounded">
							<ul>
								<li class="list-unstyled mb-2">
									<a
										href="home.php"
										class="text-light text-decoration-none"
										>Home</a
									>
								</li>
								<li class="list-unstyled mb-2">
									<a href="#" class="text-light text-decoration-none"
										>Profile</a
									>
								</li>

								<li class="list-unstyled mb-2">
									<a href="#" class="text-light text-decoration-none"
										>Classes</a
									>
								</li>
								<li class="list-unstyled mb-2">
									<a
										href="attendance_page.php"
										class="text-light text-decoration-none"
										>Attendance</a
									>
								</li>

								<li class="list-unstyled mb-2">
									<a
										href="list_of_subjects.php"
										class="text-light text-decoration-none"
										>List of Subjects</a
									>
								</li>
								<li class="list-unstyled mb-2">
									<a href="#" class="text-light text-decoration-none"
										>Messages</a
									>
								</li>
								<li class="list-unstyled mb-2">
									<a
										href="exercise_page.php"
										class="text-light text-decoration-none"
										>Exercises</a
									>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 mx-md-2">
						<form class="bg-light p-4 rounded">
							<h3> Exercises </h3>
						</form>
						<hr />

						<!-- This is where we putting all the contents from the feed data -->
						<div class="feed-container d-flex flex-column-reverse"></div>
					</div>

					<!--This will be empty div to avoid other divs from stretching-->
					<div class="col-md"> </div>
				</div>
			</div>
		</main>

		<!-- Using bootstrap CDN -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>

		<!-- importing app.js -->
		<script type="module" src="javascripts/exercise_page.js"></script>
	</body>
</html>
