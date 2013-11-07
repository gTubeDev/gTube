<!DOCTYPE html>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="main.css?v=<?= time(); ?>">

        <style type="text/css">
            #title{
                font-family: 'Open Sans', sans-serif;
            }
        </style>
        <meta charset="UTF-8">
        <title>gTube</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <div id="title">
                    gTube
                </div>
                <div id="SearchHelp">
                    <form method="get" action="#"> 
                        <table id="SearchTable"> 
                            <tr> 
                                <td>
                                    <input id="SearchBox" type="text" name="search_condition"> 
                                </td>
                                <td> 

                                    <input id="SearchSubmit" type="submit" value="Search">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div id="search">
                    <div class="videoLarge">
                        <div class="videoBlockLarge"></div>
                        <div id="videoTitleLarge">Big Black Cocks</div>
                    </div>
                </div>
                <div id="suggest">
                            <div id="videoTitleLargee">Suggested</div>
                            <div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div>
                            <div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div>
                            <div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div>
                            <div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div>
                            <div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div>
                </div>
                <div id="comments">
                    <div id="videoTitleLargee">Comments</div>
                    <div class="commentBlock">
                        <div class="commentBlockTitle">Generic /g/ user</div>
                        <div class="comment">I like boobs.</div>
                    </div><br/>
                    <div class="commentBlock">
                        <div class="commentBlockTitle">Generic /g/ user</div>
                        <div class="comment">I prefer man dingo.</div>
                    </div><br/>
                    <div class="commentBlock">
                        <div class="commentBlockTitle">Generic /g/ user</div>
                        <div class="comment">I like catalog websites</div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </body>
</html>
