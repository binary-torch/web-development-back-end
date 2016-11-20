<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panda | Home Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
        <link rel="stylesheet" href="<?= assets("css/global.css") ?>">
    </head>
    <style>
        body{
            padding-top: 100px;
            background: linear-gradient(141deg, #f6fbff 10%, #ecf0f1 30%, #ecf0f1 75%);
        }
    </style>
    <body>
        <div class="ui top fixed stackable menu">
            <a class="item" href="index.html">
                <img style="margin: auto" src="<?= assets("images/logo.png") ?>" alt="logo">
            </a>
            <a class="item" href="#">
                <i class="search icon"></i>
                Discover
            </a>
            <a class="item" href="#">
                <i class="info icon"></i>
                About
            </a>
            <a class="item" href="#">
                <i class="flag outline icon"></i>
                Support Center
            </a>
            <div class="item right">
                <div class="ui dropdown menuTop">
                    <div class="ui button bg-light icon circular profile">
                        <i class="user icon"></i> Saleem Hadad
                    </div>
                    <div class="ui  popup top left transition hidden">
                        <div class="ui link list">
                            <a class="item" href="#">
                                <i class="attention icon"></i> Profile
                            </a>
                            <a class="item" href="#">
                                <i class="settings icon"></i> Settings
                            </a>
                            <a class="item" href="#">
                                <i class="power red icon"></i> Log out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui container">
            <div class="ui stackable grid">
                <div class="four wide column">
                    <div class="ui segment">
                        <div class="text-center">
                            <a href="#">
                                <img class="ui circular bg-light image" width="100px" height="100px" style="margin: auto" src="<?= assets("images/profiles/avatar3.png") ?>">
                                <h3 class="tc-dark">Saleem Hadad</h3>
                            </a>
                            <div class="ui divider"></div>
                            <div class="ui two columns stackable grid">
                                <div class="column">
                                    <h3>102<br><span class="tc-grey">Posts</span></h3>
                                </div>
                                <div class="column">
                                    <h3>102<br><span class="tc-grey">Friends</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="ui divider"></div>
                        <p><i class="facebook grey icon"></i> www.fb.com/saleem</p>
                        <p><i class="twitter grey icon"></i> www.fb.com/saleem</p>
                        <p><i class="linkedin grey icon"></i> www.fb.com/saleem</p>
                    </div>
                </div>
                <div class="twelve wide column">
                    <div class="ui segment" style="box-shadow: none;">
                        <div class="ui secondary  blue pointing menu">
                            <a class="active tc-blue item">
                                <i class="pencil icon"></i> Share an update
                            </a>
                            <a class="tc-green item">
                                <i class="image icon"></i> Share a photo
                            </a>
                        </div>
                        <div class="ui form">
                            <div class="field">
                                <textarea name="post" id="post" rows="1" style="border: none" onkeyup="textAreaAdjust(this)" placeholder="Write something.."></textarea>
                            </div>
                            <div class="ui divider"></div>
                            <div class="ui button blue"><i class="pencil icon"></i> Post</div>
                        </div>
                    </div>
                    <!--start card-->
                    <div class="ui fluid blue card">
                        <div class="content">
                            <div class="right floated meta">14h</div>
                            <img class="ui avatar image" src="images/profiles/avatar1.png"> Elliot
                        </div>
                        <div class="content">
                            <h3>This is just a dummy post to show you the functionality is working</h3>
                        </div>
                        <div class="content">
                            <span class="right floated">
                              <i class="heart outline like icon"></i>
                              17 likes
                            </span>
                            <i class="comment icon"></i>
                            3 comments
                        </div>
                        <div class="extra content">
                            <form class="ui form small addComment-form">
                                <div class="field">
                                    <div class="ui fluid transparent input">
                                        <input type="text" name="post" placeholder="Add comment..." autocomplete="off" onkeypress="return event.keyCode != 13;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end card-->
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.js"></script>
        <script>
            $('.profile').popup({
                inline     : true,
                hoverable  : true,
                position   : 'top right'
            });
            function textAreaAdjust(area) {
                area.style.height = "1px";
                area.style.height = (25+area.scrollHeight)+"px";
            }
        </script>
    </body>
</html>