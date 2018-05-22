# Survivor


## Setup


### SQL Tables
The following tables are required with the listed columns listed for each (name = type).

**dailyKills**

	day = date

	dead = text

**gameData**

	game = int(11) = 1

	startDate = date

	beforeGame = char(1)
	
	winner = varchar(10)

safeRooms
	teacher = varchar(255)
	room = varchar(255)
	info = varchar(255)

safeties
	day = date
	title = varchar(255)
	description = text
	type = varchar(3)
	url = varchar(255)

safetyExemptions
	id = int(11)
	player = varchar(10)
	day = date
	newSafety = text

users
	phoneNumber = varchar(10)
	password = varcahr(32) 
	name = varchar(255)
	alive = char(1)
	lifeCode = varchar(6)
	target = varchar(10)
	killAttempts = int(11)
	killCount = int(11)
	weekCount = int(11)
	win = cahr(1)
	killHistory = text