<div wire:init="loadPopularGames" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
    @forelse ($popularGames as $game) 
    {{-- Start Popular Game --}}
    <x-game-card :game="$game" />
    @empty 
      @foreach (range(1, 12) as $game)
      <div class="game mt-8">
        <div class="relative inline-block">
          <div class="bg-gray-800 w-44 h-56"></div>
        </div>
        <div class="block text-transparent text-lg bg-gray-700 leading-tight rounded">Title goes here</div>
        <div class="text-transparent bg-gray-700 mt-3 rounded inline-block">PS4, PC, Switch</div>
      </div>
      @endforeach
    @endforelse
    {{-- End Popular game --}}
  </div>

  @push('scripts')
    @include('_rating', [
        'event' => 'gameWithRatingAdded'
    ])
  @endpush