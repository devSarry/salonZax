<!-- Two -->
<section id="one" class="wrapper alt style2">
    <section class="spotlight">
        <div class="image"><img src="images/services.jpg" alt=""/></div>
        <div class="content">
            <h2>{{ $service_section->section[0]->title }}</h2>
            <p>{{ $service_section->section[0]->body }}</p>

            <div class="table-wrapper">

                <table class="alt">
                    <thead>
                    <tr>
                        <th>List of Services</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tbody>
                        @if($category->approved)
                            <tr>
                                <th><em>{{ $category->name }}</em></th>
                                <th></th>
                            </tr>
                            @foreach($category->services as $service)
                                <tr>
                                    <td>{{ $service->service }}</td>
                                    <td>{{ $service->price }}‎€</td>
                                </tr>
                            @endforeach
                            <tr>
                        @endif
                    @endforeach
                        </tbody>

                </table>
            </div>
        </div>{{--/table wrapper--}}
    </section>
</section>