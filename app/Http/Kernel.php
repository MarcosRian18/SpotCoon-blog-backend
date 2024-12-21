protected $middleware = [
    // ...
    <!-- \Illuminate\Http\Middleware\HandleCors::class, -->
];

protected $middlewareGroups = [
    'api' => [
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
];