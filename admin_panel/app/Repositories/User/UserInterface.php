<?php

/**
 * User reposiotry
 */
namespace App\Repositories\User;


use Illuminate\Http\Request;
interface UserInterface{

    /**
     * Create new user
     */
    public function create($user = []);

    /**
     * Get Users
     * if id is null then return all users.
     * othervice return specific user
     */
    public function getUsers($id = null);

    /**
     * Get user by email
     */
    public function getUserByEmail($email);

    /**
     * Genarate User Token
     */
    public function generateToken($userId);

    /**
     * Validate Token
     */
    public function validateToken($token);
    
}
