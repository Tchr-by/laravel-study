@php
    /** @var App\Models\BlogCategory $item */
    /** @var App\Models\BlogCategory $categoryList */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-titile"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#maindata" class="nav-link active" role="tab" data-toggle="tab">Основные данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input  type="text"
                                    id="title" 
                                    name="title" 
                                    value="{{ $item->title}}"
                                    class="form-control"
                                    minlength="3"
                                    required>
                        </div>
                        <div class="form-group">
                            <label for="slug">slug</label>
                            <input  type="text" 
                                    id="slug"
                                    name="slug" 
                                    value="{{ $item->slug}}"
                                    class="form-control"
                                    required>
                        </div>

                        <div class="form-group">
                            <label for="parent_id">parent_id</label>
                            <select  type="text" 
                                    id="parent_id"
                                    name="parent_id" 
                                    value="{{ $item->parent_id}}"
                                    class="form-control"
                                    placeholder = "Viberite categoriy"
                                    required>
                                    @foreach ($categoryList as $categoryOption)
                                    <option value="{{ $categoryOption -> id}}"
                                        @if( $categoryOption->id == $item ->parent_id) selected @endif >
                                        {{ $categoryOption -> id_title}}
                                    </option>
                                    @endforeach
                                    </select>
                        </div>

                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea name="description" id="description"
                                    class="form-control">
                                    {{ $item->description}}
                            </textarea>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>