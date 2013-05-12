<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Vue/css/style2.css" />
        <title>LRDQ</title>
    </head>
            <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <img src="Vue/images/logo_aug.png"   width="180" height="180" alt="Logo de LRDQ" id="logo" />
                    <h1>Le Repas De Quartier</h1>
                    
                </div>
                
                <nav> 
					<ul>
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">Inscription gratuite</a></li>
                        <li><a href="#">Poser une annonce</a></li>
                        <li><a href="#">Contactez nous</a></li>
                    </ul>
				</nav>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    
						<form method="post" action="traitement.php">
							<p>Rechercher un repas...
								<label for="lieu">Lieu</label>
								<input type="text" name="lieu" id="lieu" placeholder="Ex: Lille"/>
								<label for="date">Date</label>
								<input type="date" name="date" id="date"/>
								<a href="#" class="bouton_rouge">C'est parti <img src="Vue/images/flecheblanchedroite.png" alt=""/></a>
							</p>
						</form>
				</div>
            </div>
            
            <div id="corps">
                <article id="art1">		
					<h1> Les dernières annonces</h1>
					<p>c'est deux types sous la douche après un match de tennis...... 
					</br>Le premier remarque que le second a un énorme bouchon enfoncé entre les fesses.Il lui dit :
					</br>Dis donc, t'as vu ? T'as un bouchon dans le cul !
					</br>Oui, oui, je sais !" répond l'autre en soupirant. Ça date d'avant-hier, je m'étais engueulé avec ma femme et je suis sorti faire une balade pour me calmer. En marchant, j'ai machinalement botté dans une vielle lampe à l'huile toute rouillée.
					</br>Et alors ?
					</br>Alors un drôle de type en est sorti et s'est mis à gueuler "Bonjour, je suis Léon le génie... tu m'as libéré... je t'accorde un voeu."
					</br>Et alors ?
					</br>Alors j'ai répondu énervé : "Me fais pas chier, OK!" 
					</p>
				</article>
				
				
				
				
				
				<article id="art2"> 					</br></br>
					<h1> Les prochains repas</h1>
					<p>Est-ce en riant de Saclay que vous menacez de l'abime notre belle terre ?</p>
					<p>Admirable folle. Il ne lui manque que la paresse.</p>
					
					<form method="post" action="traitement.php">
						<fieldset>
							<legend>Vos coordonnées</legend> <!-- Titre du fieldset -->
							<label for="nom">Quel est votre nom ?</label>
							<input type="text" name="nom" id="nom" />
							</br>
							<label for="prenom">Quel est votre prénom ?</label>
							<input type="text" name="prenom" id="prenom" />
							</br>
							<label for="email">Quel est votre e-mail ?</label>
							<input type="email" name="email" id="email" />
							</fieldset>
							
						<fieldset>
							<legend>Votre souhait</legend> <!-- Titre du fieldset--> 
							<p>
							Faites un souhait que vous voudriez voir exaucé :
								<input type="radio" name="souhait" value="riche"
id="riche" /> <label for="riche">Etre riche</label></br> 
								<input type="radio" name="souhait" value="celebre"
id="celebre" /> <label for="celebre">Etre célèbre</label></br>
								<input type="radio" name="souhait" value="intelligent"
id="intelligent" /> <label for="intelligent">Etre <strong>encore</strong> plus intelligent</label></br>
								<input type="radio" name="souhait" value="autre"
id="autre" /> <label for="autre">Autre...</label></br>
							</p>
							<p>
								<label for="precisions">Si "Autre", veuillez préciser
:</label>
								<textarea name="precisions" id="precisions" cols="40"
rows="4"></textarea>
								</p>
						</fieldset>
					</form>
					
					
					</article>
				</div>
				
				
				<aside>
                    <h1>Pourquoi ce site!!</h1>
                    <img src="Vue/images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_cuistot"><img src="Vue/images/cuistot.png" width="200" height="200" alt="cuistot" /></p>
                    <p> Vous l'avez tous remarqué:aujourd'hui, acheter de la nourriture  revient moins chère au format familial.</p>
                    <p>..Qui est capable de manger 5 escalopes de poulet en un diner? Qui veut manger le même plat quatre jours de suite?
Voilà le problème des gens qui vivent seuls, ces économies se transforment très vite en gachis. 
					<br/>C'est ce que <strong>RepasDeQuartier</strong>  va changer. 
					<br/>Le principe est simple, tu cuisines pour plusieurs, tu mets une annonce avec le lieu, le plat, le nombre de parts donné, le prix...
Un membre du site répond à ton annonce et vient partager ton repas ( ou prendre à emporter).
Cela permet aussi d'éviter l'angoissant moment du repas en solitaire!!</p>
                    <p><img src="Vue/images/facebook.png" alt="Facebook" /><img src="Vue/images/twitter.png" alt="Twitter" /><img src="Vue/images/vimeo.png" alt="Vimeo" /><img src="Vue/images/rss.png" alt="RSS" /></p>
                </aside>
			
            
			
			</br>
			</br>
			<footer>
                <div id="Mdp">
                    <h1>Zone de connexion</h1>
						<form method="post" action="traitement.php">
							<p>
								<label for="pseudo">Votre pseudo :</label>
								<input type="text" name="pseudo" id="pseudo" />
							<br />
								<label for="pass">Votre mot de passe :</label>
								<input type="password" name="pass" id="pass" />
							</p>
						<form>
                </div>
                <div id="commentaires">
					<h1>Commentaires</h1>
                    <form method="post" action="traitement.php">
						<p>
							<label for="ameliorer">Comment pensez-vous que je pourrais améliorer mon site ?</label><br />
							<textarea name="ameliorer" id="ameliorer"></textarea>
						</p>
					</form>
                </div>  
				
            </footer>
        </div>
    </body>
</html>
