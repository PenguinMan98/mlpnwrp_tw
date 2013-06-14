<?php

class Resource_GM_Leo_d10Controller extends Resource_BaseController{
	public function __construct(){
		parent::__construct();
	}
	
	public function indexAction(){
		$this->vars->content = <<<EOT
<p>Zompony Apocalypse is a game run by GM Leo on Sunday nights.  The d10 system is based off some established systems but unique enough to deserve it's own site detailing the nitty gritties.</p>
<ul>
	<li><a href="$this->_URI/introduction">Introduction</a></li>
</ul>		
EOT;
	}
	
	public function IntroductionAction(){
		$this->vars->content = <<<EOT
<p><a href=".">Back</a></p>
		
<p>Zompony Apocalypse is a game I developed and made to be a "Play-Yourself" Tabletop RPG, thus I am currently using the lore, history, combined knowledge produced from RPs in this website in my game... So anything that happened in the past or knowledge gained by a player in Fillydelphia chat exists in my ZPA (Zompony Apocalypse) universe as well as an ungraceful reflection.
Before considering, I need to give fair warning to those whom may be interested, this game is most definitely NOT PG. As it currently stands I would give this game a rating of M for gore, explicit violence, language, ect. and be prepared to be grossed and creeped out. I made ZPA on the genre survival-horror-mystery following a core of equal amounts of RP and combat... I was unsatisfied with zombie survival-horror in video games, thus I decided I would make this one about all the things it should be. Creepy/Grimdark/Psychosis are the inspirations rather than beat-all-the-zombies-up. If that isn't your groove, then this isn't the game for you.</p>

<p>Additionaly, before I go on to what players need, ZPA has been tailored so that anypony can jump in at any time. SO, feel free to jump into my game to spectate or even play as a temporary NPC character of yours in Filly (at my discretion) for the day~. This is great for those who don't actually want to play, but want to pop in and taste the game a little or RP in a darker environment for a while. Heck, if you want, I may even let you play as one of the enemy zombies for fun.</p>

<p>Zompony Apocalypse is set in Ponyville and starts exactly when the outbreak begins, meaning we'll be playing from start to finish. It is a game that I personally created using the skeleton mechanics of a D10 system called "Old World of Darkness"; House Ruled to the point where it could legitimately be its own game. This game requires its players to be analytical about their methods of completing tasks, like assessing whether they should engage in combat or move on because sometimes combat might have severe consequences. Studying one's situation and selecting a cost efficient goal is probably one of your greatest asset in ZPA.</p>

<p>ZPA is standardly held on Sundays, all afternoon from 12:00 P.M. (PST) or in Fillydelphia time 3:00 P.M. (EST) till I need to go to bed which is often in 12 hours from then. Players may jump in and leave when they please, the game is flexible that way. There may be some additional games thoughout the week so keep yourselves updated on my Skype group chat for ZPA.</p>

<p>For Players - Since this game is a "Play-Yourself", those interested in playing ZPA must select a character (any species) that already exists in Fillydelphia that has a reasonable amount of RP hours in already (I think around a 2 weeks to a month would be good enough). This is to make sure other ponies have had interaction with the pony in question enough to understand, at least briefly, their personality, quirks, and talents... That and making sure they are well-thought out. Furthermore, my game goes by a "Council" system, thus if the majority of the current players deems parts of your character (including your stats sheet) or even the player--themselves--unfit, there must be some adjustments made till approved (however, I do still have the final word on this aspect). I would avoid selecting characters that are jaded or may become jaded due to the nature of this game... I need your characters to feel like there's a looming darkness and their lives are hanging in limbo with their willpower and some other malicious, uncontrollable force... And no Mane 6, obviously.</p>

<p>Players will need to make a <a href="http://www.roll20.net">Roll20 account</a> in order to play since we will be utilizing their Tabletop equipment and Skype along with headset-microphone is suggested, though it is not required.
Where the game is located, exactly is currently: <a href="https://app.roll20.net/join/57842/OFZf2Q">Here</a></p>

<p>Some gameplay rules to remember: Players are unable to leave Ponyville to other cities though they may traverse the Everfree and other surrounding landmarks including Cloudsdale (since it's practically above Ponyville). The players MUST at all times have a main base to return to so that they are not just wandering. All characters MUST be at least almost fully clothed most of the time.</p>

<p>This is still a fairly new game in development even though it has reached a point where it is able to play smoothly, so please keep that in mind if we hit a few bumpy roads.
Further explanation on racial traits, merits & flaws, how to play, character sheets, ect. will come from me, personally so feel free to message Cursive Virtue or XxDragonFangsxX (my Skype account) for details till I finish making an official guide to all of these things in the future.</p>

<p>Thank you all for your interest~!</p>
		
EOT;
	}
}
