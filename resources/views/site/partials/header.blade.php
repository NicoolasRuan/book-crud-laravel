<header class=" px-6 bg-white shadow flex justify-between w-full content-center">
    <div class="flex items-center w-1/ py-5">
        <span class="text-3xl font-Poppins font-bold">
            Booking
        </span>
    </div>

    <nav class="flex justify-end w-1/2">
        <ul class="flex justify-center items-center text-xl  h-full">
            <a href="{{route('books.index')}}" class="h-full flex justify-center items-center w-24 hover:bg-slate-500  hover:text-white">
                <li>Books</li>
            </a>
            <a href="{{route('books.create')}}" class="h-full flex justify-center items-center w-24 hover:bg-slate-500 hover:text-white">
                <li>Create</li>
            </a>
            <a href="{{route('books.about')}}" class="h-full flex justify-center items-center w-24 hover:bg-slate-500 hover:text-white">
                <li>About</li>
            </a>
        </ul>
        <div class="flex justify-center items-center bg-amber-600 h-full w-24   ">
            <span class="text-white">
                Register
            </span>
        </div>
    </nav>
</header>