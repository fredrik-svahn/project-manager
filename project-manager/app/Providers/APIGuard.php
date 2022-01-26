<?php


namespace App\Providers;


class APIGuard
{

	/**
	 * APIGuard constructor.
	 * @param \Illuminate\Contracts\Auth\UserProvider|null $createUserProvider
	 */
	public function __construct(?\Illuminate\Contracts\Auth\UserProvider $createUserProvider) { }
}
