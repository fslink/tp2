<h1>GET</h1>
<form action="./controle.php" method="GET" id="client_form">
	<input type="hidden" value="get" name="method_trans" id="method_trans">
	<fieldset>
		<legend>Select your name, age and height</legend>
		<div class="form-example">
		    <label for="client_name">Enter your name: </label>
		    <input type="text" name="client_name" id="client_name">
		</div>
		<div class="form-example">
		    <label for=client_html">Text HTML</label>
		    <textarea type="text" name="client_html" id="client_html" rows="5" cols="50">
		    </textarea>
		</div>
		
		<div class="form-example">
			<label for="client_age">Age</label>
			<select name="client_age" form="client_form">
				<?php 
					for ($i=8; $i <= 110; $i++) { 
						echo '<option value="$i">' . $i . '</option>';
					}
				 ?>
			</select>
		</div>
		<div class="form-example">
			<label for="client_taille">Enter your height: </label>
		    <input type="text" name="client_taille" id="client_taille">
		</div>
		</fieldset>
			<fieldset>
		        <legend>Select your sex</legend>
		        <div>
		            <input type="radio" id="man" name="client_genre" value="0" checked />
		            <label for="man">Man</label>
		        </div>
		        <div>
		            <input type="radio" id="woman" name="client_genre" value="1"/>
		            <label for="woman">Woman</label>
		        </div>
	    	</fieldset>
		<div class="form-example">
    		<input type="submit" value="Subscribe!">
 		</div>
</form>

<h1>POST</h1>
<form action="./controle.php" method="post" id="client_form">
	<input type="hidden" value="post" name="method_trans" id="method_trans">
	<fieldset>
		<legend>Select your name, age and height</legend>
		<div class="form-example">
		    <label for="client_name">Enter your name: </label>
		    <input type="text" name="client_name" id="client_name">
		</div>
		<div class="form-example">
		    <label for=client_html">Text HTML</label>
		    <textarea type="text" name="client_html" id="client_html" rows="5" cols="50">
		    </textarea>
		</div>
		
		<div class="form-example">
			<label for="client_age">Age</label>
			<select name="client_age" form="client_form">
				<?php 
					for ($i=8; $i <= 110; $i++) { 
						echo '<option value="$i">' . $i . '</option>';
					}
				 ?>
			</select>
		</div>
		<div class="form-example">
			<label for="client_taille">Enter your height: </label>
		    <input type="text" name="client_taille" id="client_taille">
		</div>
		</fieldset>
			<fieldset>
		        <legend>Select your sex</legend>
		        <div>
		            <input type="radio" id="man" name="client_genre" checked />
		            <label for="man">Man</label>
		        </div>
		        <div>
		            <input type="radio" id="woman" name="client_genre" />
		            <label for="woman">Woman</label>
		        </div>
	    	</fieldset>
		<div class="form-example">
    		<input type="submit" value="Subscribe!">
 		</div>
</form>
