=== Last.wp ===
Contributors: kylehotchkiss
Donate link: http://kylehotchkiss.com/
Tags: last.fm, last.wp, music, client-side, widget, javascript, jquery, 
Requires at least: 2.8
Tested up to: 2.9
Stable tag: trunk

Last.wp is a Wordpress widget that shows your guests what you've been listening to on Last.fm, via a jQuery plugin!

== Description ==

So do you want the world to know what you just listened to? Do you want to show it off in your... *Wordpress sidebar*? I know I do! What Last.wp does is
show a few of the songs you just scrobbled over to Last.fm. It stands out beyond the other choices because it does it's dirty work in Javascript (which can speed up 
your server, because it doesn't have to make request over to Last.fm every page load, rather your Guests computer does it). It displays album artwork, the song name,
the artist name, and the album name! Your guests will be AMAZED when they find your recent obsession with Conway Twitty! They'll gasp in awe when they see how much you
played the beetles within the past five minutes, and their jaws will drop when they see you've been spinning N-Sync albums! Wait no longer, your guests can be amazed **today**!

On the technical side, Last.wp is powered by a small plugin provided by the kind people over at Engage Interactive. (Thanks for providing it under the GPL guys!). Unfortunatly,
it requires each person to have their own API key as of now, due to Last.fm's confusing API system. It's easy to get one, you just login and go to the API screen, create a new
application, and **Voila**, your very own API key! (Consult the Instructions for details)

== Installation ==
1. Go get your Last.fm Application API Key. 
2. Upload the `lastwp` directory into `/wp-content/plugins/` (Or whereever you store plugins).
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. In the widgets dashboard, add `Last.wp` to your sidebar.
6. Add your username, unless you want to what's going playing in *someone elses* ear.
7. Add your API Key.
8. Listen to some music, and it's now shared with the world.

== Frequently Asked Questions ==

= Do I absolutly need to get an API key? =
As of right now, yes. The reason being that Last.fm requries you to select the type of site the plugin will be used on. (Personal, Commercial, etc.) and if I were to just place mine in
everybodies site, One site could be violating the API ToS of Last.fm, and they could disable that key thus disabling everybodies fun. =( So the best way to go about doing this is to make each person
(Read: You can use this API on muliple widgets, and maybe even multiple applications.) use their own key, that way one person violating the ToS won't harm many people. Luckily, getting an
api key is easy, easy. 

= What happens if the Guest doesn't have Javascript enabled? =
If your guests are so afraid of Javascript that they turn it off, they'd be horrified at your musical taste! Just kidding. There is a message informing them that widget doesn't show without
Javascript being enabled.

= The album names don't come up! Help!?! =
Yeah, this one is tough. I don't know what the deal is with these album names randomly showing and not. It may have to deal with how the songs were scrobbled or that the API is returning them 
right. 

= How come the most songs I can show is 5? =
After people have just about passed out in terror of your musical taste, They won't be conscious enough to see the rest! ;) If they want to see more, they can click the "See more on Last.fm" link ;)

= My music is fine, but I don't see album artwork :( =
Sorry bud - this is all Last.fm, they do have some bad tags on there ya know. If your tags are off in your music application this could happen too! (I do recommend legal music, it typically
has proper tags to start.)

= Can I customize how it looks? =
Of course you *can*, and make it look super epic for your blog, but it took a while of playing with CSS to make the album art come up nicely! Just edit the `lastwp.css` file, or maybe even poke around at
the images! 

= I love the plugin, How can I ever thank you? =
Just tweet @kylehotchkiss and say so! And thank the fellows at Engage Interactive too! I would love to hear that people are using it.

== Screenshots ==
1. Last.wp used on my blog, I guess my sidebar is a little bit small ;)

== Changelog ==

= 0.2 = 
Bingo. Last.wp is sorta pretty now. Now featuring "Now Playing" indicator, nicer album artwork, and some mild bugfixes. It is now recommended to use Last.wp with a wider sidebar
if that's at all possible!

= 0.1 =
Now that Last.wp is released, the world just can't ever be the same...

== Upgrade Notice ==

= 0.2 = 
Updating will probably erase custom CSS, sorry! It will replace it with cooler effects still. New features: Now playing indicator, and cooler album art! 
If the upgrade isn't working for you, make sure you clear the cache (Typically Ctrl/Shift - Reload) and it should work nicely again.

= 0.1 = 
WoAh buddy, it's time for an UpGrAdE.
