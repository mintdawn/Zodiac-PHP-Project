<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<title>Php Zodiac Exercise</title>
	</head>
	<body>
		<?php include 'navbar.html';?>
		<div class="container-fluid bg-secondary p-4 w-100">
			<div class="container-fluid bg-dark text-light">
			<h2 class="display-4">PHP Zodiac Exercise</h2>
			<br>
		</div>
			<div class="container-fluid bg-white text-secondary mx-auto">
				<div class="form-group p-4">
					<p class="lead">This application will allow you to see what your zodiac sign is based on your birthday range. I wanted to practice more with how forms worked in php so I created this small application to allow me to work more with forms. I also never used switch statements in php. I've done this a lot in JavaScript and C# but never in php. I have also used switch statements when creating mob programs on Chaos Mud and Dragon Swords. I used these when there were quest mobs that needed to respond to players of a certain race or class type in different ways. This project was quick and dirty. I wanted to work with these concepts while they were fresh in my mind. The next project I do like this I'm going to find out how to create a reserved space for the php results. I don't like that the whole page resizes according to the size of the output. I didn't want to do this in a fixed with way beacuse the site must be responsive. There is a way I am sure I just don't know it yet.</p>
					<br>
						<form action="index.php" method="post">
							<input type="text" name="name" placeholder="Please, enter your name."><br>
							<select name="zodiac">
								<option value="" name="">Choose a date range</option>
								<option value="aquarius" name="aquarius">January 20 - February 18</option>
								<option value="pisces" name="pisces">February 19 - March 20</option>
								<option value="aries" name="aries">March 21 - April 19</option>
								<option value="taurus" name="taurus">April 20 - May 20</option>
								<option value="gemini" name="gemini">May 21 - June 20</option>
								<option value="cancer" name="cancer">June 21 - July 22</option>
								<option value="leo" name="leo">July 23 - August 22</option>
								<option value="virgo" name="virgo">August 23 - September 22</option>
								<option value="libra" name="libra">September 23 - October 22</option>
								<option value="scorpio" name="scorpio">October 23 - November 21</option>
								<option value="sagittarius" name="sagittarius">November 22 - December 21</option>
								<option value="capricorn" name="capricorn">December 22 - January 19</option>
							</select>
							<button type="submit" class="btn btn-warning">Submit</button><br>
						</form>
					</div>
						<hr>
	<?php
			$name = $_POST['name'];

		if ($_POST['name'] == "" || $_POST['zodiac'] == ""){
			echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
			<h3>Hello visitor, type your name and choose a birth date range.</h3>
			<img src='zodiac.jpg' height='150px' width='150px' class='rounded-circle m-1 center'>
			<br>
			<p>The zodiac is derived from the Greek word meaning circle of animals. The zodiac is believed to have been developed in ancient Egypt and was later adopted by the Babylonians. Early astrologers knew it took 12 lunar cycles for the sun to return to its original position. They identified 12 constellations that they observed were linked to the progression of the seasons. Astrologers named the luncar cycles after relevant animals and persons. In Babylonia, for example, the rainy season was found to occur when the Sun was in a particular constellation. Therefore, this constellation was named Aquarius, or water bearer.</p></div>";
			} else {

			switch ($_POST['zodiac']) {
				case "aquarius":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Aquarius: The Water Bearer</h3>
				<img src='aquarius.jpg' height='150px' width='150px' class='m-1 center'>
				<br>
				<p>The mad scientist and humanitarian of the horoscope wheel, futuristic Aquarius energy helps us innovate and unite for social justice.</p></div>";
				break;

				case "pisces":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Pisces: The Fish</h3>
				<img src='pisces.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The dreamer and healer of the horoscope family, Pisces energy awakens compassion, imagination and artistry, uniting us as one.</p></div>";
				break;

				case "aries":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Aries: The Ram</h3>
				<img src='aries.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The pioneer and trailblazer of the horoscope wheel, Aries energy helps us initiate, fight for our beliefs and fearlessly put ourselves out there.</p></div>";
				break;

				case "taurus":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Taurus: The Bull</h3>
				<img src='taurus.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The persistent provider of the horoscope family, Taurus energy helps us seek security, enjoy earthly pleasures and get the job done.</p></div>";
				break;

				case "gemini":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Gemini: The Twins</h3>
				<img src='gemini.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The most versatile and vibrant horoscope sign, Gemini energy helps us communicate, collaborate and fly our freak flags at full mast.</p></div>";
				break;

				case "cancer":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Cancer: The Crab</h3>
				<img src='cancer.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The natural nurturer of the horoscope wheel, Cancer energy helps us connect with our feelings, plant deep roots and feather our family nests.</p></div>";
				break;

				case "leo":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Leo: The Lion</h3>
				<img src='leo.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The drama queen and regal ruler of the horoscope clan, Leo energy helps us shine, express ourselves boldly and wear our hearts on our sleeves.</p></div>";
				break;

				case "virgo":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Virgo: The Virgin</h3>
				<img src='virgo.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The masterful helper of the horoscope wheel, Virgo energy teaches us to serve, do impeccable work and prioritize wellbeing—of ourselves, our loved ones and the planet.</p></div>";
				break;

				case "libra":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Libra: The Scales</h3>
				<img src='libra.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The balanced beautifier of the horoscope family, Libra energy inspires us to seek peace, harmony and cooperation—and to do it with style and grace.</p></div>";
				break;

				case "scorpio":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Scorpio: The Scorpion</h3>
				<img src='scorpio.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The most intense and focused of the horoscope signs, Scorpio energy helps us dive deep, merge our superpowers and form bonds that are built to last.</p></div>";
				break;

				case "sagittarius":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Sagittarius: The Archer</h3>
				<img src='sagittarius.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The worldly adventurer of the horoscope wheel, Sagittarius energy inspires us to dream big, chase the impossible and take fearless risks.</p></div>";
				break;

				case "capricorn":
				echo "<div class='container-fluid rounded bg-white text-secondary text-center center p-3'>
				<h3>Hello $name, your sign is Capricorn: The Goat</h3>
				<img src='capricorn.jpg' height='150px' width='150px' class='m-1 center'>
				<p>The measured master planner of the horoscope family, Capricorn energy teaches us the power of structure and long-term goals.</p></div>";
				break;
			}
		}
	?>
			</div>
		</div>

		<?php include 'footer.html';?>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
