<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
    <div class="jumbotron" id="mainJumbotron">
        <form method="post" action="{{route('home.post')}}">
            {{ csrf_field() }}
        <div class="panel panel-default">
        
            <div class="panel-heading">文章URL抓取</div>
        
            <div class="panel-body">
                <div class="form-group">
                    <label for="article_title">文章標題</label>
                    <input type="text" class="form-control" id="article_title" name="article_title" placeholder="文章標題">
                </div>
                <div class="form-group">
                    <label for="website_url">網站URL</label>
                    <input type="text" class="form-control" id="website_url" name="website_url" placeholder="網站URL">
                </div>
            
                <button type="submit" class="btn btn-default">抓取</button>
            </div>
        </div>
        </form>
        <div class="panel panel-default">
        
            <div class="panel-heading">文章URL</div>
        
            <div class="panel-body">
                <h3></h3>
            </div>
        </div>
    </div>
    </body>
</html>
