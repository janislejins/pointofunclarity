<div id="wrap">
    <article>
       <img src="http://janislejins.com/images/Ysb7BjSiNIjFFsFxp1zVMpWOBj0=/54/original/" style="width:80%; max-height:auto;"></img>
    </article>
    <aside style="font-size:0.4em; text-align:left;">
        <p><strong><em> Relational Objects #1 - #5 </em>, 2013 </strong><caption> Server Side Scripting &  a real-time generative installation - Transparency, Perspex, LED lighting, Microcontroller computer programmed with custom operating protocols, Ethernet cable, breadboard, electrical tape, DC adaptor, thermal printer, receipt paper and web server side scripting hacking data from various data sources - Total size variable <a href="http://janislejins.com/relational-objects-1-5/" target="_blank"> more info - janislejins.com/doricstacks2015/</a> </caption></p>
    </aside>
</div>



#### *'Socialise' art objects by placing them in constituent relation to the dynamic real-time data flows permeating our world *



#### Thought of Art as a 'Social Transaction'
---
#### Ergo Relational Objects had a Simple Formula -



<div id="wrap">
    <article>
       <img src="http://janislejins.com/images/jtCXht9co2KfPIyBH7usVUlQ1Kw=/280/width-1920/" style="width:80%; max-height:auto;"></img>
    </article>
    <aside style="font-size:0.4em; text-align:left;">
        <p><strong><em> @JustinBieber</em>, 2013 </strong><caption> Multimedia installation - Microcontroller Computer, Ethernet Cable, Thermal Printer, Receipt Paper. Dynamic work, starts at, 10cm x 20cm x 30cm</p>
        <p>
This work intercepts tweets directed at pop-star Justin Bieber and prints the messages out onto receipt paper live in 12 point font. The work uses almost a kilometre of paper every day. <a href="http://janislejins.com/justinbieber/" target="_blank"> more info - http://janislejins.com/justinbieber/</a> </caption></p>
    </aside>
</div>



<div id="wrap">
    <article>
       <img src="http://janislejins.com/media/images/3RO.max-1920x1080.jpg" style="width:80%; max-height:auto;"></img>
    </article>
    <aside style="font-size:0.4em; text-align:left;">
        <p><strong><em> Detail - Relational Object #1 – The Selfie. (Narcissus) - Image Detail</em>, 2013 </strong><caption> Generative installation. Transparency, Perspex, LED lighting, Microcontroller computer programmed with custom operating protocols, Ethernet cable, breadboard, electrical tape, DC adaptor, thermal printer, receipt paper and web server side scripting hacking data from the Artist’s Facebook.com account. <a href="http://janislejins.com/relational-objects-1-5/" target="_blank"> more info - janislejins.com/relational-objects-1-5/</a> </caption></p>
    </aside>
</div>



=



<div id="wrap">
    <article>
       <img src="http://janislejins.com/media/images/4RO.max-1920x1080.jpg" style="width:80%; max-height:auto;"></img>
    </article>
    <aside style="font-size:0.4em; text-align:left;">
        <p><strong><em>Relational Object #1 – The Selfie. (Narcissus)</em>, 2013 </strong><caption> Generative installation. Transparency, Perspex, LED lighting, Microcontroller computer programmed with custom operating protocols, Ethernet cable, breadboard, electrical tape, DC adaptor, thermal printer, receipt paper and web server side scripting hacking data from the Artist’s Facebook.com account. <a href="http://janislejins.com/relational-objects-1-5/" target="_blank"> more info - janislejins.com/relational-objects-1-5/</a> </caption></p>
    </aside>
</div>



#### Code formula
#### request data -> dump data -> print data
```PHP
// Set Inputs from FacebookAPI
$profileFeedInputs->setFields("name,message,created_time,from,to,type")->setLimit("10");
// Get Results from FacebookAPI
$profileFeedResults = $profileFeed->execute($profileFeedInputs)->getResults();
// read the json
$response_2 = json_decode($profileFeedResults->getResponse());
//Print the json in a format for the receipt printer
foreach ($response_2->{data} as $x) {
    echo "___________________________"."\n";
    echo "Janis Lejins - Recent "."\n";
    echo "Activity: "."\n";
    echo "posted a ".$x->{'type'}."\n";
    echo "at: ".$x->{'created_time'}."\n";
    foreach ($x->{to}->{data} as $z3) {
        echo "to: ".$z3->{'name'}."\n"; //code...
    }
    $z5 = $x->{'story'}."\n";
    echo $z5; //code...
    $z1 = $x->{'name'}."\n" ;
        echo($z1); //code...
    $z2 = $x->{'message'}."\n";
        echo $z2;
    $z3 = $x->{'caption'}."\n";
        echo $z3; //code...
    $z4 = $x->{'description'}."\n";
    echo $z4; //code...    
}
```



<div id="wrap">
    <article>
       <img src="http://janislejins.com/media/images/1R.max-1920x1080.jpg" style="width:80%; max-height:auto;"></img>
    </article>
    <aside style="font-size:0.4em; text-align:left;">
        <p><strong><em>Relational Objects #1 - #5 - Installation View (After 40mins)</em>, 2013 </strong><caption> Generative installation - Transparency, Perspex, LED lighting, Microcontroller computer programmed with custom operating protocols, Ethernet cable, breadboard, electrical tape, DC adaptor, thermal printer, receipt paper and web server side scripting hacking data from various data sources <a href="http://janislejins.com/relational-objects-1-5/" target="_blank"> more info - janislejins.com/relational-objects-1-5/</a> </caption></p>
    </aside>
</div>


<!-- 
<iframe id="vimeo_player" src="https://player.vimeo.com/video/151368279?autoplay=0&loop=0" width="100%" height="400px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<h1 style="font-size: 2vw;"> Relational Object #3 - We Got Him. (The Head of Holofernes) - Video Documentation </h1> -->
