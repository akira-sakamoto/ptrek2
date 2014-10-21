ptrek2
======

php star trek 2nd edition (test)


## Initial

ptrek.php (no parameter)

1. create session_id
2. initialize all
3. save parameters as cookies

## Parameters

* id: session_id
* cmd: command
* dir: direction parameter
* pow: power parameter or sub-command


## Command List

* cmd=nav&dir=<course_direction>&pow=<warp_factor>
* cmd=srs
* cmd=lrs
* cmd=pha&pow=<phaser_power>
* cmd=tor&dir=<course_direction>
* cmd=shi&pow=<shield_power>
* cmd=dam
* cmd=com&dir=<sub_command>
* cmd=xxx


## Detail

### Variables

Galaxy[x,y] = F K B S
              | | | L Stars
              | | L Base
              | L Klingons
              L Flag
Enterprise[]
	qx, qy = quadrant position
	sx, sy = sector postion
	energy = total energy
	shield = shield energy
	torpedo = photon torpedoes

Damage[]
	nav, lrs, srs, pha, tor, shi, dam, com

Status[]
	enemy = total klingons
	base  = total bases
	