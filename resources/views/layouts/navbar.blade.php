<nav>
    
    <div class="flex items-top backgroundWelcome topnav">
        
        <div>
            <ul>
                <div class="fixed topnav min-w-full">
                    <a href="{{ url('/home') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="57.5" height="57.5" fill="#F08080" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
                        </svg>
                    </a>
                    <a class="mr-20 mt-1" href="/home">
                        <p class="text-4xl uppercase font-semibold">Art-Miracle</p>
                    </a>
                </div>
                @auth

                @else
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block topnav">
                            
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-white dark:text-white underline">Dashboard</a>
                        @else
                            <a class="active" style="float: left" href="#about">About</a>
                            <a class="ml-4" style="float: left" href="benefits">Benefits</a>
                            <a class="ml-4" style="float: left" href="faq">FAQ</a>
                            <a class="ml-4" style="float: left" href="contact">Contact</a>
                            <input class="ml-4 mt-5" style="float: left" type="text" placeholder="Search..">
                            <a href="{{ route('login') }}" class="text-sm text-white dark:text-white underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
                            @endif
                    @endauth
                </div>
                @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
