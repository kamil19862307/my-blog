@extends('layouts.blog')

@section('title', 'Blog single page')

@section('content')

    <div id="content-wrap">

{{--        @include('layouts.incs.blog-sitebar')--}}

        <div id="main" style="width: auto;"><a name="TemplateInfo"></a>
            <h1>Template Info</h1>
            <p><strong>SimpleBlog 1.0</strong> is a free, W3C-compliant, CSS-based website template by <strong>styleshout.com</strong>.
                This work is distributed under the
                <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/2.5/">
                    Creative Commons Attribution 2.5 License
                </a>
                , which means that you are free to use and modify it for any
                purpose. All I ask is that you include a link back to my website in your credits.</p>
            <p>For more free designs, you can visit my website to see my other works.</p>
            <p>Good luck and I hope you find my free templates useful!</p>
            <p class="post-footer align-right"><a href="#" class="readmore">Read more</a> <a href="#" class="comments">Comments
                    (7)</a> <span class="date">Oct 01, 2006</span></p>
            <a name="SampleTags"></a>
            <h1>Sample Tags</h1>
            <h3>Code</h3>
            <p><code> code-sample { <br/>
                    font-weight: bold;<br/>
                    font-style: italic;<br/>
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
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat....</p>
            </blockquote>
            <h3>Image and text</h3>
            <p><a href="#"><img src="/images/blog/firefox.jpeg" width="100" height="120" alt="firefox"
                                class="float-left"/></a>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id
                urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo
                tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci
                ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend
                magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum.
                Aliquam ornare diam iaculis nibh. Proin luctus, velit pulvinar ullamcorper nonummy, mauris enim eleifend
                urna, congue egestas elit lectus eu est. </p>
            <h3>Example Form</h3>
            <form action="#">
                <p>
                    <label>Name</label>
                    <input name="dname" value="Your Name" type="text" size="30"/>
                    <label>Email</label>
                    <input name="demail" value="Your Email" type="text" size="30"/>
                    <label>Your Comments</label>
                    <textarea rows="5" cols="5"></textarea>
                    <br/>
                    <input class="button" type="submit"/>
                </p>
            </form>
            <br/>
        </div>
    </div>

@endsection
