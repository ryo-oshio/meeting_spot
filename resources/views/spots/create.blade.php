<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/spots" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="spot[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('spot.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="spot[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('spot.body') }}</p>
            </div>
            <div class="infomation">
                <h2>Infomation</h2>
                <fieldset>
                    <legend>混雑度</legend>
                    
                    <div>
                        <input type="radio" id="1" name="congetion" value="1" checked />
                        <label for="1">1</label>
                        <input type="radio" id="2" name="congetion" value="2" checked />
                        <label for="2">2</label>
                        <input type="radio" id="3" name="congetion" value="3" checked />
                        <label for="3">3</label>
                        <input type="radio" id="4" name="congetion" value="4" checked />
                        <label for="4">4</label>
                        <input type="radio" id="5" name="congetion" value="5" checked />
                        <label for="5">5</label>
                    </div>
                    
                    <div>
                        <input type="radio" id="6" name="congetion" value="6" checked />
                        <label for="6">6</label>
                        <input type="radio" id="7" name="congetion" value="7" checked />
                        <label for="7">7</label>
                        <input type="radio" id="8" name="congetion" value="8" checked />
                        <label for="8">8</label>
                        <input type="radio" id="9" name="congetion" value="9" checked />
                        <label for="9">9</label>
                        <input type="radio" id="10" name="congetion" value="10" checked />
                        <label for="10">10</label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>行きやすさ</legend>
                    
                    <div>
                        <input type="radio" id="1" name="access" value="1" checked />
                        <label for="1">1</label>
                        <input type="radio" id="2" name="access" value="2" checked />
                        <label for="2">2</label>
                        <input type="radio" id="3" name="access" value="3" checked />
                        <label for="3">3</label>
                        <input type="radio" id="4" name="access" value="4" checked />
                        <label for="4">4</label>
                        <input type="radio" id="5" name="access" value="5" checked />
                        <label for="5">5</label>
                    </div>
                    
                    <div>
                        <input type="radio" id="6" name="access" value="6" checked />
                        <label for="6">6</label>
                        <input type="radio" id="7" name="access" value="7" checked />
                        <label for="7">7</label>
                        <input type="radio" id="8" name="access" value="8" checked />
                        <label for="8">8</label>
                        <input type="radio" id="9" name="access" value="9" checked />
                        <label for="9">9</label>
                        <input type="radio" id="10" name="access" value="10" checked />
                        <label for="10">10</label>
                    </div>
                </fieldset>
                <label for="minute">辿り着くまでの時間</label>
                <input type="number" id="minute" name="minute" min="1" max="100" />
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>