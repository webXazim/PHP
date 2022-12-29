<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/blog/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" required />
            <x-form.input name="slug" required />
            <x-form.input name="thumbnail" type="file" required />
            <x-form.textarea name="excerpt" required />
            <x-form.textarea id="body" name="body" required />
            <div class="d-flex p-2 addbtn">

                <p onclick="addhead()">Heading2</p>
                <p onclick="addlink()">Link</p>
                <p onclick="addlist()">List</p>
                <p onclick="addbq()">Blockquote</p>
                <p onclick="adddownloadbtn()">dButton</p>
                <p onclick="addtable()">Table</p>
                <p onclick="addimage()">Image</p>
                <p onclick="addVideo()">Video</p>
                {{-- new js here --}}
                <script type="text/javascript">
                    function addhead() {

                        document.getElementById("body").value += `<h2 id="section0">edit</h2>`;
                    }

                    function addlink() {

                        document.getElementById("body").value += `<a href="#">edit</a>`;
                    }

                    function addlist() {

                        document.getElementById("body").value += `
<ul>
    <li>edit1</li>
    <li>edit2</li>
    <li>edit3</li>
</ul>
                        `;
                    }

                    function addbq() {

                        document.getElementById("body").value += `
<div id="bq">
    <blockquote cite="http://www.webxazim.com">edit
        <span>edit</span>
    </blockquote>
</div>
            `;
                    }

                    function adddownloadbtn() {

                        document.getElementById("body").value += `
<div class="filedownloadbtn mb-5">
    <a href="https://dl.dropbox.com/s/sum3alsyod1u7cm/test%20pdf.pdf?dl=0" download="test pdf">download</a>
</div>
            `;
                    }

                    function addtable() {

                        document.getElementById("body").value += `
<table id="customers">
    <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td>Berglunds snabbköp</td>
        <td>Christina Berglund</td>
        <td>Sweden</td>
    </tr>
</table>
`;
                    }

                    function addimage() {

                        document.getElementById("body").value += `
<figure>
    <img src="https://dl.dropbox.com/s/moca0xqfqz2ljgo/noimg.jpg?dl=0" alt="edit" style="width:100%">
    <figcaption>edit</figcaption>
</figure>
            `;
                    }

                    function addVideo() {

                        document.getElementById("body").value += `
<div class="vid pt-2 mb-5">
    <iframe src="https://www.youtube.com/embed/5fb2aPlgoys"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
    </iframe>
</div>`;
                    }
                </script>
            </div>
            <x-form.textarea name="tags" id="tags" required />
            <div class="addbtn">
                <p onclick="addTag()">Add Tag</p>
                <script>
                    function addTag() {
                        document.getElementById("tags").value += `<p>tag</p>
`
                    }
                </script>
            </div>

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>

    </x-setting>
</x-layout>
