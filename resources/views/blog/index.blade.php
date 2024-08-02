@extends('layouts.blog')

@section('title', 'Main page')

@section('content')
    <div id="header">
        <h1 id="logo">PHP<span class="gray">.ZONE</span></h1>
        <h2 id="slogan">Моя копия сайта co статьями из
            <a target="_blank" style="color: #d6d9e0;" href="https://php.zone/">php.zone</a>
        </h2>
        <div id="searchform">
            <form method="post" class="search" action="#">
                <p>
                    <input name="search_query" class="textbox" type="text" />
                    <input name="search" class="button" type="submit" value="search" />
                </p>
            </form>
        </div>
    </div>
    <div id="menu">
        <ul>
            <li id="current"><a href="#"><span>Home</span></a></li>
            <li><a href="#"><span>Archives</span></a></li>
            <li><a href="#"><span>Downloads</span></a></li>
            <li><a href="#"><span>Services</span></a></li>
            <li><a href="#"><span>Support</span></a></li>
            <li><a href="#"><span>About</span></a></li>
        </ul>
    </div>
    <div id="content-wrap">
        <div id="sidebar">
            <h1>Sidebar Menu</h1>
            <ul class="sidemenu">
                <li><a href="#">Home</a></li>
                <li><a href="#TemplateInfo">Template Info</a></li>
                <li><a href="#SampleTags">Sample Tags</a></li>
                <li><a href="#">More Free Templates</a></li>
                <li><a href="#">Premium Templates</a></li>
            </ul>
            <h1>Site Partners</h1>
            <ul class="sidemenu">
                <li><a href="#">Dreamhost</a></li>
                <li><a href="#">4templates</a></li>
                <li><a href="#">TemplateMonster</a></li>
                <li><a href="#">Fotolia.com</a></li>
                <li><a href="#">Text Link Ads</a></li>
            </ul>
            <h1>Wise Words</h1>
            <p>&quot;Be not afraid of life. Believe that life is worth living, and your belief will help create the fact.&quot; </p>
            <p class="align-right">- William James</p>
            <h1>Support Styleshout</h1>
            <p>If you are interested in supporting my work and would like to contribute, you are welcome to make a small donation through the donate link on my website - it will be a great help and will surely be appreciated.</p>
        </div>
        <div id="main"> <a name="TemplateInfo"></a>
            <h1>Template Info</h1>
            <p><strong>SimpleBlog 1.0</strong> is a free, W3C-compliant, CSS-based website template by <strong>styleshout.com</strong>. This work is distributed under the <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/2.5/"> Creative Commons Attribution 2.5 License</a>, which means that you are free to use and modify it for any purpose. All I ask is that you include a link back to my website in your credits.</p>
            <p>For more free designs, you can visit my website to see my other works.</p>
            <p>Good luck and I hope you find my free templates useful!</p>
            <p class="post-footer align-right"> <a href="#" class="readmore">Read more</a> <a href="#" class="comments">Comments (7)</a> <span class="date">Oct 01, 2006</span> </p>
            <a name="SampleTags"></a>
            <h1>Sample Tags</h1>
            <h3>Code</h3>
            <p><code> code-sample { <br />
                    font-weight: bold;<br />
                    font-style: italic;<br />
                    } </code></p>
            <h3>Example Lists</h3>
            <ol>
                <li>example of</li>
                <li>ordered list</li>
            </ol>
            <ul>
                <li>example of</li>
                <li>unordered list</li>
            </ul>
            <h3>Blockquote</h3>
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat....</p>
            </blockquote>
            <h3>Image and text</h3>
            <p><a href="#"><img src="images/images.jpeg" width="100" height="120" alt="firefox" class="float-left" /></a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Aliquam ornare diam iaculis nibh. Proin luctus, velit pulvinar ullamcorper nonummy, mauris enim eleifend urna, congue egestas elit lectus eu est. </p>
            <h3>Example Form</h3>
            <form action="#">
                <p>
                    <label>Name</label>
                    <input name="dname" value="Your Name" type="text" size="30" />
                    <label>Email</label>
                    <input name="demail" value="Your Email" type="text" size="30" />
                    <label>Your Comments</label>
                    <textarea rows="5" cols="5"></textarea>
                    <br />
                    <input class="button" type="submit" />
                </p>
            </form>
            <br />
        </div>
    </div>
    <div id="footer">
        <p> &copy; 2006 <strong>Your Company</strong> &nbsp;&nbsp; Design by: <a href="http://www.styleshout.com/">styleshout</a> | Valid: <a href="http://validator.w3.org/check/referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Home</a>&nbsp;|&nbsp; <a href="#">Sitemap</a>&nbsp;|&nbsp; <a href="#">Home</a> </p>
    </div>
@endsection
