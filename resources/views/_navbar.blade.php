<nav class="py-4 md:py-8 px-4 md:px-8 mx-auto container bg-white flex item-center justify-between">
    <a href="/" class="text-3xl font-noramal text-indigo-600 font-noramal">Laravel</a>

    <div>
        <a href="{{ route('logout') }}" class="px-4 py-2 uppercase text-sm leading-loose border border-gray-600 text-gray-600 hover:bg-gray-600 hover:text-white rounded"
            onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>
