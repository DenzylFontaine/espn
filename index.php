<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="stylesheet.css" rel="stylesheet" type="text/css" />
		<title>ESPN Entity Relationship</title>
	</head>
	<body>
		<h1>ESPN Entity Relationship</h1>
		<img src="espn.svg">
		<img class="pic" src="http://photon.101medialablimit.netdna-cdn.com/hypebeast.com/image/2015/12/kobe-bryant-greatest-players-list-1.jpg?w=1024"/>
			<h2>Persona</h2>
			<P>The users ESPN hopes to pull towards its NBA section are males of all ages who enjoy watching basketball 			played at its highest level. The stars are also a main attraction for users, some people just like one player 			not a team, ESPN also provides individual statistics for these users. Women are also part of the user base 			for ESPN, the site is for (but not exclusive) younger to middle who may have played basketball before or are 			just fans of the game. Many women also have favorite players just like the men, ESPN wants this site is to be 			where these women go to find out what their favorite stars are up to.</p>
		<br/>
			<p>One of these women is Jackie, she is a 29yr old who works night shifts at target. Her favorite player is 			Jimmy Butler. However, Bulls games and highlights are hard to come by in New Orleans. To get her Bulls news 			Jackie frequents the ESPN channel and website. During work she checks the ESPN app to get scores and even 			watch the games if she has enough time during her breaks. Jackie is the kind of fan ESPN expects to browse 			their webpages.
			</p>
				<h3>Use Case</h3>
				<p>Jackie will log onto our website mostly likely from her cell phone. She will browse her way onto the 				section for the Chicago Bulls. There she will check the latest news, injuries, statistics and upcoming 				games fo the Bulls. Then she will watch a few minutes of the current live game until she has to return to 				work.
				</p>
				<br/>
				<h4>
					<strong>Important Data Model</strong>
				</h4>
				<ul>
					<li>For Teams
					<ul>
					<li>teamid</li>
					<li>teamname</li>
					<li>teamhomecity</li>
					</ul>
				</ul>
						<ul>
							<li> For Games
							<ul>
								<li>gameid</li>
								<li>date/time</li>
								<li>location</li>
								<li>teamhomeid</li>
								<li>teamawayid</li>
								<li>teamhomepointsscored<li>
								<li>teamawaypointsscored<li>
								</ul>
						</ul>
	</body>
</html>