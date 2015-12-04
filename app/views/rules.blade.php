@extends('layouts.basic')


@section('content') 
<script>
$(document).ready(
		function()
		{
			$("#Inodation").click(
				function()
				{
					$("#Cadre_Inondation").slideToggle("slow");
				}
			);
		
		}
	);
	
</script>


	<div id="pageRules">
	<title>Consignes de sécurité</title>
	
	<h2> CONSIGNES DE SECURITE EN CAS DE CATASTROPHE NATURELLE</h1>
	<p>
		Le  document  que  vous  avez  sous  les  yeux  a  pour  objectif  de  vous  donner  de 
		manière synthétique les consignes de sécurité que vous devrez appliquer en cas de 
		catastrophe naturelle.
	</p>
	<div id="Inondation"><h1>En cas d’inondation</h1>
		<div id="Cadre_Inondation" style="display:none;">
			
			<h3>Avant la crue :</h3>
			<h4>Si vous êtes à l’intérieur d’un bâtiment :</h4>
			<ul>
				<li>Fermez  portes,  fenêtres,  soupiraux  pour  ralentir  l’entrée  de  l’eau  et  limiter  les dégâts.</li>
				<li>Coupez l’électricité et le gaz pour éviter l’électrocution et l’explosion.</li>
				<li>Mettez  les  produits  polluant  hors  d’atteinte  de  la  crue  afin  d’éviter  le  risque  de pollution de l’eau.</li>
				<li>Si vous en avez le temps, mettez votre véhicule à l’abri de la crue, il risque d’être 
				emporté et de causer des dégâts.</li>
				<li>Montez à  pied  dans  les  étages  avec  eau  potable,  vivres,  vêtements  chauds  et 
				médicaments nécessaires.</li>
			</ul>


			
			<h4>Si vous êtes à l’extérieur :</h4>
			<ul>
				<li>Sortez  de  votre  véhicule,  il  risque  d’être  emporté  beaucoup  plus  facilement que vous.</li>
				<li>Eloignez vous de la zone dangereuse et réfugiez vous sur un point haut.</li>

			</ul>
			
			<h3>Pendant la crue :</h3>
			<ul>
				<li>Tenezvous informé de l’évolution de la crise en écoutant la radio.</li>
				<li>N’évacuez qu’après en avoir reçu la consigne par les autorités en charge de votre sécurité.</li>
				<li>N’allez pas chercher vos enfants à l’école, leurs enseignants s’occupent d’eux.</li>
				<li>Ne téléphonez pas, afin de laisser libres les lignes pour les secours.</li>
			</ul>

			<h3>Après la crue :</h3>
			<ul>
				<li>Aérez les pièces dès que possible.</li>
				<li>Contrôlez les installations électriques et de gaz avant de les rétablir.</li>
				<li>Chauffez dès que possible.</li>
				<li>Renseignez-vous auprès de la Mairie pour connaître les démarches à engager.</li>
			</ul>
		</div>
	</div>
	<h1>En cas de séisme</h1>
	<h3>Pendant la secousse</h3>
	<h4>Si vous êtes à l’intérieur d’un bâtiment :</h4>

	<ul>
		<li>Eloignez-vous des fenêtres.</li>
		<li>Abritez-vous sous un meuble solide, contre un mur ou une colonne porteuse.</li>
	</ul>
	
	<h4>Si vous êtes à l’extérieur :</h4>
	<ul>
		<li>Eloignez-vous des bâtiments, des lignes électriques et de tout élément susceptible de s’effondrer, à défaut abritez-vous sous un porche.</li>
	</ul>

	<h4>Si vous êtes en voiture :</h4>
	<ul>
		<li>Arrêtez-vous, si possible à distance de constructions et de lignes électriques.</li>
		<li>Coupez le moteur et attendez la fin des secousses à l’intérieur de votre véhicule.</li>
	</ul>
	
	
	<h3>Dès le fin de la secousse :</h3>
	<ul>
		<li>Coupez le gaz, l’électricité et l’eau.</li>
		<li>Ni flamme, ni étincelle pour éviter les risques d’explosion.</li>
		<li>Evacuez  immédiatement  le  bâtiment  (il  peut  y  avoir  d’autres  secousses)  en 
		emportant  vos  papiers  personnels,  des  vêtements  chauds  et  les  médicaments 
		indispensables.</li>
		<li>N’utilisez pas les ascenseurs.</li>
		<li>Ne retournez pas dans un bâtiment avant que celui-ci n’ait été contrôlé.</li>
		<li>Tenez vous informé de l’évolution de la crise en écoutant la radio.</li>
		<li>N’allez pas chercher vos enfants à l’école : leurs enseignants s’occupent d’eux.</li>	
		<li>Ne téléphonez pas afin de laisser libres les lignes pour les secours.</li>
	</ul>

	<h1>En cas de mouvement de terrain	</h1>
	<h3>Pendant :</h3>
	<ul>
		<li>Fuyez latéralement.</li>
		<li>Réfugiez-vous sur le point haut le plus proche.</li>
		<li>Eloignez-vous de la zone dangereuse et ne revenez pas sur vos pas.</li>
	</ul>
	
	<h3>Après</h3>
	<ul>
		<li>N’entrez pas dans un bâtiment endommagé.</li>
		<li>Informez les autorités</li>
		<li>Tenez-vous informé de l’évolution de la crise en écoutant la radio</li>
		<li>Ne téléphonez pas afin de laisser libre les lignes pour les secours</li>
	</ul>
	
	<h1>Les gestes qui sauvent.</h1>
	<ol>	
		<li id="InBold" >La Photo de l'accident :</li>
	<p>
	Aucun accident ne survient sans cause... 
	Il faut garder à l'esprit lorsqu'on est témoin d'un accident que cette cause est peut-être toujours présente et qu'elle peut provoquer un autre accident (on appelle cela le suraccident).
	Un exemple simple: Une personne se blesse en cassant un verre. 
	Les morceaux de verre s'éparpillent sur le sol. 
	Il y a donc une victime et une cause.
	Un sauveteur intervient sans faire attention aux morceaux de verre éparpillés sur le sol. 
	En s'agenouillant, il se blesse à son tour. Il y a désormais deux victimes... (et du coup plus de sauveteur !).
	Cette situation peut être évitée si le sauveteur (vous) prend le temps de faire ce que j'appelle la "photo de l'accident".
	Avant de se précipiter, il convient de prendre le temps de repérer les éventuels dangers, essayer de comprendre rapidement ce qui s'est passé.
	</p>
	
	<li id="InBold" > La Protection :</li>
	<p>
	Grâce à votre analyse rapide de la situation, vous avez repéré un danger pour vous, pour la victime ou pour les autres. 
	Vous devez désormais vous poser une question très importante :
	Est-ce que je peux supprimer ce danger facilement sans mettre ma propre vie en danger (non pas par égoïsme mais parce qu'un sauveteur mort ne peut plus sauver personne...).
	Si cela est possible vous devez donc supprimer ce danger (on appelle cela assurer la protection).
	</p>
	
	<p>
	
	L'un des exemples les plus "parlants" est celui des personnes électrisées (on ne parle d'électrocutés que lorsque les électrisés sont morts et en secourisme la victime n'est jamais considérée comme morte.
	Au pire elle peut être en arrêt cardiaque, ce qui ne signifie en aucun cas qu'elle est décédée).
	Donc, notre électrisé peut tout à fait être encore en contact avec le fil électrique qui a provoqué l'accident. 
	Le corps humain est un excellent conducteur électrique (n'oublions pas qu'il est composé à 80 % d'eau).
	Si un sauveteur trop pressé rentre en contact physique avec le corps sous tension il risque de se retrouver dans le même état que la victime (voire dans un état pire encore).
	</p>
	
	
	<p>
	Une "photo" rapide permet de repérer le moyen de couper le courant (en débranchant la prise tout simplement ou en utilisant un disjoncteur si la prise est douteuse ou inaccessible).
	</p>
	
	<p>Imaginons un scénario catastrophe : Robert prend un "coup de jus" dans son garage en branchant sa perceuse. 
	Il s'écroule sur le sol et reste sans réaction. Richard se précipite sur lui pour l'aider. 
	Au contact du corps sous tension Richard qui est très âgé s'écroule sur Robert. 
	Patricia voyant la scène décide de les sauver et se jette à leur chevet. 
	Elle oublie qu'elle a le cœur fragile et prend à son tour une "châtaigne". 
	C'est l'arrêt cardiaque immédiat. Arrive alors Gaston qui etc. etc. etc.
	</p>
	
	<p>
	Dans certains cas cependant, le risque peut cependant être persistant. 
	Il s'agit d'un danger que l'on ne peut pas supprimer (incendie, victime allongée au milieu d'une route d'où peut surgir un véhicule, victime intoxiquée dans un lieu confiné etc. )
	</p>
	
	<p>
	Dans ce cas et dans ce cas seulement vous devrez alors soustraire la victime au danger en la dégageant. 
	Ça ne se fait pas n'importe comment, il y a des techniques simples pour dégager les victimes sans trop les casser mais il faut s'entraîner et là, rien ne remplace la formation pratique : le PSC1.
	</p>
	
	<li id="InBold" >Secourir :</li>
	<p>
		Une fois le danger écarté vous devez pratiquer "les gestes qui sauvent" et pour reprendre le slogan de la Croix-Rouge française, "sauver une vie, ça s'apprend !" En attendant, respectez ces quelques règles :
	</p>	
		
	<p>
		Si la personne saigne fortement, appuyez avec la paume de votre main sur la plaie pour stopper le saignement (sauf s'il y a quelque chose dans la plaie bien entendu) et faites (alerter) les secours (une règle à retenir pour les hémorragies, la règle de trois JA : j'appuie, j'allonge, j'alerte).
	</p>	
		
	<p>
		Si la personne est en train de s'étouffer, il faut lui taper dans le dos de façon énergique (à ne pas confondre avec brutalement mais seule une formation peut vous montrer la nuance...) à 5 reprises si nécessaire. En cas d'échec il convient de pratiquer la manœuvre d'Heimlich (à apprendre en formation).	
	</p>	
		
	<p>
		Si la victime ne répond pas, vérifier si elle respire. Si elle respire mettez-la sur le coté, bouche ouverte en direction du sol (ne la giflez surtout pas pour la réveiller, c'est inutile, dangereux et totalement interdit). Puis allez vite passer l'alerte (alerter).
	</p>	
	
	
	<p>
		Si elle ne respire pas, faîtes passer l'alerte par un témoin calme, puis pratiquez le massage cardiaque associé à du bouche à bouche. Il s'agit d'alterner le bouche à bouche et et des compressions. Cette technique ne sert pas à faire "repartir" le cœur mais à faire circuler le sang de façon artificielle. Tant que vous continuez, la victime a une chance de survivre.
	</p>	
	
	<p>
		Pour pratique correctement le bouche à bouche, il faut boucher le nez de la victime en lui pinçant les narines et plaquer sa bouche bien hermétiquement autour de la sienne. Si cela est impossible, pratiquez uniquement le massage cardiaque en appuyant sur la poitrine de la victime.
	</p>	
	
	<p>
		Si un massage cardiaque associé à du bouche à bouche est réalisé dans les deux minutes, le cerveau sera correctement oxygéné et les chances de survie de la victime seront multipliées par dix. Si rien n'est fait, lorsque les secours arrivent, (au bout de six ou sept minutes dans le meilleur des cas), le cerveau de la victime est quasiment toujours très détérioré voir irrécupérable. Envie d'apprendre à pratiquer le massage cardiaque ?
	</p>
	
	<li id="InBold" >Alerter :</li>
	<p>Si vous devez ne faire qu'un seul geste il faut que ce soit celui-là ! En France les secours sont bien organisés et relativement rapides mais sans alerte, pas de secours !</p>
	
	
	<ul>
		<li>15  18  112</li>

		<li>Le 15 : le SAMU (Service d'aide médiale urgente)</li>

		<li>Le 18 : les sapeurs pompiers</li>

		<li>Le 112 : numéro d'appel européen</li>
			<p>(réservé aux habitants de l'Union Européenne quand ils ne se trouvent pas dans leur pays).</p>
	
	</ul>
	
	<li id="InBold" >Que dire ?</li>
	<ul>
		<li>Décrivez rapidement la situation. Expliquez la NATURE de l'accident (afin qu'on vous envoie des secours ADAPTÉS)</li>
		<li>Donnez le nombre de victimes (1 victime = 1 camion, 20 victimes = 1 plan rouge ! )</li>	
		<li>Donnez l'état apparent de la victime</li>
		<li>Précisez si vous avez fait quelque chose et si vous avez besoin de la police)</li>
		<li>
			Si les secours vous demandent votre adresse, c'est généralement parce qu'ils décident de vous envoyer les secours. L'idéal étant qu'ils puissent vous trouver du premier coup...
			Donnez très précisément votre adresse (ne confondez pas rue et avenue par exemple, n'oubliez pas de préciser le numéro et la VILLE. Donnez toutes les indications utiles telles que l'étage ou le numéro de bâtiment, n'oubliez pas LES DIGICODES ! ou les noms sur les interphones). Dans l'idéal, envoyez un témoin les attendre sur le trottoir pour les guider
		</li>
	</ul>
	</br>
	<li id="InBold" >NE RACCROCHEZ JAMAIS EN PREMIER !</li>
	</ol>
	</div>
	
	
	
@stop