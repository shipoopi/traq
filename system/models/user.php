<?php
/*
 * Traq
 * Copyright (C) 2009-2012 Jack Polgar
 * 
 * This file is part of Traq.
 * 
 * Traq is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 only.
 * 
 * Traq is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Traq. If not, see <http://www.gnu.org/licenses/>.
 */

class User extends Model
{
	protected static $_name = 'users';
	protected static $_properties = array(
		'id',
		'username',
		'password',
		//'salt',
		'name',
		'email',
		'group_id',
		'login_hash'
	);
	
	protected static $_belongs_to = array('group');
	
	/**
	 * Checks the given password against the users password.
	 *
	 * @param string $password
	 *
	 * @return bool
	 */ 
	public function verify_password($password)
	{
		return sha1($password) == $this->_data['password'];
	}
}