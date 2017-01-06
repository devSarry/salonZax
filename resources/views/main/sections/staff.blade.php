<section class="wrapper {{ $staff_section->section->color }} special">
    <div class="inner">
        <header class="major">
            <h2>{{ $staff_section->section->title }}</h2>
            <p>{{ $staff_section->section->body }}</p>
        </header>
        @foreach($staff->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $staff)
            <div class="col-md-4 col-sm-12">
                <span class="image fit">
                    @laravelImage($staff->image->upload_dir , $staff->image->image, 300, 300,[
                                            'fit' => 'crop-top'])
                </span>
                <h2> {{ $staff->name }}: <strong>{{ $staff->title }}</strong></h2>

                <p>{{ $staff->body }}</p>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>