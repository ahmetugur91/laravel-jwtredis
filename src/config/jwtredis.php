<?php

return [

    /**
     * This observer class, listening event on your user model.
     */
    'observer' => \Sametsahindogan\JWTRedis\Observers\UserRedisObserver::class,

    /**
     *
     * This is your user model.
     */
    'user_model' =>  \App\User::class,

    /**
     *
     * If it's option is true, user stored in Redis up to jwt_ttl value time.
     */
    'redis_ttl_jwt' => true,

    /**
     *
     * User stored in Redis redis_ttl value time.
     */
    'redis_ttl' => 60,

    /**
     *
     * If it's user id is 1, this user stored in Redis auth_1.
     */
    'redis_auth_prefix' => 'auth_',

     /**
      *
      * If it's option is true, every necessary middleware check if user banned.
      */
    'check_banned_user' => false,

    /**
     *
     * Status column name.
     */
    'status_column_title' => 'status',

    /**
     *
     * Return banned user response for this user statuses.
     */
    'banned_statuses' => ['banned', 'deactivate'],

    /**
     * You can add this array your own relations anything you want.
     */
    'cache_relations' => [
        'roles.permissions',
        'permissions'
    ],

];
