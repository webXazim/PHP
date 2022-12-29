<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/blog/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" required />
            <x-form.input name="slug" :value="old('slug', $post->slug)" required />

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6"
                    width="100">
            </div>

            <x-form.textarea name="excerpt" required>{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea id="body" name="body" required>{{ old('body', $post->body) }}</x-form.textarea>
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
                        document.getElementById("body").value += `<h2 id="section">edit</h2>`;
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
    <a href="https://dl.dropbox.com/s/sum3alsyod1u7cm/test%20pdf.pdf?dl=0" download="test pdf">
        download
    </a>
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
    <img src="https://dl.dropbox.com/s/moca0xqfqz2ljgo/noimg.jpg?dl=0" alt="wxa">
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
                    allowfullscreen></iframe>
</div>
`;
                    }
                </script>
            </div>
            <x-form.textarea name="tags" id="tags" required>{{ old('tags', $post->tags) }}</x-form.textarea>
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
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
