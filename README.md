# kirbytag html5youtube
by Jannik Beyerstedt from Hamburg, Germany
[jannikbeyerstedt.de](http://jannikbeyerstedt.de) | [Github](https://github.com/jbeyerstedt)


## responsive html5 youtube player embedding

#### update:
This is the version for kirby 2!

#### how to use
store this file in

    site/tags/

simply add your video ID in your markdown in the following way:

    (html5youtube: $video-ID)

you will only need the youtube-video-ID, not the whole link. Of course you can add more options (the ones that are in the embedding URL. See [google embedding options reference](https://developers.google.com/youtube/player_parameters?hl=en#Parameters). )

Now your markdown tag can look like this:

    (html5youtube: $video-ID options: &modestbranding=1)


#### CSS

simply add this two lines of code to your CSS file to make the youtube-player responsive/ switch from fixed size to the width of the container it is placed in.

    div.video-container {width: 100%; padding-bottom: 56%; padding-top: 30px; height: 0; overflow: hidden; max-width: 100%; height: auto; position: relative;}

    .video-container iframe {position: absolute; top: 0; left: 0; width: 100%; height: 100%;}
