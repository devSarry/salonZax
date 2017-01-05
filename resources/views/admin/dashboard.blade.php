@extends('admin.layout.app')

@section('content')
    <h1 class="page-header">Dashboard</h1>
    <hr>
    <input v-model=vm.searchPlace v-gmaps-searchbox:location=vm>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>New Comments!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="row" id="app">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <div class="panel-title">New vs Returning Visitors</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"> <i class="fa fa-refresh"></i> </a>
                        <a href="#" data-rel="reload"> <i class="fa fa-cog"></i> </a>
                    </div>
                </div>
                <div class="panel-body">
                    Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et,
                    <br><br>
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
                    <br><br>
                </div>
            </div>


        </div>
    </div>

@stop

curl -s --user 'api:key-415dde49fdd29b70bf071090b632bd24' \
https://api.mailgun.net/v3/sandbox65c0012aaeaa4648a9f0a66946631d3b.mailgun.org \
-F from='Excited User <mailgun@YOUR_DOMAIN_NAME>' \
    -F to=jsarry@gmail.com \
    -F subject='Hello' \
    -F text='Testing some Mailgun awesomness!'