<x-productLayout>
    <x-setting :heading="'Edit Product: ' . $product->name">
        <form method="POST" action="/shop/admin/products/{{ $product->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="name" :value="old('name', $product->name)" required />
            <x-form.input name="pvl" :value="old('pvl', $product->pvl)" required />
            <x-form.input name="price" :value="old('price', $product->price)" required />
            <x-form.input name="off" :value="old('off', $product->off)" required />
            <x-form.input name="slug" :value="old('slug', $product->slug)" required />

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="image" type="file" :value="old('image', $product->image)" />
                </div>

                <img src="{{ asset('storage/' . $product->image) }}" alt="" class="rounded-xl ml-6"
                    width="100">
            </div>

            <x-form.textarea name="excerpt" required>{{ old('excerpt', $product->excerpt) }}</x-form.textarea>
            <x-form.textarea id="description" name="description" required>
                {{ old('description', $product->description) }}
            </x-form.textarea>
            <div class="d-flex p-2 addbtn">

                <p onclick="addhead()">Heading2</p>
                <p onclick="addlink()">Link</p>
                <p onclick="addlist()">List</p>
                <p onclick="addbq()">Blockquote</p>
                <p onclick="adddownloadbtn()">dButton</p>
                <p onclick="addtable()">Table</p>
                <p onclick="addpricing()">Pricing</p>
                <p onclick="addimage()">Image</p>
                <p onclick="addVideo()">Video</p>
                {{-- new js here --}}
                <script type="text/javascript">
                    function addhead() {

                        document.getElementById("description").value += `<h2 id="section">edit</h2>`;
                    }

                    function addlink() {

                        document.getElementById("description").value += `<a href="#">edit</a>`;
                    }

                    function addlist() {

                        document.getElementById("description").value += `
<ul>
    <li>edit1</li>
    <li>edit2</li>
    <li>edit3</li>
</ul>
                        `;
                    }

                    function addbq() {

                        document.getElementById("description").value += `
<div id="bq">
    <blockquote cite="http://www.webxazim.com">edit
        <span>edit</span>
    </blockquote>
</div>
            `;
                    }

                    function adddownloadbtn() {

                        document.getElementById("description").value += `
<div class="filedownloadbtn mb-5">
    <a href="https://dl.dropbox.com/s/sum3alsyod1u7cm/test%20pdf.pdf?dl=0" download="test pdf">download</a>
</div>
            `;
                    }

                    function addtable() {

                        document.getElementById("description").value += `
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

                        document.getElementById("description").value += `
<figure>
    <img src="edit" alt="edit" style="width:100%">
    <figcaption>edit</figcaption>
</figure>
            `;
                    }

                    function addVideo() {

                        document.getElementById("description").value += `
<div class="vid pt-2 mb-5">
    <iframe src="https://www.youtube.com/embed/5fb2aPlgoys"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
    </iframe>
</div>`;
                    }

                    function addpricing() {

                        document.getElementById("description").value += `
<p style="">If you have not Domain and Hosting then you can buy from anywhere
                                        you want and also you can buy my recommended plan below at low cost from <a
                                            href="#">hosting service</a></p>

                                    <div class="columns">
                                        <ul class="price">
                                            <li class="header">Starter</li>
                                            <li class="">$ 9.99 / year</li>
                                            <li>10GB Storage</li>
                                            <li>10 Emails</li>
                                            <li>10 Domains</li>
                                            <li>100GB Bandwidth</li>
                                            <li class="grey d-grid"><a href="#" class="button">View</a></li>
                                        </ul>
                                    </div>

                                    <div class="columns">
                                        <ul class="price">
                                            <li class="header" style="background-color:#000015">Pro</li>
                                            <li class="">$ 24.99 / year</li>
                                            <li>25GB Storage</li>
                                            <li>25 Emails</li>
                                            <li>25 Domains</li>
                                            <li>500GB Bandwidth</li>
                                            <li class="grey d-grid"><a href="#" class="button">View</a></li>
                                        </ul>
                                    </div>

                                    <div class="columns">
                                        <ul class="price">
                                            <li class="header">Premium</li>
                                            <li class="">$ 49.99 / year</li>
                                            <li>50GB Storage</li>
                                            <li>50 Emails</li>
                                            <li>50 Domains</li>
                                            <li>Unlimited Bandwidth</li>
                                            <li class="grey d-grid"><a href="#" class="button">View</a></li>
                                        </ul>
                                    </div>
                                </div>`;
                    }
                </script>
            </div>

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\ProductCategory::all() as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-productLayout>
