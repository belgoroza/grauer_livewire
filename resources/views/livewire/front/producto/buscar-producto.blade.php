<div>
    <div
        x-data="{
          open: @entangle('showDropdown'),
          search: @entangle('search'),
          selected: @entangle('selected'),
          highlightedIndex: 0,
          highlightPrevious() 
          {
            if (this.highlightedIndex > 0) {
              this.highlightedIndex = this.highlightedIndex - 1;
              this.scrollIntoView();
            }
          },
          highlightNext() 
          {
            if (this.highlightedIndex < this.$refs.results.children.length - 1) {
              this.highlightedIndex = this.highlightedIndex + 1;
              this.scrollIntoView();
            }
          },
          scrollIntoView() 
          {
            this.$refs.results.children[this.highlightedIndex].scrollIntoView({
              block: 'nearest',
              behavior: 'smooth'
            });
          },
          updateSelected(id, codigo) 
          {
            this.selected = id;
            this.search = codigo;
            this.open = false;
            this.highlightedIndex = 0;
          },
      }">

        <div
            x-on:value-selected="updateSelected($event.detail.id, $event.detail.codigo)">
            <span>
              <div>
                <input
                  wire:model.debounce.300ms="search"
                  x-on:keydown.arrow-down.stop.prevent="highlightNext()"
                  x-on:keydown.arrow-up.stop.prevent="highlightPrevious()"
                  x-on:keydown.enter.stop.prevent="$dispatch('value-selected', {
                    id: $refs.results.children[highlightedIndex].getAttribute('data-result-id'),
                    codigo: $refs.results.children[highlightedIndex].getAttribute('data-result-codigo')
                  })" class="px-2 h-6 border border-blue-300 rounded text-blue-800 font-bold">
              </div>
            </span>

            <div
              x-show="open"
              x-on:click.away="open = false">
                <ul x-ref="results">
                  @forelse($results as $index => $result)
                    <li
                      wire:key="{{ $index }}"
                      x-on:click.stop="$dispatch('value-selected', 
                      {
                        id: {{ $result->id }},
                        codigo: '{{ $result->codigo }}'
                      })"
                      :class="
                      {
                        'bg-indigo-400': {{ $index }} === highlightedIndex,
                        'text-white': {{ $index }} === highlightedIndex
                      }"
                      data-result-id="{{ $result->id }}"
                      data-result-codigo="{{ $result->codigo }}" class="cursor-pointer">
                        <span wire:click="productoId({{ $result->id }})">{{ $result->codigo }} | {{ $result->descripcion }}</span>
                    </li>
                  @empty
                    <li>No results found</li>
                  @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>