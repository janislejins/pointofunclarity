<div id="wrap">
    <article>
       <img src="http://janislejins.com/images/ZlXcFtU6Tm7rGNIpzj97jpwh_vE=/284/width-1920/" style="width:80%; max-height:auto;"></img>
    </article>
    <aside style="font-size:0.4em; text-align:left;">
        <p><strong><em> Doric Stacks #1-#16 </em>, 2015 </strong> Web applications & installation artwork - assorted datasources, Python, HTML, CSS, Javascript, Bash Scripting, C++ , Flask Web Framework, Web Server, Client-Side computer, Google Chrome web browser, LED controllers, RGB LED light strips, polypropylene, Velcro, ethernet cable, USB cables, false floor, power supply, smoke machine & high fidelity speakers. 16 Columns, 244 x 60 x 60 cm each - 2GB -  <a href="http://janislejins.com/doricstacks2015/" target="_blank"> more info - janislejins.com/doricstacks2015/</a></p>
   
    </aside>
</div>



#### *Enable a felt relation between the participant and the real-time data flows which permeate our physical and virtual worlds*
<small> - *felt meant effective (physical relation), and affective (emotional) relation



<iframe width="100%" height="400" src="http://happysad.janislejins.com"></iframe><p style="font-size:0.4em; text-align:left;"><strong><em>Happy / Sad - (Sentiment Analysis of Latest Tweets)</em>, 2015</strong> Web Application - view at <a href="http://happysad.janislejins.com" target="_blank"> happysad.janislejins.com </a></p>



Key ideas - *"Sentiment Analysis", "Image Analysis"*, etc 
<small>- delegated aesthetic decisions to the program in real time - eg happy sad</small>

    def getColors():
        auth = tweepy.OAuthHandler(APP_KEY, APP_SECRET)
        auth.set_access_token(OAUTH_TOKEN, OAUTH_TOKEN_SECRET)
        api = tweepy.API(auth)
        public_tweets = api.search(q="the OR be OR to OR a OR of OR and OR in OR that OR have OR I OR it OR for OR not OR on OR with OR he OR as OR you OR do OR at OR this OR but OR his OR hers OR they OR we", result_type="recent",lang="en", count="100",include_entities="false")
        colorList = []
        for tweet in public_tweets:
            tb = TextBlob(tweet.text)
            # get sentiment value
            a = tb.sentiment.polarity
            # turn that sentiment into a color using controls
            color = colorItIn(a)
            colorList.append(color)
        finalDict = dict()
        count = 0
        for x, val in enumerate(colorList):
            if x == 0:
                finalDict[count] = {}
                finalDict[count]['start'] = val
            if x == 1:
                finalDict[count]['stop'] = val
                count += 1
            if x % 2 == 0:
                finalDict[count] = {}
                finalDict[count]['start'] = val
            else:
                if x > 2:
                    finalDict[count]['stop'] = val
                    count += 1
        return finalDict.values()

    def colorItIn(pol):
        if pol >= 0:
            x = scale(pol, (0.0, 1.0),(155,255))
            r = 231
            g = 215
            b = 255 - x
            rgb = [r,g,b]
            return rgb
        else:
            x = scale(pol, (-1.0, 0.0),(68,255))
            r = x
            g = 255
            b = 255
            rgb = [r,g,b]
            return rgb



## Code formula
<hr />
#### Server Side (Flask)
request data (python) -> process data (python) 
<hr />
#### Server | Client (Flask + web browser)
output color data (python + js GET) -> animate (as webpage)
<hr />
#### Client (Web browser)
Output data to columns (JS, USB via Local Websocket and webpage)



<div id="wrap">
    <article>
       <img src="http://janislejins.com/images/yl-Jz9-Ia4tNG2mcQstMr501c1I=/286/width-1920/" style="width:80%; max-height:auto;"></img>
    </article>
    <aside style="font-size:0.4em; text-align:left;">
        <p><strong><em> Doric Stacks #1-#16 </em>, 2015 </strong> Web applications & installation artwork - assorted datasources, Python, HTML, CSS, Javascript, Bash Scripting, C++ , Flask Web Framework, Web Server, Client-Side computer, Google Chrome web browser, LED controllers, RGB LED light strips, polypropylene, Velcro, ethernet cable, USB cables, false floor, power supply, smoke machine & high fidelity speakers. 16 Columns, 244 x 60 x 60 cm each - 2GB -  <a href="http://janislejins.com/doricstacks2015/" target="_blank"> more info - janislejins.com/doricstacks2015/</a></p>
   
    </aside>
</div>



<iframe width="100%" height="400" src="http://fuck.janislejins.com"></iframe><caption style="font-size:0.4em; text-align:left;"><strong><em>The Diagonal Of Personal Ecstasy - (Real-Time Sentiment Analysis of Latest PornMD Searches)</em>, 2015</strong> Web Application <a href="http://fuck.janislejins.com" target="_blank"> fuck.janislejins.com </a></caption></div>



<div id="wrap">
    <article>
       <img src="http://janislejins.com/images/1aX_AWZRa_RlvZNJxzWxMUMhP3A=/28/original/" style="width:80%; max-height:auto;"></img>
    </article>
    <aside style="font-size:0.4em; text-align:left;">
        <p><strong><em> Doric Stacks #1-#16 </em>, 2015 </strong> Web applications & installation artwork - assorted datasources, Python, HTML, CSS, Javascript, Bash Scripting, C++ , Flask Web Framework, Web Server, Client-Side computer, Google Chrome web browser, LED controllers, RGB LED light strips, polypropylene, Velcro, ethernet cable, USB cables, false floor, power supply, smoke machine & high fidelity speakers. 16 Columns, 244 x 60 x 60 cm each - 2GB -  <a href="http://janislejins.com/doricstacks2015/" target="_blank"> more info - janislejins.com/doricstacks2015/</a></p>
   
    </aside>
</div>