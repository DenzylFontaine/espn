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
	 * @throws InvalidArgumentException if team id is not an integer
	 * @throws RangeException if team id is negative
	 **/
	public function setTeamId($newTeamId){
		// first apply the filter to the input.
		$newTeamId = filter_var($newTeamId, FILTER_VALIDATE_INT);

			// if filter_var() rejects the new id the throw a rejection
		if($newTeamId === false) {
			throw(new InvalidArgumentException("team id is not an integer"));
		}

		// if the team id is out of range, throw an exception
		if($newTeamId <=0) {
			throw(new RangeException("team id is not positive"));
		}

		// finally, if we get here we know its a valid id - save it to the object.
		$this->teamId = $newTeamId;
	}

	/**
	 * accessor method for teamName
	 *
	 * @return int value for teamName
	 **/
	public function getteamName(){
		return($this->teamName);
	}

	/**
	 * mutator method for teamName
	 * @param int $newteamName new value for teamName
	 * @throws InvalidArgumentException if team name is not an integer
	 * @throws RangeException if team name is negative
	 **/
	public function setteamName($newTeamName){
		//first apply the filter to the input
		$newTeamName = filter_var($newTeamName, FILTER_VALIDATE_INT);

	// if the filter_var() rejects the new id throw a rejection
	if($newTeamName === false){
		throw(new InvalidArgumentException("team name is not an integer"));
	}

	//if the team name is out of range, throw an exception
		if($newTeamName <=0) {
			throw(new RangeException("team name is not positive"));
		}

		// if we made it this far we know its valid, - save it to the object
	$this->teamName = $newTeamName;
	}

	/**
	 * accessor method fo teamHomeCity
	 *
	 * @return int value for teamHomeCity
	 **/
	public function getteamHomeCity(){
		return($this->teamHomeCity);
	}

	/**
	 * mutator method for teamHomeCity
	 *@param int $teamHomeCity new value for teamHomeCity
	 *@throws InvalidArgumentException if team home city is not an integer
	 *@throws RangeException if team home city is negative
	 **/
	public function setteamHomeCity($newTeamHomeCity){
		// first apply the filter to the input
		$newTeamHomeCity = filter_var($newTeamHomeCity, FILTER_VAR_INT);

		//if the filter_var() rejects the new it throw a rejection
		if($newTeamHomeCity === false){
			throw(new InvalidArgumentException("team home city is not an integer"));
		}

		//if the team home city is out of range, make an exception
		if($newTeamHomeCity <=0){
			throw(new RangeException("team home city is out of range"));
		}

		// if we made it this far we know it valid, - save it to the object
		$this->teamHomeCity = $newTeamHomeCity;
	}

}