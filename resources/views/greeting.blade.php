<html>
    <body>

        @switch(env("APP_ENV"))
            @case("local")
                First case...
                @break

            @case("production")
                Second case...
                @break

            @default
                Default case...
        @endswitch

        @for ($i = 0; $i < 10; $i++)
           The current value is {{ $i }}."<br/>"
        @endfor

        @forelse ($users as $user)
            <li>{{ $user->name }}</li>
        @empty
            <p>No users</p>
        @endforelse

    </body>
</html>
