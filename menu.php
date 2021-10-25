<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/css.css"> </head>
<style>
* {
	box-sizing: border-box;
}


/* Create two equal columns that floats next to each other */

.column {
	float: left;
	width: 50%;
	padding: 10px;
	height: 100%;
	/* Should be removed. Only for demonstration */
}


/* Clear floats after the columns */

.row:after {
	content: "";
	display: table;
	clear: both;
}
</style>

<body>
	<div class="main-container">
		<div class="menu">
			<p class="menu-txt">Menu</p>
		</div>
		<div class="row">
			<div class="column center">
				<div class="cereal">
					<p class="cereal-txt">CEREALS & FRUIT</p>
					<div class="cereal-item1">
						<p class="cereal-item1-txt"> FRENCH TOAST & FRUIT...10 </p>
					</div>
					<div class="cereal-item2">
						<ul type="none">
							<li>
								<p1>GREEK YOGHURT BOWL ...12</p1>
							</li>
							<li>
								<p2>W/ WHOLE GRAIN GRANOLA & MIXED BERRIES</p2>
							</li>
						</ul>
						<div class="eggs">
							<p class="eggs-txt">EGGS</p>
						</div>
						<div class="eggs-item1">
							<ul type="none">
								<li>
									<p1>EGGS FLORENTINE...13</p1>
								</li>
								<li>
									<p2>POACHED EGGS W/ SPINACH & HOLLANDAISE SAUCE</p2>
								</li>
							</ul>
						</div>
						<div class="eggs-item2">
							<ul type="none">
								<li>
									<p1>EGGS NORWEGIAN...16</p1>
								</li>
								<li>
									<p2>POACHED EGGS W/ SMOKED SALMON & HOLLANDAISE SAUCE</p2>
								</li>
							</ul>
						</div>
						<div class="eggs-item3">
							<ul type="none">
								<li>
									<p1>EGGS BENEDICT...14</p1>
								</li>
								<li>
									<p2>POACHED EGGS W/ HAM & HOLLANDAISE SAUCE</p2>
								</li>
							</ul>
						</div>
						<div class="eggs-item4">
							<ul type="none">
								<li>
									<p1>SCRAMBLED EGGS...14</p1>
								</li>
								<li>
									<p2>W/ SMOKED SALMON & AVOCADO</p2>
								</li>
							</ul>
						</div>
						<div class="sandwiches">
							<p class="sandwiches-txt">SANDWICHES</p>
						</div>
						<div class="sandwich-item1">
							<ul type="none">
								<li>
									<p1>AUBERGINE ...11½</p1>
								</li>
								<li>
									<p2>W/ LETTUCE, TOMATO & SAVORA MAYONNAISE</p2>
								</li>
							</ul>
						</div>
						<div class="sandwich-item2">
							<ul type="none">
								<li>
									<p1>AVOCADO...12</p1>
								</li>
								<li>
									<p2>W/ FETA & POMEGRANATE (OPTIONAL W/ VEGAN CHEESE)</p2>
								</li>
							</ul>
						</div>
						<div class="sandwich-item3">
							<ul type="none">
								<li>
									<p1>PHILLY STEAK...14½</p1>
								</li>
								<li>
									<p2>W/ MELTED CHEESE, KIMCHI & SPICY MAYONNAISE</p2>
								</li>
							</ul>
						</div>
						<div class="clubs">
							<p class="clubs-txt">CLUBS</p>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>CHICKEN AVOCADO...14</p1>
								</li>
								<li>
									<p2>W/ LETTUCE, RED ONION & WASABI</p2>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>CLUB CLASSIC...14</p1>
								</li>
								<li>
									<p2>W/ CHICKEN, BACON, EGG, LET TUCE & TOMATO</p2>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>CLUB NORDIQUE...17½</p1>
								</li>
								<li>
									<p2>W/ SMOKED SALMON, CRAB, LETTUCE, CUCUMBER & ONION</p2>
								</li>
							</ul>
						</div>
						<div class="oysters">
							<p class="oysters-txt">OYSTERS & CLAMS</p>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>FINES DE CLAIRES...24</p1>
								</li>
								<li>
									<p2>NES DE CLAIRES...24 NR.3 NORMANDIE (6 PCS.) SERVED W/ LEMON & RED WINE - SHALLOT VINAIGRET TE</p2>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>OYSTERS ROCKEFELLER...15</p1>
								</li>
								<li>
									<p2>W/ SPINACH & HOLLANDAISE SAUCE(3 PCS.)</p2>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>SAUTEED CLAMS & PRAWNS...18</p1>
								</li>
								<li>
									<p2>W/ GARLIC, PARSLEY, WHITE WINE & TOASTED BREAD</p2>
								</li>
							</ul>
						</div>
						<div class="croques">
							<p class="croques-txt">CROQUES</p>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>CROQUE MONSIEUR...11</p1>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>CROQUE MADAME...12</p1>
								</li>
								<li>
									<p2>W/ PAN-FRIED EGG</p2>
								</li>
							</ul>
						</div>
						<div class="salads">
							<p class="salads-txt">SALADS</p>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>CAESAR SALAD...17½</p1>
								</li>
								<li>
									<p2>W/ CHICKEN, ANCHOVY & A PERFECT EGG</p2>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>NIÇOISE SALAD...22</p1>
								</li>
								<li>
									<p2>W/ FRESH TUNA</p2>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>KALE - AVOCADO SALAD ...16</p1>
								</li>
								<li>
									<p2>W/ CORN CRUNCH & YUZU DRESSING</p2>
								</li>
							</ul>
						</div>
						<div class="lobster">
							<p class="lobster-txt">FRESH LOBSTER</p>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>COLD... 22 / 40</p1>
								</li>
								<li>
									<p2>W/ HOMEMADE MAYONNAISE</p2>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>HOT ‘THERMIDOR’...25 / 45</p1>
								</li>
								<li>
									<p2>W/ CREAMY SAUCE OF MUSTARD, COGNAC & GRUYÈRE</p2>
								</li>
							</ul>
						</div>
						<div class="starters">
							<p class="starters-txt">STARTERS</p>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>TOMATO SOUP ...9</p1>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>PIZZA TUNA...16½</p1>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>PIZZA SALMON...16</p1>
								</li>
							</ul>
						</div>
						<div class="pasta">
							<p class="pasta-txt">PASTA & RISOTTO</p>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>ARRABBIATA...16½</p1>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>CARBONARA...17½</p1>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>MEATBALLS...18½</p1>
								</li>
							</ul>
						</div>
						<div class="meat">
							<p class="meat-txt">MEAT</p>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>BISTRO BURGER...19½</p1>
								</li>
								<li>
									<p2>W/ BACON & CHEESE</p2>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>STEAK TARTARE CLASSIC...21½</p1>
								</li>
							</ul>
						</div>
						<div>
							<ul type="none">
								<li>
									<p1>VEAL SCHNITZEL...21½</p1>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
<!-- Je kanker moeder dit is een note zodat je weet wat de rechter kanker dinges is -->
			<div class="column center">
				<div class="fish">
					<p class="fish-txt">FISH</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>FISH & CHIPS...20</p1>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>SLIPTONG...21</p1>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>MOULES*...22</p1>
						</li>
					</ul>
				</div>
				<div class="meatless">
					<p class="meatless-txt">MEATLESS</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>GRILLED GREEN ASPARAGUS...17</p1>
						</li>
						<li>
							<p2>W/ POACHED EGG, BLACK TRUFFLE, HOLLANDAISE SAUCE & NUTS</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>BEYOND BURGER ...18</p1>
						</li>
						<li>
							<p2>W/ FRENCH FRIES & GREEN SALAD</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>EGGPLANT STEAK ... 17½</p1>
						</li>
						<li>
							<p2>W/ BEARNAISE SAUCE, FRENCH FRIES & GREEN SALAD</p2>
						</li>
					</ul>
				</div>
				<div class="kids">
					<p class="kids-txt">KIDS MENU</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>PASTA</p1>
						</li>
						<li>
							<p2>W/ TOMATO SAUCE...7</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>MINI HAMBURGER</p1>
						</li>
						<li>
							<p2>W/ FRENCH FRIES...9</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>AMERICAN PANCAKES</p1>
						</li>
						<li>
							<p2>W/ SYRUP...8</p2>
						</li>
					</ul>
				</div>
				<div class="greens">
					<p class="greens-txt">GREENS</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>HARICOTS VERTS...4½</p1>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>SPINACH SAUTEED...5</p1>
						</li>
						<li>
							<p2>W/ GARLIC</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>ROCKET PARMESAN SALAD...8½</p1>
						</li>
						<li>
							<p2>W/ BALSAMICO</p2>
						</li>
					</ul>
				</div>
				<div class="potatoes">
					<p class="potatoes-txt">POTATOES</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>FRENCH FRIES...4½</p1>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>SWEET POTATO FRIES...6</p1>
						</li>
						<li>
							<p2>W/ CHILI MAYONNAISE</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>AMERICAN TWISTER FRIES...6</p1>
						</li>
					</ul>
				</div>
				<div class="smallbites">
					<p class="smallbites-txt">SMALL BITES</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>OLIVES</p1>
						</li>
						<li>
							<p2>W/ ANCHOVY...3</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>NUTS</p1>
						</li>
						<li>
							<p2>ROASTED & SALTED...4</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>FRENCH BAGUETTE</p1>
						</li>
						<li>
							<p2>& SALTED BUTTER...4½</p2>
						</li>
					</ul>
				</div>
				<div class="cheese">
					<p class="cheese-txt">CHEESE</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>PLANCHE DE FROMAGE...13½</p1>
						</li>
					</ul>
				</div>
				<div class="desserts">
					<p class="desserts-txt">DESSERTS</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>CRÈME BRÛLÉE...7½</p1>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>TARTE TATIN...8</p1>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>ÎLE FLOTTANTE...9</p1>
						</li>
					</ul>
				</div>
				<div class="dessertwine">
					<p class="dessertwine-txt">DESSERT WINE</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>MOSCATEL...5</p1>
						</li>
						<li>
							<p2>AÑEJO, BODEGA S DE MULLER, TARRAGONA, SPAIN</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>MUSCAT DE RIVESALTES...6</p1>
						</li>
						<li>
							<p2>DOMAINE POUDEROUX, ROUSSILLON, FRANCE</p2>
						</li>
					</ul>
				</div>
				<div class="portwine">
					<p class="portwine-txt">PORT WINES</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>PORTAL WHITE...5</p1>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>PORTAL WHITE...5</p1>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>PORTAL 10 Y.A. TAWNY...8</p1>
						</li>
					</ul>
				</div>
				<div class="daily">
					<p class="daily-txt">OPEN DAILY</p>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>EGGS FLORENTINE...13</p1>
						</li>
						<li>
							<p2>POACHED EGGS W/ SPINACH & HOLLANDAISE SAUCE</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>EGGS FLORENTINE...13</p1>
						</li>
						<li>
							<p2>POACHED EGGS W/ SPINACH & HOLLANDAISE SAUCE</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>EGGS FLORENTINE...13</p1>
						</li>
						<li>
							<p2>POACHED EGGS W/ SPINACH & HOLLANDAISE SAUCE</p2>
						</li>
					</ul>
				</div>
				<div>
					<ul type="none">
						<li>
							<p1>EGGS FLORENTINE...13</p1>
						</li>
						<li>
							<p2>POACHED EGGS W/ SPINACH & HOLLANDAISE SAUCE</p2>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>

</html>