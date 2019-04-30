<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Query tester</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class="container">
		<h1>CSE 154 Query Tester</h1>
		<div class="row">
			<div class="database">
				<form method="POST" id="form_id" action="index.php">
					<div class="col-25">
							<div class="">
								<label for="database">Database : </label>
							</div>
					</div>
					<div class="col-75">
						<div class="colwrap">
							<div class="col-25">
									<input type="radio" name="database" value="world" onclick="databasePreview('world'); <?php if ( isset($_SESSION["database"]) && $_SESSION["database"] == "world"  ) {echo "onclick";} ?>">World<br>
									<input type="radio" name="database" value="simpsons" onclick="databasePreview('simpsons'); <?php if (isset($_SESSION["database"]) && $_SESSION["database"] == "simpsons" ) {echo "checked";} ?>">Simpsons<br>
									<input type="radio" name="database" value="imdb_small" onclick="databasePreview('imdb_small'); <?php if (isset($_SESSION["database"]) && $_SESSION["database"] == "imdb_small" ) {echo "checked";} ?>">imdb_small<br>
									<input type="radio" onclick="databasePreview('other');" name="database" value="other" <?php if (isset($_SESSION["database"]) && $_SESSION["database"] == "other" ) {echo "checked";} ?>>other: <input style="width: 75px;"  type="text" name="othervalue"><br>
							</div>
						</div>
						<div class="colwrap">
							<div class="col-25" style="margin-left: 10px;">
								<label for="user">Username : </label><br>
								<label for="pass">MySQL Password : </label>
							</div>
							<div class="col-25">
								<input id="usern" type="text" name="user" placeholder="MySQL username"><br>
								
								<input id="userp" type="password" name="pass" placeholder="MySQL password"><br>	
							</div>
						
							
						</div>
						<br>
						<br>

						<p ><em>(for the full imdb database, your personal MySQL<br> password should have been mailed to you)</em></p>
					</div>

					<!-- <div class="row"> -->
						
						<div class="conndisplay">
							<div class="col-25">
								<p></p>
							</div>
							<div class="col-75">
								<p>PHP code for a Mysqli connection to this database:<span style="opacity: 0.5;">(select for password)</span></p>
								<div>
									<p id="connect" style="border: 2px dashed grey;padding: 3px;background-color: #eee; ">$db = mysqli_connect('localhost','dbname','username','password')</p>
								</div>
							</div>
						</div>

					<!-- </div> -->

					<div class="querybox">
						<div class="col-25">
							<label for="query">SQL query: </label>
						</div>
						<div class="col-75">
							<select id="previousQuery" style="display: none;">Select Query</select>
							<textarea name="query" id="quer" value='' rows="10" style="width: 100%;" tabindex=""  placeholder="SELECT * FROM languages" ></textarea>
							<p class="error" style="display: none;"></p>
							<input type="submit" name="submit" value="Submit Query">
						</div>

					</div>
				</form>
				<div class="col-25">
					<p></p>
				</div>
				<div class="col-75">
					
				</div>
			</div>
			<div class="tablequery">
				<div class="col-25">
					<p></p>
				</div>
				<div class="col-75" style="margin-top: 10px;">
					<?php include('phpcodes.php'); ?>					
				</div>

			</div>

		</div>

		<div class="row">
		<fieldset class="legend" id="legend_world" style="display: none;">
	<legend>world:</legend>
	<table class="sqltable">
		<caption>countries</caption>
		<caption style="font-size: smaller;">Other columns:
			<strong>region</strong>,
			<strong>surface_area</strong>,
			<strong>life_expectancy</strong>,
			<strong>gnp_old</strong>,
			<strong>local_name</strong>,
			<strong>government_form</strong>,
			<strong>capital</strong>,
			<strong>code2</strong>
		</caption>
		<tr>
			<th>code</th>
			<th>name</th>
			<th>continent</th>
			<th>independence_year</th>
			<th>population</th>
			<th>gnp</th>
			<th>head_of_state</th>
			<th>...</th>
		</tr>
		<tr>
			<td>AFG</td>
			<td>Afghanistan</td>
			<td>Asia</td>
			<td>1919</td>
			<td>22720000</td>
			<td>5976.0</td>
			<td>Mohammad Omar</td>
			<td>...</td>
		</tr>
		<tr>
			<td>NLD</td>
			<td>Netherlands</td>
			<td>Europe</td>
			<td>1581</td>
			<td>15864000</td>
			<td>371362.0</td>
			<td>Beatrix</td>
			<td>...</td>
		</tr>
		<tr><td colspan="8" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>languages</caption>
		<tr><th>country_code</th><th>language</th><th>official</th><th>percentage</th></tr>
		<tr>
		<td>AFG</td><td>Pashto</td><td>T</td><td>52.4</td></tr>
		<td>NLD</td><td>Dutch</td><td>T</td><td>95.6</td></tr>
		<tr><td colspan="4" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>cities</caption>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>country_code</th>
			<th>district</th>
			<th>population</th>
		</tr>
		<tr><td>3793</td><td>New York</td><td>USA</td><td>New York</td><td>8008278</td></tr>
		<tr><td>1</td><td>Los Angeles</td><td>USA</td><td>California</td><td>3694820</td></tr>
		<tr><td colspan="5" style="text-align: center">...</td></tr>
	</table>
</fieldset>
	
<fieldset class="legend" id="legend_simpsons" style="display: none;">
	<legend>simpsons:</legend>
	
	<table class="sqltable">
		<caption>students</caption>
		<tr><th>id</th><th>name</th><th>email</th><th>password</th></tr>
		<tr><td>123</td><td>Bart</td><td>bart@fox.com</td><td>bartman</td></tr>
		<tr><td>456</td><td>Milhouse</td><td>milhouse@fox.com</td><td>fallout</td></tr>
		<tr><td colspan="4" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>grades</caption>

		<tr><th>student_id</th><th>course_id</th><th>grade</th></tr>
		<tr><td>123</td><td>10001</td><td>B-</td></tr>
		<tr><td>404</td><td>10002</td><td>B</td></tr>
		<tr><td colspan="3" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>courses</caption>
		<tr><th>id</th><th>name</th><th>teacher_id</th></tr>
		<tr><td>10001</td><td>Computer Science 142</td><td>1234</td></tr>
		<tr><td>10002</td><td>Computer Science 143</td><td>5678</td></tr>
		<tr><td colspan="3" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>teachers</caption>
		<tr><th>id</th><th>name</th></tr>
		<tr><td>1234</td><td>Krabappel</td></tr>
		<tr><td>5678</td><td>Hoover</td></tr>
		<tr><td colspan="2" style="text-align: center">...</td></tr>
	</table>
</fieldset>

<fieldset class="legend" id="legend_imdb_small" style="display: none;">
	<legend>imdb_small and imdb:</legend>

	<table class="sqltable">
		<caption>movies</caption>
		<tr><th>id</th><th>name</th><th>year</th><th>rank</th></tr>
		<tr><td>112290</td><td>Fight Club</td><td>1999</td><td>8.5</td></tr>
		<tr><td>209658</td><td>Meet the Parents</td><td>2000</td><td>7</td></tr>
		<tr><td>210511</td><td>Memento</td><td>2000</td><td>8.7</td></tr>
		<tr><td colspan="4" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>roles</caption>
		<tr><th>actor_id</th><th>movie_id</th><th>role</th></tr>
		<tr><td>433259</td><td>313398</td><td>Capt. James T. Kirk</td></tr>
		<tr><td>433259</td><td>407323</td><td>Sgt. T.J. Hooker</td></tr>
		<tr><td>797926</td><td>342189</td><td>Herself</td></tr>
		<tr><td colspan="3" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>actors</caption>
		<tr><th>id</th><th>first_name</th><th>last_name</th><th>gender</th><th>film_count</th></tr>
		<tr><td>433259</td><td>William</td><td>Shatner</td><td>M</td><td>162</td></tr>
		<tr><td>797926</td><td>Britney</td><td>Spears</td><td>F</td><td>65</td></tr>
		<tr><td>831289</td><td>Sigourney</td><td>Weaver</td><td>F</td><td>72</td></tr>
		<tr><td colspan="5" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>movies_directors</caption>
		<tr><th>director_id</th><th>movie_id</th></tr>
		<tr><td>24758</td><td>112290</td></tr>
		<tr><td>66965</td><td>209658</td></tr>
		<tr><td>72723</td><td>313398</td></tr>
		<tr><td colspan="2" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>directors</caption>
		<tr><th>id</th><th>first_name</th><th>last_name</th></tr>
		<tr><td>24758</td><td>David</td><td>Fincher</td></tr>
		<tr><td>66965</td><td>Jay</td><td>Roach</td></tr>
		<tr><td>72723</td><td>William</td><td>Shatner</td></tr>
		<tr><td colspan="3" style="text-align: center">...</td></tr>
	</table>

	<table class="sqltable">
		<caption>movies_genres</caption>
		<tr><th>movie_id</th><th>genre</th></tr>
		<tr><td>209658</td><td>Comedy</td></tr>
		<tr><td>313398</td><td>Action</td></tr>
		<tr><td>313398</td><td>Sci-Fi</td></tr>
		<tr><td colspan="2" style="text-align: center">...</td></tr>
	</table>
</fieldset>
		</div>

	</div>

<script type="text/javascript" src="javas.js"></script>
</body>

</html>