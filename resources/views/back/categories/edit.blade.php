<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label>نام دسته بندی </label>
            <input type="text" name="title" class="form-control" value="{{ $category->title }}">
        </div>
    </div>
    <div class="col-md-6">
        <fieldset class="form-group">
            <label>تصویر</label>
            <div id="image" class="custom-file">
                <input  type="file" accept="image/*" name="image" class="custom-file-input">
                <label class="custom-file-label" for="image">{{ $category->image }}</label>
                <small>بهترین اندازه <span class="text-danger">{{ config('front.imageSizes.productCategoryImage') }}</span> پیکسل می باشد.</small>
            </div>
        </fieldset>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>عنوان سئو </label>
            <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>url</label>
            <input id="slug" type="text" class="form-control" name="slug" value="{{ $category->slug }}">
            <p>
                <small >
                    <a id="generate-category-slug" href="#">ایجاد خودکار</a>
                    <span id="slug-spinner" class="spinner-grow spinner-grow-sm text-success" role="status" style="display: none;">
                        <span class="sr-only">Loading...</span>
                    </span>
                </small>
            </p>
        </div>
    </div>
    <div class="col-md-6">
        <fieldset class="form-group">
            <label>تصویر پس زمینه</label>
            <div id="background_image" class="custom-file">
                <input  type="file" accept="image/*" name="background_image" class="custom-file-input">
                <label class="custom-file-label" for="background_image">{{ $category->background_image }}</label>
            </div>
        </fieldset>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>توضیحات سئو</label>
            <textarea class="form-control" name="meta_description" rows="3">{{ $category->meta_description }}</textarea>
        </div>
    </div>
    <div class="col-md-6">
        <fieldset class="form-group">
            <label>کلمات کلیدی</label>
            <input type="text" name="tags" class="form-control tags" value="{{ $category->getTags }}">
        </fieldset>
    </div>
</div>
