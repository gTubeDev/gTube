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
                    <table id="results">
                        <tr>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                        </tr>
                        <tr>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                        </tr>
                        <tr>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                        </tr>
                        <tr>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                            <td><div class="video"><div class="videoBlock"></div><div id="videoTitle">Video</div></div></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
