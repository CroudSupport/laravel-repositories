<?php

return [
    /**
     * Register your repositories here as follows
     *
     * Interface => ConcreteClass
     *
     * For example:
     *
     * UserRepositoryContract::class => UserRepository::class,
     */
    'repositories' => [

    ],

    /**
     * Register the transformers that should be bound to the repositories
     *
     * For example:
     *
     * UserRepository::class => UserTransformer::class,
     * UserApiRepository::class => UserTransformer::class,
     *
     */
    'repository_transformers' => [

    ],

    /**
     * Register the contextual repositories here
     *
     * For example:
     *
     * UserController::class => UserRepositoryContract::class,
     * UserApiController::class => UserApiRepository::class,
     */
    'controller_repositories' => [

    ],
];
