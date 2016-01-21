<?php
/**
 *Team, one of the basketball teams to participate in a game.
 *
 *a team participates in a game
 *
 * @author Denzyl Fontaine ddenzfong@gmail.com
 **/
//capitalize class to distinguish it from the variables
class Team {
		/**
		 * id for Team is $teamid; this is the primary key
		 * @var int $teamid (every class has gotta have this)
		 **/
	private $teamId;
		/**
		 *teamnam
		 * @var int $teamname
		 **/
	private $teamName;
		/**
		 * teamhomecity, city that the team comes from
		 * @var int $teamhomecity
		 **/
	private $teamHomeCity;
	/**
	 * accessor method for teamId
	 *
	 * @return int value for teamId
	 **/
	public function getteamId(){
		return($this->teamId);
	}

	/**
	 *mutator method for team id
	 * @param int $newTeamId new value of teamId
	 * @throws invalidargumentexception if team id is not an integer
	 * @throws rangeexception if team id is negative
	 **/
	public function setTeamid($newTeamId){
		// first apply the filter to the input.
		$newTeamId = filter_var($newTeamId, FILTER_VALIDATE_INT);

			// if filter_var() rejects the new id the throw a rejection
		if($newTeamId === false) {
			throw(new InvalidArgumentException("team id is not an integer"));
		}

		if ($newTeamId <=0) {
			throw(new RangeException("team id is not positive"));
		}

		// finally, if we get here we know its a valid id - save it to the object.
		$this->TeamId = $newTeamId;
	}
}