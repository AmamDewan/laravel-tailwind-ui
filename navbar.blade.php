<div class="min-vw-100 px-2 sm:px-4 lg:px-8 z-10 {{$bg}} shadow-lg">
    <div class="max-w-6xl flex mx-auto justify-between h-16">
{{--        Logo--}}
            <div class="mx-auto sm:flex-shrink-0 flex items-center sm:mx-0">
                <h1 class="text-2xl font-bold text-gray-600">Dews Team</h1>
            </div>
{{--        Large display nav bar--}}
            <div class="hidden sm:ml-6 sm:flex ">
                <a href="#" class="inline-flex items-center px-5 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out  border-transparent text-gray-500 hover:text-gray-700 hover:border-blue-500">
                    About
                </a>
                <a href="#" class="inline-flex items-center px-5 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out  border-transparent text-gray-500 hover:text-gray-700 hover:border-blue-500">
                    Service
                </a>
                <a href="#" class="inline-flex items-center px-5 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out  border-transparent text-gray-500 hover:text-gray-700 hover:border-blue-500">
                    Project
                </a>
                <a href="#" class="inline-flex items-center px-5 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out  border-transparent text-gray-500 hover:text-gray-700 hover:border-blue-500">
                    Contact
                </a>
            </div>
{{--        Large display Action button--}}
            <div class="hidden sm:ml-4 sm:flex sm:items-center">
                @guest
                    <a href="#" class="inline-flex items-center pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out  border-transparent text-gray-500 hover:text-gray-700">
                        Get Quote
                    </a>
                @else
                    <a class="inline-flex items-center pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out  border-transparent text-gray-500 hover:text-gray-700" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>


    </div>
</div>

