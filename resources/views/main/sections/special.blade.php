<section id="one" class="wrapper {{ $service_section->section->color }} special servicesPiece">
    <div class="inner">
        <header class="major">
            <h2>{{ $service_section->section->title }}</h2>
            <p>{{ $service_section->section->body }}</p>
        </header>

        <div class="row">


            {{-- number of categories devided by 2 so we get 2 columns. Probably take care of it here --}}

            {{-- Chunk one do something like

                @for ( $categoryNumber = 0; $categoryNumber < $serviceCategories->count() / 2; $categoryNumber++)
                    @foreach($serviceCategory[categoryNumber] as $serviceItem)
                        do stuff
            --}}
            @foreach($chunks as $chunk)
                <div class="service-item">
                    @foreach($chunk as $category)
                        @if($category->approved)
                            <div class="singleService">
                                <h2 class="serviceHeader">{{ $category->name }}</h2>
                                @foreach($category->services as $service)
                                    <div class="serviceItem clearfix">
                                        <span class="serviceName serviceItemPiece">{{ $service->service }}</span>
                                        <span class="servicePrice serviceItemPiece">{{ $service->price }}‎€</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach

                </div>

            @endforeach

        </div>

    </div>
</section>
