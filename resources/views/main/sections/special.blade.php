<section id="three" class="wrapper style3 special servicesPiece">
    <div class="inner">
        <header class="major">
            <h2>Accumsan mus tortor nunc aliquet</h2>
            <p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br/>
                fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
        </header>

        <div class="row">


            {{-- number of categories devided by 2 so we get 2 columns. Probably take care of it here --}}

            {{-- Chunk one do something like

                @for ( $categoryNumber = 0; $categoryNumber < $serviceCategories->count() / 2; $categoryNumber++)
                    @foreach($serviceCategory[categoryNumber] as $serviceItem)
                        do stuff
            --}}
            @foreach($chunks as $chunk)
                <div class="col-sm-6">
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
