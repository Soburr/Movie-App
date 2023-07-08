 <div>
    <div class="flex flex-col md:flex-row items-center">
        <div class="relative mt-3 md:mt-0">
            <input wire:model="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 focus:outline-none focus:shadow:outline  pl-8" placeholder="Search">
            {{-- <div>
               <font-awesome-icon :icon="['fasr', 'magnifying-glass']" beat />
               <i class="fa-solid fa-copy"></i>
            </div> --}}
        </div>
      </div>

      <div class="absolute bg-gray-800 rounded w-64 mt-4">
          <ul>
            <li class="border-b border-gray-700">
                <a href="#" class="block hover:bg-gray-700 px-3 py-3">{{ $search }}</a>
            </li>
            <li class="border-b border-gray-700">
                <a href="#" class="block hover:bg-gray-700 px-3 py-3">Avengers</a>
            </li>
            <li class="border-b border-gray-700">
                <a href="#" class="block hover:bg-gray-700 px-3 py-3">Avengers</a>
            </li>

          </ul>
      </div>

</div>
