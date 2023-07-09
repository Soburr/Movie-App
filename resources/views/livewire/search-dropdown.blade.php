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

        <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

      @if (strlen($search) >= 2)
      <div class="absolute bg-gray-800 rounded w-64 mt-4">

        @if ($searchResults->count() > 0)
        <ul>
            @foreach ($searchResults as $result)
              <li class="border-b border-gray-700">
                  <a href="{{ route('movie.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                    @if ($result['poster_path'])
                      <img src="https://image.tmdb.org/t/p/w92{{ $result['poster_path'] }}" alt="Poster" class="w-12">
                    @else
                      <img src="https://via.placeholder.com/50x75" alt="Poster" class="w-12">
                    @endif
                    <span class="ml-4">{{ $result['title'] }}</span>
                  </a>
              </li>
            @endforeach
         </ul>
         @else
           <div class="px-3 py-3">No results for "{{ $search }}"</div>
        @endif
      </div>
      @endif

</div>
